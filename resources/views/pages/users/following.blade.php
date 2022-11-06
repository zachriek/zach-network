<x-app-layout title="Follow">

  <!-- Section Profile -->
  <section class="section-profile">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <div class="card p-4">
            <div class="row justify-content-center section-img-profile">
              <div class="col text-center">
                <img src="{{ $user->gravatar() }}" alt="Image" width="150" class="rounded-circle">
              </div>
            </div>

            <div class="row justify-content-center mt-3">
              <div class="col text-center">
                <h5 class="mb-1">
                  {{ $user->name }}
                </h5>
                <small class="text-muted">
                  Joined {{ $user->created_at->diffForHumans() }}
                </small>
              </div>
            </div>

            <hr>

            <x-statistic-app :user="$user" />

            <hr>

            <div class="row">
              @foreach ($follows as $follow)
                <div class="col-12 col-md-6 col-lg-4">
                  <x-following :user="$follow" />
                </div>
              @endforeach

              <div class="mt-5">
                {{ $follows->onEachSide(3)->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Section Profile -->

</x-app-layout>
