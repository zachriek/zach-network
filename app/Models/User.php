<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\Following;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Following;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }

    public function gravatar($size = 100)
    {
        $default = 'mm';
        return "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=" . urlencode($default) . "&s=" . $size;
    }

    public function statuses()
    {
        return $this->hasMany(Status::class);
    }

    public function makeStatus($string)
    {
        $this->statuses()->create([
            'body' => $string,
            'identifier' => str()->slug(str()->random(31) . $this->id),
        ]);

        return back()->with('success', 'Your Status was sent');
    }

    public function timeline()
    {
        // $following = $this->follows->pluck('id');
        // return Status::whereIn('user_id', $following)
        //                 ->orWhere('user_id', $this->id)
        //                 ->latest()
        //                 ->get();

        return Status::latest()
            ->paginate(20)
            ->withQueryString();
    }

    public function timelineSearch($request)
    {
        return Status::where('body', 'like', "%" . $request->search . "%")
            ->latest()
            ->paginate(20)
            ->withQueryString();
    }
}
