<div class="card mb-4 p-3">
  <div class="card-body">
    <div class="row">
      <div class="col d-flex justify-content-between">
        <a href="{{ route('profile', $status->user->username) }}" class="view-profile-link">
          <img src="{{ $status->user->gravatar() }}" class="rounded-circle" alt="{{ $status->user->name }}" width="40">
        </a>
        @if (Auth::user()->name == $status->user->name)
        <div class="dropdown">
          <a class="btn btn-sm btn-outline-dark align-self-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-pencil-square"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
            <li>
              <form action="{{ route('statuses.edit', $status->identifier) }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item">
                  Edit
                </button>
              </form>
            </li>
            <li>
              <form action="{{ route('statuses.delete', $status->identifier) }}" method="post">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure?');" type="submit" class="dropdown-item">
                  Delete
                </button>
              </form>
            </li>
          </ul>
        </div>
        @endif
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <a href="{{ route('profile', $status->user->username) }}" class="view-profile-link">
          <h6 class="mb-1">
            {{ $status->user->name }}
          </h6>
        </a>
        <small class="text-muted">
          Posted {{ $status->created_at->diffForHumans() }}
        </small>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col">
        <p class="fw-light">
          {{ $status->body }}
        </p>
      </div>
    </div>
  </div>
</div>