<x-app-layout title="Explore Users">
  <!-- Section Users -->
  <section class="section-users">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <form action="{{ route('explore-users-search') }}" method="get">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="search" placeholder="Search user...">
              <button class="btn btn-dark" type="submit" value="SEARCH">Search</button>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        @foreach ($users as $user)
          <div class="col-12 col-md-6 col-lg-4">
            <x-following :user="$user" />
          </div>
        @endforeach

        <div class="mt-5">
          {{ $users->onEachSide(3)->links() }}
        </div>
      </div>
    </div>
  </section>
  <!-- End of Section Users -->
</x-app-layout>
