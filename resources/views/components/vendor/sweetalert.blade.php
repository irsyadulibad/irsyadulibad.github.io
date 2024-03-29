<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session()->has('swal_s'))
<script>
    Swal.fire({
        icon: 'success',
        text: '{{ session('swal_s') }}',
        timer: 1500,
    });
</script>
@endif

@if(session()->has('swal_e'))
<script>
    Swal.fire({
        icon: 'error',
        text: '{{ session('swal_e') }}',
        timer: 1500,
    });
</script>
@endif
