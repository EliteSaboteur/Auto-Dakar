@extends('layouts.default')

@section('content')
<div class="hero">

</div>  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6">
            <div class="da-card">
                <div class="da-card-header da-background-dark">
                    <h4 class="da-text-light">{{ __('Login') }}</h4>
                </div>

                <form method="POST" action="{{ route('login') }}" class="padding-all-15">
                    <div class="da-card-body">
                        @csrf

                        <div class="form-group has-float-label">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="&nbsp;" required autofocus>
                            <label for="email" class=" col-form-label">
                                <span class="placeholder">{{ __('E-Mail Address') }}</span>
                                @if ($errors->has('email'))
                                <span class="error" role="alert"> <strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group has-float-label">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="&nbsp;">
                            <label for="password" class="col-form-label">
                                <span class="place">{{ __('Password') }}</span>
                                @if ($errors->has('password'))
                                <span class="error" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="da-card-footer">
                        <div class="form-group margin-bottom-0">
                            <div class="text-right">
                                <a class="cta cta-link" href="{{ route('password.request') }}" data-ripple>
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <button type="submit" class="cta cta-accent" data-ripple>
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
