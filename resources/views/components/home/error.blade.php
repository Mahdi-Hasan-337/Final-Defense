@if ($errors->any())
    <div class="alert-container show">
        <div class="alert alert-danger auto-hide">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{{-- @if ($errors->has('status'))
    <div class="alert-container show">
        <div class="alert alert-danger auto-hide">
            <h5 class="text-danger">{{ session('status') }}</h5>
        </div>
    </div>
@endif

@error('error')
    <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror --}}

{{-- @if ($errors->has('email'))
    <div class="alert-container show">
        <div class="alert alert-danger auto-hide">
            <h5 class="text-danger">{{ $errors->first('email') }}</h5>
        </div>
    </div>
@endif

@if ($errors->has('password'))
    <div class="alert-container show">
        <div class="alert alert-danger auto-hide">
            <h5 class="text-danger">{{ $errors->first('password') }}</h5>
        </div>
    </div>
@endif --}}
