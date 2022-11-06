<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Add New Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('statuses.store') }}" method="post">
        @csrf
        <div class="modal-body">
          <div class="mb-3">
            <textarea name="body" class="form-control" rows="5" placeholder="What is on your mind?"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-sm btn-dark">
            Send
          </button>
        </div>
      </form>
    </div>
  </div>
</div>