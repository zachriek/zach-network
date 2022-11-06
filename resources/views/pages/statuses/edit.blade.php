<x-app-layout title="Edit Status">

  <!-- Section Update Profile -->
  <section class="section-update-profile">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="card p-4">
            <div class="card-header bg-white">
              <h4>Edit Your Status</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('statuses.update', $status->identifier) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="body" class="form-label">Status</label>
                  <input type="text" class="form-control @error('body') is-invalid @enderror" id="body"
                    name="body" value="{{ old('body') ? old('body') : $status->body }}">
                  @error('body')
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
