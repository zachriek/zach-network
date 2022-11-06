<x-app-layout title="Home">
  <section class="section-posts">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Left Card for New Status and Posts -->
        <div class="col-lg-6 col-md-8">

          <!-- New Status -->
          <div class="row">
            <div class="col">
              <x-new-status />
            </div>
          </div>
          <!-- End of New Status -->

          <!-- Form Search Posts -->
          <div class="row mt-5">
            <div class="col">
              <form action="{{ route('home.posts-search') }}" method="get">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="search" placeholder="Search post...">
                  <button class="btn btn-dark" type="submit" value="SEARCH">Search</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End of Search Posts -->

          <!-- Posts -->
          <div class="row mt-2">
            <div class="col">

              @foreach ($statuses as $status)
                <x-my-statuses :status="$status" />
              @endforeach

              <div class="mt-5">
                {{ $statuses->onEachSide(3)->links() }}
              </div>

            </div>
          </div>
          <!-- End of Posts -->

        </div>
        <!-- End of Left Card -->


        <!-- Right Card for Recent Follows -->
        <div class="col-lg-5 col-md-4 d-none d-md-block">

          <!-- Recent Follows -->
          @if (Auth::user()->follows()->count())
            <div class="row">
              <div class="col">
                <div class="card p-2">
                  <div class="card-body">
                    <h6>Recently Follows</h6>

                    @foreach ($users as $user)
                      <x-following :user="$user" />
                    @endforeach

                  </div>
                </div>
              </div>
            </div>
          @endif
          <!-- End of Recent Follows -->

        </div>
        <!-- End of Right Card -->
      </div>
    </div>
  </section>

  <x-status-modal-app />
</x-app-layout>
