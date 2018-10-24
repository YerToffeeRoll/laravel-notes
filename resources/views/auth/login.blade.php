@extends('layouts.app1')
@section('content')
<section id="home" class="s-home target-section">
    <div class="home-image-part">Hello</div>
    <div class="home-content">
        <div class="row home-content__main wide">
            <div class="container">
                <div class="row">
                    <div class="col-six tab-full  card">
                        <form class="" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Your email</label>
                                 <input id="email" type="email" class=" full-width" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                        
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="full-width">Your password</label>
                                <div >
                                    <input id="password" type="password" class="full-width" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="">
                                <div class="full-width">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="full-width">
                                    <button type="submit" class="btn btn-primary">
                                    Login                
                                    </button>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div> <!-- end home-content__main -->
                </div> <!-- end home-content -->
                </section> <!-- end s-home -->
                @endsection