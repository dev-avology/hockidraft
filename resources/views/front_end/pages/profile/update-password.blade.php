@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay profile_sec" data-background="images/backgrounds/page-title.jpg">
      
</section>

<section class="my-profile_sec">
  <div class="container">
      <div class="profile">
          <div class="row">
            @include('front_end.pages.profile.profile-sidebar')
              <div class="col-md-8">
                
                  <div class="user-content-update">
                    @if(Session::has('success'))
                     <span class="alert alert-success col-md-12 text-center">{{ Session::get('success') }}</span>
                    @endif
                      <div class="">
                          <div class="tab-content tab-content-1 active">
                              <div class="user-content-box">
                                  <form action="{{ route('profile.update.password') }}" method="POST" class="mt-60 row">
                                    @csrf
                                      <div class="mb-3 col-sm-6">
                                          <input type="password" placeholder="Current Password" class="form-control para" autocomplete="off" name="current_password">
                                          @error("current_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>
                                      <div class="mb-3 col-sm-6">
                                          <input type="password" placeholder="New Password" class="form-control para" name="new_password" autocomplete="off">
                                          @error("new_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                      </div>

                                      <div class="mb-3 col-sm-6">
                                          <input type="password" placeholder="Confirm Password" class="form-control para" name="email" name="new_password_confirmation" autocomplete="off">
                                      </div>
                                      

                                      {{-- <div class="mb-3 col-sm-6">
                                          <div class="show_password">
                                              <input type="password" placeholder="Password" class="form-control para" id="password-field" required="required" autocomplete="off">
                                          </div>
                                      </div>
                                      <div class="mb-3 col-sm-6">
                                          <input type="password" placeholder="Confirm Password" class="form-control para" id="con_password" required="required">
                                      </div> --}}
                                      <button type="submit" class="btn btn-primary">Update</button>

                                      {{-- <div class="reset-password">
                                          <a href="#"> Reset Password </a>
                                      </div> --}}

                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
