<div class="row text-center justify-content-center my-3">
  <div class="col">
    @if (Auth::user()->isNot($user))
      <form action="{{ route('following.store', $user->username) }}" method="post">
        @csrf
          @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
            <button type="submit" class="btn btn-lg btn-outline-dark">
              <i class="bi bi-person-x-fill"></i> Unfollow
            </button>
          @else
            <button type="submit" class="btn btn-lg btn-dark">
              <i class="bi bi-person-plus-fill"></i> Follow
            </button>
          @endif
      </form>
    @else
      <a class="btn btn-lg btn-dark" href="{{ route('profile.edit') }}">
        Edit Profile
      </a>
    @endif
  </div>
</div>

<div class="row justify-content-center my-3">
  <div class="col-lg-3 col-sm-4 mb-4 text-center">
    <a href="{{ route('profile', $user->username) }}" class="view-profile-link">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h4 class="mb-0">
                {{ $user->statuses->count() }}
              </h4>
              <small class="text-muted">
                Posts
              </small>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-lg-3 col-sm-4 mb-4 text-center">
    <a href="{{ route('following.index', [$user->username, 'followers']) }}" class="view-profile-link">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h4 class="mb-0">
                {{ $user->followers()->count() }}
              </h4>
              <small class="text-muted">
                Followers
              </small>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-lg-3 col-sm-4 mb-4 text-center">
    <a href="{{ route('following.index', [$user->username, 'followings']) }}" class="view-profile-link">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h4 class="mb-0">
                {{ $user->follows()->count() }}
              </h4>
              <small class="text-muted">
                Followings
              </small>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
</div>