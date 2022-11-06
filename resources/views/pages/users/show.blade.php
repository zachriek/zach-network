<x-app-layout title="Profile">

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

            @if (Auth::user()->username == $user->username)
              <div class="row justify-content-center my-5">
                <div class="col-12 col-md-10 col-lg-8">
                  <x-new-status />
                </div>
              </div>
            @endif

            <div class="row justify-content-center">
              @foreach ($statuses as $status)
                <div class="col-12 col-md-10 col-lg-8">
                  <x-my-statuses :status="$status" />
                </div>
              @endforeach

              <div class="mt-5">
                {{ $statuses->onEachSide(3)->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Section Profile -->

  @if (Auth::user()->username == $user->username)
    <!-- Modal -->
    <x-status-modal-app />
    <!-- End of Modal -->
  @endif

</x-app-layout>
