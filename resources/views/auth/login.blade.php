@extends('master')
@section('content')
    <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url({{asset('assets/img/bg/5.jpg')}}) no-repeat scroll center center / cover ;">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <ul class="login__register__menu" role="tablist">
                <li role="presentation" class="login active"><a href="/login">Login</a></li>
                <li role="presentation" class="register"><a href="/register">Register</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="htc__login__register__wrap">
                <!-- Start Single Content -->
                <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active">
                    <form id="login-form" class="login" method="POST" action="{{ route('login') }}">
                        @csrf
                                <input id="email" type="email" name="email"  required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password" type="password"  name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <div class="container">
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>{{ __('Remember Me') }}</span>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 100px;">
                                    <span class="forget">Forget Pasword?</span>
                                </a>
                            @endif
                        </div>
                        <div class="htc__login__btn mt--30">
                            <a href="#" id="submit-login-link">
                                {{ __('Login') }}
                            </a>
                            <script>
                                document.getElementById("submit-login-link").onclick = function() {
                                    document.getElementById("login-form").submit();
                                }
                            </script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="htc__social__connect">
            <h2>Or Login With</h2>
            <ul class="htc__soaial__list">
                <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>

                <li><a class="bg--instagram" href="auth/instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                <li><a class="bg--facebook" href="auth/facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                <li><a class="bg--googleplus" href="auth/google"><i class="zmdi zmdi-google-plus"></i></a></li>
            </ul>
        </div>
</div>
    </div>
@endsection
