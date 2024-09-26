<div class="col-md-4">
    <div class="profile-side">
        <div class="profile-sec">
            <div class="user_img">
                <div class="update_img_user">
                    {{-- <img src="{{asset('images/user.jfif')}}" alt="user_img"> --}}
                    <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('images/dummy.jpg') }}" alt="dp">
              
                    {{-- <span class="edit_pan"><i class="fa-solid fa-pen"></i> </span> --}}


                    <form id="profile-pic-form" action="{{ route('profile.update-pic') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="profile-pic-input" name="profile_picture" style="display: none;" accept="image/*" onchange="document.getElementById('profile-pic-form').submit()">
                        <span class="edit_pan"><i class="fa-solid fa-pen" aria-hidden="true" onclick="document.getElementById('profile-pic-input').click()"></i></span>
                    </form>


                </div>
                <div class="user_name">
                    <h3>{{Auth::user()->name}} {{Auth::user()->lname}}</h3>
                </div>
            </div>
            <div class="edit_option_bar">
              <a href="{{route('profile.profile')}}">
                 <div class="content-bar">
                    <span class="tabedit">Edit Profile</span>
                 </div>
              </a>  
              <a href="{{ route('profile.change.password') }}">
                <div class="content-bar">
                    <span class="tabedit">Change password</span>
                </div>
              </a>   
            </div>
        </div>
    </div>
</div>