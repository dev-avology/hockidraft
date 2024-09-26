@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay profile_sec" data-background="images/backgrounds/page-title.jpg">
</section>

<section class="form_bg">
    <div class="container">
        <div class="form_container">
            <div class="form_header">
                <a href="{{ route('home') }}" class="registration_logo">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <form action="{{ route('login.post') }}" method="POST" class="mt-60">
                @csrf
                <h1 class="form_title">Log in</h1>
                @if(Session::has('error'))
                    <span class="alert alert-danger w-100 text-center">{{ Session::get('error') }}</span>
                @endif
                <div class="mb-3">
                    <input type="email" placeholder="Email" name="email" class="form-control para" id="email"
                    >
                    @error('email')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="show_password">
                        <input type="password" placeholder="Password" name="password" class="form-control para" id="password-field"
                        >
                        <i class="fas fa-eye toggle-password"></i>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span> <br>
                    @enderror
                     {{-- <a href="#" class="para" id="forgot">Forgot Password?</a> --}}
                </div>
				
				<div class="g-recaptcha" data-sitekey={{env('RECAPTCHA_SITE_KEY')}}></div>

                @error('g-recaptcha-response')
                  <span class="text-danger">{{ $message }}</span>
                @enderror
				
                <button type="submit" class="btn btn-primary">Login</button>
                {{-- <div class="form_footer">
                    <span>OR</span>
                    <div class="social_container d-flex align-items-center">
                        <div class="facebook">
                            <a href="#" class="para d-flex align-items-center justify-content-evenly"><img
                                    src="images/facebook.png" alt="Sign Up With Facebook">FACEBOOK</a>
                        </div>
                        <div class="google">
                            <a href="#" class="para d-flex align-items-center justify-content-evenly"><img
                                    src="images/google.png" alt="Sign Up With Google">GOOGLE</a>
                        </div>
                    </div>
                    <p class="para">I don't have an account. <a href="signup">Sign Up</a></p>
                </div> --}}
            </form>
        </div>
    </div>
</section>

@endsection
