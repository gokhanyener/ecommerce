@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-fill-warning" role="alert">
        <i class="mdi mdi-alert-circle"></i>
        {{ $error }}
    </div>
    @endforeach
@endif
