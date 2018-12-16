@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6">
            <div class="da-card">
                <div class="da-card-header da-background-dark">
                    <h4 class="da-text-light">{{ __('Register') }}</h4>
                </div>
                <form method="POST" action="{{ route('register') }}" class="padding-all-15">
                    <div class="da-card-body">
                        @csrf

                        <div class="form-group has-float-label">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="&nbsp;" required autofocus>
                            <label for="name" class="col-form-label ">
                                <span class="placeholder">{{ __('Name') }}</span>
                                @if ($errors->has('name'))
                                <span class="error" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group has-float-label">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="&nbsp;" required>
                            <label for="email" class="col-form-label">
                                <span class="placeholder">{{ __('E-Mail Address') }}</span>
                                @if ($errors->has('email'))
                                <span class="error" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group has-float-label">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="&nbsp;" required>
                            <label for="password" class="col-form-label ">
                                <span class="placeholder">{{ __('Password') }}</span>
                                @if ($errors->has('password'))
                                <span class="error" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </label>
                        </div>

                        <div class="form-group has-float-label">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="&nbsp;" required>
                            <label for="password-confirm" class="col-form-label">
                                <span class="placeholder">{{ __('Confirm Password') }}</span>
                                <span class="error">Incorrect!</span>
                            </label>
                        </div>
                    </div>
                    <div class="da-card-footer">
                        <div class="form-group margin-bottom-0">
                            <div class="text-right">
                                <button type="submit" class="cta cta-accent" data-ripple>
                                    {{ __('Register') }}
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
