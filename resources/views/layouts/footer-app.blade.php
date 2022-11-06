<!-- Footer -->
<footer class="section-footer mt-5 border-top bg-white">
  <div class="container px-4 px-sm-0 py-5">
    <div class="row justify-content-center">
      <div class="col">
        <div class="row">
          <div class="col-12 col-sm-6 mb-5 mb-sm-0">
            <h5>Explore</h5>
            <ul class="list-unstyled">
              <li>
                <a href="{{ route('home') }}">
                  Home
                </a>
              </li>
              <li>
                <a href="{{ route('explore-users') }}">
                  Explore Users
                </a>
              </li>
              <li>
                <a href="{{ route('profile.edit') }}">
                  Update Profile
                </a>
              </li>
              <li>
                <a href="{{ route('password.edit') }}">
                  Change Password
                </a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-sm-6">
            <h5>Get Connected</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://github.com/zachriek" target="_blank">Github</a>
              </li>
              <li>
                <a href="https://www.instagram.com/zachriek/" target="_blank">Instagram</a>
              </li>
              <li>
                <a href="https://twitter.com/zachriek8" target="_blank">Twitter</a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCFbzQWPGA17_gKzotx207jQ" target="_blank">Youtube</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row border-top justify-content-center align-items-center px-4 px-sm-0 py-5">
      <div class="col-auto fw-light">
        {{ date('Y') }} Copyright zachriek • All rights reserved • Made in Bandar Lampung
      </div>
    </div>
  </div>
</footer>
<!-- Akhir Footer -->
