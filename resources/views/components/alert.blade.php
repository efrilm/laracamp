@if ($message = Session::get('erorr'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="submit" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
    </div>
@endif
