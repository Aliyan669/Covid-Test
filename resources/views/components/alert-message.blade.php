@if(session('message'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
       <strong>Success! </strong> {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>

        setTimeout(function () {
            document.querySelector('.alert').style.display = 'none';
        }, 3000); // Auto-hide after 3 seconds
    </script>

@endif