@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="login_page_wrapper">
    <div class="md-card" id="login_card">
        <div class="md-card-content large-padding" id="login_form">
            <div class="login_heading">
                <div class="user_avatar">
                    <h1 class="uk-text-center">Login</h1>
                </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="uk-form-row {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">E-Mail Address</label>

                        <input id="email" type="email" class="md-input" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="uk-form-row {{ $errors->has('password') ? ' as-error' : '' }}">
                    <label for="password" >Password</label>

                        <input id="password" type="password" class="md-input" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="uk-margin-medium-top">
                    <button type="submit" class="md-btn md-btn-primary md-btn-block md-btn-large">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection