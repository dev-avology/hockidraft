@extends('front_end.layout.main')
@section('content')

  <!-- page title -->
  <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb mb-2">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('home')}}">Home</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <!-- about -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img class="img-fluid w-100 mb-4" src="images/aboutus.jpg" alt="about image">
          <h2 class="section-title">ABOUT OUR JOURNY</h2>
          <p>HockiDraft is the creation of four dedicated friends who share a deep love for fantasy hockey. Our journey
            began in the trenches of our own fantasy leagues, where we spent countless hours perfecting strategies,
            debating trades, and celebrating victories. Through this shared passion, we realized how much more dynamic
            and engaging fantasy hockey can be when you’re playing with friends who push you to be your best.</p>
          <p>Determined to bring that experience to a wider audience, we set out to build a platform that caters to
            every level of hockey enthusiast. At HockiDraft, our goal is to create a high-quality fantasy hockey
            experience that is both accessible and thrilling for all users. Here’s what sets us apart:</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->
  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">Comprehensive Features for Every Player</h4>
              </a>
              <p class="card-text mb-4">Whether you’re a fantasy veteran or just starting out, HockiDraft offers a range
                of features designed to enhance your experience. From customizable league settings to real-time scoring
                and in-depth player analysis, we provide the tools you need to succeed, no matter your experience level.
              </p>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">User-Friendly Design</h4>
              </a>
              <p class="card-text mb-4">We’ve prioritized ease of use without sacrificing depth. Our intuitive interface
                ensures that you can quickly navigate through drafts, manage your team, and track your progress. We want
                you to focus on enjoying the game, not wrestling with complex systems.</p>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">Commitment to Quality</h4>
              </a>
              <p class="card-text mb-4">We are dedicated to delivering a robust and reliable platform. Our team
                constantly
                works on improving performance, adding new features, and fixing issues to ensure that HockiDraft remains
                at the forefront of fantasy hockey technology.</p>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">Engaging for All Skill Levels</h4>
              </a>
              <p class="card-text mb-4">Our platform is designed to be enjoyable for both casual players and serious
                fantasy hockey enthusiasts. We offer various league formats and scoring systems to suit different
                preferences and strategies, making it easy for everyone to find their perfect fit.</p>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">Active Community and Support</h4>
              </a>
              <p class="card-text mb-4">
                We value our users and are committed to providing excellent support. Whether you have a question, need
                help with a technical issue, or want to give feedback, our team is here to assist you. We also foster a
                vibrant community where players can connect, share tips, and compete in a friendly environment.</p>
            </div>
          </div>
        </div>
        <!-- course item -->
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="card p-0 border-primary rounded-0 hover-shadow">
            <div class="card-body info_mation">
              <a href="course-single">
                <h4 class="card-title">Continuous Improvement</h4>
              </a>
              <p class="card-text mb-4">At HockiDraft, we’re always listening to our users and evolving based on their
                needs. We regularly update our platform with new features, enhancements, and improvements to keep the
                experience fresh and exciting.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /course list -->
  <div class="above">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Thank you for being part of the HockiDraft community. We’re thrilled to have you with us and look forward
            to helping you create memorable fantasy hockey experiences.</p>
        </div>
      </div>
    </div>
  </div>


  <section class="disclaimer_content">
    <div class="container">
      <div class="disclaimer_text">
        <h5>Disclaimer </h5>
        <p>By taking part in this fantasy sports league, you acknowledge and accept the following rules:
        </p>
        <p>Legal Compliance: All relevant laws and regulations must be followed in order to participate in this fantasy
          sports league. It is up to you to make sure that participating is permitted in your area. You are not
          permitted to play in this league if fantasy sports competitions are prohibited in your community.
        </p>
        <p>This fantasy sports league is just for fun purposes; no real money betting is allowed. There is no real-money
          betting involved, thus there is no expectation of profit or loss in terms of money. The league's authorities
          oppose all real-money games, including gambling.
        </p>
        <p>Fair Play: It is anticipated that participants would compete fairly. Game manipulation and cheating is highly
          forbidden to utilise automation (such as bots) or manipulate the game's rules. Breaking these regulations
          could get you kicked out of the league.
        </p>
        <p>Not Associated with or Sponsored by Professional Leagues: No professional sports leagues, teams, or athletes
          are associated with, supporting, or endorsing this fantasy sports competition. Every name, trademark, and logo
          used in this fantasy league is just for identifying reasons and belongs to their respective owners.
        </p>
        <p>Limitation on Liability: By entering this fantasy sports league, players assume all liability for any
          mistakes, malfunctions, or losses. By taking part, you consent to absolving the league organisers of any and
          all liability arising from your participation in the league, including but not restricted to disagreements,
          losses, or damages.
        </p>
        <p>Personal Accountability: By joining this league, you assume all risk. When participating in fantasy sports,
          it is your duty to make sure that you are operating sensibly and within your means. Moderation and responsible
          play are encouraged.
        </p>
        <p>Modifications to the Rules: The league administration have the ability, at any moment, to change the league's
          rules or organisational structure. Participants will be informed of any modifications, and their continued
          participation will be taken as their agreement to the revised regulations.</p>
      </div>
    </div>
  </section>

@endsection
