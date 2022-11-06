<!-- Navbar -->
<nav class="navbar navbar-timeline navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand px-2 px-sm-0 fw-600" href="{{ route('home') }}">Network</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-card-heading fs-3"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mx-3">
        <li class="nav-item dropdown px-2 px-sm-0 mt-3 d-block d-lg-none">
          <a class="nav-link dropdown-toggle" href="#" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ Auth::user()->gravatar() }}" class="rounded-circle" alt="Image" width="30">
            <span class="fs-6 fw-600 px-1">
              {{ Auth::user()->username }}
            </span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item {{ Route::current()->getName() == 'profile' ? 'active' : '' }}"
                href="{{ route('profile', Auth::user()->username) }}">
                View Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item {{ Route::current()->getName() == 'profile.edit' ? 'active' : '' }}"
                href="{{ route('profile.edit') }}">
                Update Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item {{ Route::current()->getName() == 'password.edit' ? 'active' : '' }}"
                href="{{ route('password.edit') }}">
                Change Password
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        <li class="nav-item px-2 px-sm-0">
          <a class="nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}"
            href="{{ route('home') }}">
            <i class="bi bi-house-door fs-5"></i>
            <span class="px-1">Home</span>
          </a>
        </li>
        <li class="nav-item px-2 px-sm-0 px-lg-4">
          <a class="nav-link {{ Route::current()->getName() == 'explore-users' ? 'active' : '' }}"
            href="{{ route('explore-users') }}">
            <i class="bi bi-search fs-5"></i>
            <span class="px-1">Explore Users</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="dropdown d-none d-lg-block">
      <a class="navbar-brand dropdown-toggle" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ Auth::user()->gravatar() }}" class="rounded-circle" alt="Image" width="30">
        <span class="fs-6 fw-600 px-1">
          {{ Auth::user()->username }}
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li>
          <a class="dropdown-item {{ Route::current()->getName() == 'profile' ? 'active' : '' }}"
            href="{{ route('profile', Auth::user()->username) }}">
            View Profile
          </a>
        </li>
        <li>
          <a class="dropdown-item {{ Route::current()->getName() == 'profile.edit' ? 'active' : '' }}"
            href="{{ route('profile.edit') }}">
            Update Profile
          </a>
        </li>
        <li>
          <a class="dropdown-item {{ Route::current()->getName() == 'password.edit' ? 'active' : '' }}"
            href="{{ route('password.edit') }}">
            Change Password
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="dropdown-item" type="submit">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End of Navbar -->
