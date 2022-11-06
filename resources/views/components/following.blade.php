<div class="card p-4 mt-3">
  <div class="row">
    <div class="col">
      <a href="{{ route('profile', $user->username) }}" class="view-profile-link">
        <img src="{{ $user->gravatar() }}" class="rounded-circle" alt="{{ $user->name }}" width="40">
      </a>
    </div>
    <div class="col d-flex justify-content-end align-items-center">

      <form action="{{ route('following.store', $user->username) }}" method="post" class="d-inline">
        @csrf
        @if (Auth::user() != $user)
          @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
            <x-unfollow-button/>
          @else
            <x-follow-button/>
          @endif
        @endif
      </form>

    </div>
  </div>
  <div class="row mt-2">
    <div class="col">
      <a href="{{ route('profile', $user->username) }}" class="view-profile-link">
        <h6 class="mb-1">
          {{ $user->username }}
        </h6>
      </a>
      @if ($user->pivot)
        <small class="text-muted">
          {{ $user->pivot->created_at->diffForHumans() }}
        </small>
      @endif
    </div>
  </div>
</div>