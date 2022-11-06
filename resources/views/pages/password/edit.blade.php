<x-app-layout title="Change Password">

  <!-- Section Update Profile -->
  <section class="section-update-profile">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card p-4">
            <div class="card-header bg-white">
              <h4>Change Your Password</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('password.edit') }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="current_password" class="form-label">Current Password</label>
                  <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                    id="current_password" name="current_password">
                  @error('current_password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">New Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation" name="password_confirmation">
                  @error('password_confirmation')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-dark">
                  Update
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Update Profile -->

</x-app-layout>
