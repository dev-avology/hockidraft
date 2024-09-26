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
            <form action="{{ route('signup.post') }}" method="POST" class="mt-60">
                @csrf
                <h1 class="form_title">Let's Create Your Account
                </h1>
                @if(Session::has('success'))
                  <span class="alert alert-success text-center w-100">{{ Session::get('success') }}</span>
                @endif
                <div class="mb-3">
                    <input type="text" placeholder="First Name" name="name" class="form-control para" id="first_name"
                         value="{{ old('name') }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Last Name" name="lname" class="form-control para" id="Last_Name"
                         value="{{ old('lname') }}">
                    @error('lname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control para" id="email"
                         name="email" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror    
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Phone Number" class="form-control para" id="phone_number"
                         name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror    
                </div>
                <div class="mb-3">
                    <div class="show_password">
                        <input type="password" placeholder="Password" class="form-control para" id="password-field"
                             name="password">
                        <i class="fas fa-eye toggle-password"></i>
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror 
                </div>
                <div class="mb-3">
                    <div class="show_password">
                        <input type="password" placeholder="Confirm Password" class="form-control para" id="confirm-password"
                             name="password_confirmation">
                    </div>
                </div>

                <div class="g-recaptcha" data-sitekey={{env('RECAPTCHA_SITE_KEY')}}></div>

                @error('g-recaptcha-response')
                  <span class="text-danger">{{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-primary">Register Now!</button>
                {{-- <div class="form_footer">
                    <span>OR</span>
                    <div class="social_container d-flex align-items-center">
                        <div class="facebook">
                            <a href="#" class="para d-flex align-items-center justify-content-evenly"><img
                                    src="images/facebook.png" alt="Sign Up With Facebook"> FACEBOOK</a>
                        </div>
                        <div class="google">
                            <a href="#" class="para d-flex align-items-center justify-content-evenly"><img
                                    src="images/google.png" alt="Sign Up With Google"> GOOGLE</a>
                        </div>
                    </div>
                    <p class="para">I don't have an account. <a href="login">Login</a></p>
                </div> --}}
            </form>
        </div>
    </div>
</section>


@endsection
