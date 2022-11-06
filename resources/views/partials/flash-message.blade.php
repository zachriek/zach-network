<!-- Success or Error Message -->
@if (session('success'))
  <div class="flash-data" data-flashdata="{{ session('success') }}"></div>
@endif