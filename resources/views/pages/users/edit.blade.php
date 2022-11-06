<x-app-layout title="Update Profile">

  <!-- Section Update Profile -->
  <section class="section-update-profile">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card p-4">
            <div class="card-header bg-white">
              <h4>Update Your Profile Information</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" placeholder="zachriek"
                    value="{{ old('username') ? old('username') : Auth::user()->username }}">
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" placeholder="Muhammad Zachrie Kurniawan"
                    value="{{ old('name') ? old('name') : Auth::user()->name }}">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="example@company.com"
                    value="{{ old('email') ? old('email') : Auth::user()->email }}">
                  @error('email')
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
