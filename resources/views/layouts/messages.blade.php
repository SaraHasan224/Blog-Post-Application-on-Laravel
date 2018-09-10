@if(!$errors->isEmpty())

    @foreach ($errors->all as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
    
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
@endif