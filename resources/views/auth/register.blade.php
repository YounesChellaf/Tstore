@extends('master')

@section('content')
    <div class="htc__login__register bg__white ptb--130" style="background: rgba(0, 0, 0, 0) url({{asset('assets/img/bg/5.jpg')}}) no-repeat scroll center center / cover ;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="login__register__menu" role="tablist">
                        <li role="presentation" class="login "><a href="/login" >Login</a></li>
                        <li role="presentation" class="register active"><a href="/register" >Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="htc__login__register__wrap">
                        <div id="login" role="tabpanel" class="single__tabs__panel tab-pane fade in active ">
                             <form id="register-form" class="login" method="POST" action="{{ route('register') }}">
                                 @csrf
                                <input id="name" type="text"  name="name" value="{{ old('name') }}" placeholder="Name*" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email*" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password" type="password"  name="password" required placeholder="Password*">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password*" required>
                                 <div class="htc__login__btn mt--30">
                                     <a href="#" id="submit-register-link">
                                         {{ __('Register') }}
                                     </a>
                                     <script>
                                         document.getElementById("submit-register-link").onclick = function() {
                                             document.getElementById("register-form").submit();
                                         }
                                     </script>
                                 </div>
                             </form>
                            <div class="htc__social__connect">
                                <h2>Or Login With</h2>
                                <ul class="htc__soaial__list">
                                    <li><a class="bg--twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="bg--instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a class="bg--facebook" href="auth/facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="bg--googleplus" href="auth/google"><i class="zmdi zmdi-google-plus"></i></a></li>                                </ul>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection
