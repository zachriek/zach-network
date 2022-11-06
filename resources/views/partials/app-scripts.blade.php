<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="{{ url('frontend/libraries/jquery/jquery-3.6.0.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ url('frontend/libraries/sweet-alert/sweetalert2.all.js') }}"></script>

<!-- Custom Script -->
<script>
	const flashData = $('.flash-data').data('flashdata');
	if ( flashData ) {
		Swal.fire({
		  icon: 'success',
		  confirmButtonColor: '#212529',
		  title: flashData
		});
	}
</script>