 @extends('front_end.layout.main')
@section('content')


  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Register</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="#" class="row">
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
              </div>
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
              </div>
              <div class="col-12">
                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
              </div>
              <div class="col-12">
                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword"
                  placeholder="Password">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">SIGN UP</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Login</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
            </div>
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword"
                placeholder="Password">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- page title -->
  <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('home')}}">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Contact Us</li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <!-- contact -->
  <section class="section bg-gray contact_content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-title">Contact Us</h2>
          @if(Session::has('success'))
           <span class="alert alert-success text-center" style="width: 746px;">{{ Session::get('success') }}</span>
          @endif
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0 sticky_top">
          <form action="{{ route('contact.save') }}" method="POST" id="contactForm">
            @csrf
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
            <p class="text-danger d-none" id="nameError"></p>
            <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
            <p class="text-danger d-none" id="emailError"></p>
            <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
            <p class="text-danger d-none" id="subjectError"></p>
            <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"
              >{{ old('message') }}</textarea>
            <p class="text-danger d-none" id="messageError"></p>

            <div class="g-recaptcha" data-sitekey={{env('RECAPTCHA_SITE_KEY')}}></div>

            @error('g-recaptcha-response')
             <span class="text-danger">{{ $message }}</span>
            @enderror

            <button type="button" value="send" id="contact-btn" class="btn btn-primary">SEND MESSAGE</button>
          </form>
        </div>
        <div class="col-lg-5">
          <p class="mb-5">We’re here to assist you with any questions, concerns, or feedback you may have about
            HockiDraft. If you need help with your account, have a technical issue, or just want to share your thoughts,
            don’t hesitate to reach out!</p>
          <h3>Customer Support</h3>
          <p><b>Email:</b><br>For general inquiries or support, please email us at:
          </p>
          <a href="mailto:support@hockidraft.com" class="mb-5 text-color h5 d-block">support@hockidraft.com</a>
          <p>We aim to respond to all emails within 24-48 hours.</p>
          <p>Available Monday through Friday, 9 AM to 5 PM EST.</p>
          <h3>Technical Support</h3>
          <p><b>Email:</b><br>For technical issues or bug reports, please contact our tech team at:</p>
          <a href="mailto:techsupport@hockidraft.com" class="mb-5 text-color h5 d-block">techsupport@hockidraft.com</a>
          <p>We’re here to assist you with any technical problems you might encounter.</p>
          <h3>Feedback and Suggestions
          </h3>
          <p><b>Email:</b><br>We value your feedback! If you have suggestions on how we can improve HockiDraft, please
          </p>
          <a href="mailto:feedback@hockidraft.com0" class="mb-5 text-color h5 d-block">feedback@hockidraft.com</a>
          <p>Your input helps us enhance the fantasy hockey experience for everyone.</p>
          <h3>Social Media
          </h3>
          <div class="icon_sc"><a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
          </div>
          <p>Stay connected with us for updates, news, and more:</p>
          <p><b>Please Note:
            </b> For urgent issues or immediate assistance, contacting us via email or phone is the fastest way to get a
            response.</p>
          <p>Thank you for choosing HockiDraft. We look forward to assisting you!
          </p>
        </div>

      </div>
    </div>
  </section>
  <!-- /contact -->
  <!-- accordian section start -->
  <div class="hotel_accordian">
    <div class="container">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <h2 class="mb-4">FAQs</h2>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                aria-controls="collapseOne" class="collapsed">
                What is Fantasy Hockey?</a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne"
            style="">
            <div class="panel-body">
              Fantasy hockey lets you manage your own virtual NHL team by drafting real players, tracking their
              performance, and competing against other fantasy teams. Points are based on the real-life stats of the
              players you draft.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                aria-expanded="false" aria-controls="collapseTwo">
                Is it free to play?</a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              Yes, 100%! Our platform is free to join, draft, and play. You can create or join leagues, manage your
              team, and compete with friends without any cost.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                How do I sign up?</a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              Simply click the Sign Up button on our homepage, create an account with your email or social media, and
              you’re ready to start drafting your team!</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingfour">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"
                aria-expanded="false" aria-controls="collapsefour">
                Can I join more than one league?
              </a>
            </h4>
          </div>
          <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
            <div class="panel-body">
              Absolutely! You can join as many leagues as you want. It’s a great way to try different formats or play
              with different groups of friends.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingfive">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive"
                aria-expanded="false" aria-controls="collapsefive">
                How does scoring work?</a>
            </h4>
          </div>
          <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
            <div class="panel-body">
              Scoring varies by league settings, but typically points are awarded for goals, assists, power-play points,
              saves, shutouts, and other player stats. You can customize scoring for your own league or use our default
              settings.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingsix">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix"
                aria-expanded="false" aria-controls="collapsesix">
                How do drafts work?</a>
            </h4>
          </div>
          <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
            <div class="panel-body">
              Our platform supports various draft formats, including snake drafts and auction drafts. In a snake draft,
              teams take turns picking players, while in an auction draft, you bid on players with a budget.</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingseven">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven"
                aria-expanded="false" aria-controls="collapseseven">
                Can I make trades and add/drop players?</a>
            </h4>
          </div>
          <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
            <div class="panel-body">
              Yes, you can trade players with other teams or add and drop players from the free-agent pool throughout
              the season. Make smart moves to improve your roster!</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingeight">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight"
                aria-expanded="false" aria-controls="collapseeight">
                What happens if one of my players gets injured?</a>
            </h4>
          </div>
          <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
            <div class="panel-body">
              If a player on your roster gets injured, you can either keep them in hopes they return soon or drop them
              and pick up a free agent to fill their spot.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- accordian section end -->
  
@endsection

@section('custom-script')

<script>
    $(document).ready(function () {

        $('#contact-btn').on('click', function() {
            var valid = true;

            $('.text-danger').addClass('d-none').css('font-size','15px');

            if ($('#name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();
            
            if($('#email').val().trim() === ''){
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').text('Subject field is required.');
                valid = false;
            }

            if ($('#message').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }

            // if (!$('#agree').is(':checked')) {
            //     $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
            //     valid = false;
            // }

            if (valid) {
                $('#contactForm').submit();
            }
        });





    });
</script>


@endsection
