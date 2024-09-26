@extends('front_end.layout.main')

@section('content')
    
   
  <!-- home banner start -->
  <div class="home_banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="banner_box">
            <h1>Hocki Draft</h1>
            <span>Get In On The Action</span>
            <div class="trade_btns">
              <a href="{{route('leagues')}}">Play Now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="sliders">
    <div class="slide-track">
      <!-- Repeating images for continuous scrolling -->
      @foreach($leagues as $key => $value)
        <div class="slide"><a href="{{ route('leagueMatches',['leagueId'=>$value->id]) }}"><img src="{{$value->logo}}" alt="Image 1"></a></div>
      @endforeach

    </div>
  </div>














  <!-- home banner end -->
  <!-- about us -->
  <section class="section about_us">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 text-center">
          <p>Ready to draft your dream hockey team and hit the ice as a fantasy GM? At Hocki Draft, we bring the
            fast-paced, hard-hitting action of pro hockey straight to your screen. From passionate fans to seasoned
            fantasy veterans, our platform is built to deliver the ultimate fantasy hockey experience.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /about us -->
  <!-- banner-feature -->
  <section class="bg-gray overflow-md-hidden">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-xl-3 col-lg-4 align-self-end">
          <img class="img-fluid w-100" src="images/hockey.png" alt="banner-feature">
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="row feature-blocks bg-gray justify-content-between">
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">Real Time Stats & Live Scoring</h3>
              <p>Stay ahead of the game with live scoring updates and real-time NHL stats. You’ll always know how your
                team is performing, shift by shift.</p>
            </div>
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">Custom Leagues & Formats</h3>
              <p>Create the perfect league for you and your friends with customizable scoring systems, draft types, and
                roster sizes. Make the game your own!</p>
            </div>
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">In Depth Player Analysis</h3>
              <p>Gain an edge with detailed player stats, projections, and insights. Whether you’re scouting the waiver
                wire or making trades, we’ve got you covered.</p>
            </div>
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">Mobile Friendly</h3>
              <p>Manage your team anywhere, anytime. Our platform is fully optimized for mobile, so you can make lineup
                changes or track your players on the go.</p>
            </div>
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">Expert Advice & Updates</h3>
              <p>Get the latest news, injury reports, and expert picks to help you make smarter decisions and stay on
                top of the season.
              </p>
            </div>
            <div class="col-md-4 col-xl-4 mb-xl-5 mb-lg-3 mb-4 text-center text-md-left">
              <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
              <h3 class="mb-xl-4 mb-lg-3 mb-4">Friendly, Competitive Community</h3>
              <p>Join a community of passionate hockey fans and fantasy GMs who live and breathe the game. Friendly
                competition and rivalries are what we’re all about!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /banner-feature -->
  <section class="section-sm bg-primary">
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">

            <h5 class="text-white">Over 100,000 Users</h5>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">

            <h5 class="text-white">Live Updates</h5>
          </div>
        </div>


        <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
          <div class="text-center">
            <h5 class="text-white">10,000+ Public & Private League</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- compettion section start -->

  <section class="slider_wrapper">
    <div class="container">
      <div class="slider_row owl-carousel owl-theme">
        <div class="slider_items d-flex align-items-center">
          <div class="left_col">
            <div class="img_wrapper d-flex align-items-center justify-content-center">
              <a href="player-profile" class="bg_pink">
                <img src="images/trader1.png" alt="Trader One">
              </a>
              <span class="bg_pink d-inline-flex align-items-center justify-content-center">NBA</span>
            </div>
          </div>
          <div class="right_col flex-grow-1">
            <h5>
              <a href="player-profile">Don Doyle</a>
            </h5>
            <p>Los Angeles Lakers</p>
            <div class="price_line d-flex align-items-center">
              <div class="price">
                <p><i class="fas fa-dollar-sign"></i> 3.91</p>
              </div>
              <div class="rate">
                <p>+8.12 <i class="fas fa-caret-up"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider_items d-flex align-items-center">
          <div class="left_col">
            <div class="img_wrapper d-flex align-items-center justify-content-center">
              <a href="player-profile" class="bg_pink">
                <img src="images/trader_2.png" alt="Trader One">
              </a>
              <span class="bg_pink d-inline-flex align-items-center justify-content-center">NBA</span>
            </div>
          </div>
          <div class="right_col flex-grow-1">
            <h5>
              <a href="player-profile">Don Doyle</a>
            </h5>
            <p>Los Angeles Lakers</p>
            <div class="price_line d-flex align-items-center">
              <div class="price">
                <p><i class="fas fa-dollar-sign"></i> 3.91</p>
              </div>
              <div class="rate">
                <p>+8.12 <i class="fas fa-caret-up"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider_items d-flex align-items-center">
          <div class="left_col">
            <div class="img_wrapper d-flex align-items-center justify-content-center">
              <a href="player-profile" class="bg_pink">
                <img src="images/trader3.png" alt="Trader One">
              </a>
              <span class="bg_pink d-inline-flex align-items-center justify-content-center">NBA</span>
            </div>
          </div>
          <div class="right_col flex-grow-1">
            <h5>
              <a href="player-profile">Don Doyle</a>
            </h5>
            <p>Los Angeles Lakers</p>
            <div class="price_line d-flex align-items-center">
              <div class="price">
                <p><i class="fas fa-dollar-sign"></i> 3.91</p>
              </div>
              <div class="rate">
                <p>+8.12 <i class="fas fa-caret-up"></i></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider_items d-flex align-items-center">
          <div class="left_col">
            <div class="img_wrapper d-flex align-items-center justify-content-center">
              <a href="player-profile" class="bg_pink">
                <img src="images/trader1.png" alt="Trader One">
              </a>
              <span class="bg_pink d-inline-flex align-items-center justify-content-center">NBA</span>
            </div>
          </div>
          <div class="right_col flex-grow-1">
            <h5>
              <a href="player-profile">Don Doyle</a>
            </h5>
            <p>Los Angeles Lakers</p>
            <div class="price_line d-flex align-items-center">
              <div class="price">
                <p><i class="fas fa-dollar-sign"></i> 3.91</p>
              </div>
              <div class="rate">
                <p>+8.12 <i class="fas fa-caret-up"></i></p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>







  <div class="competition">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2>Our Competitions</h2>
        </div>
      </div>
      <div class="row">
        <div class="combine">
          <div class="col-6">
            <div class="comp">
              <h3>Head-to-Head Leagues</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="comp">
              <p>Compete against another team each week, with the team earning the most points winning the matchup.
                Track
                your season record and fight for a playoff spot to win the championship.</p>
            </div>
          </div>
        </div>
        <div class="combine">
          <div class="col-6">
            <div class="comp">
              <h3>Rotisserie Leagues</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="comp">
              <p>Accumulate stats in various categories (goals, assists, saves, etc.) over the entire season. Teams are
                ranked in each category, and the team with the most overall points at the end wins.</p>
            </div>
          </div>
        </div>
        <div class="combine">
          <div class="col-6">
            <div class="comp">
              <h3>Points-Based Leagues</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="comp">
              <p>Points are assigned for specific actions (goals, assists, saves, etc.), and teams compete to rack up
                the most points throughout the season. The team with the highest points total wins.</p>
            </div>
          </div>
        </div>
        <div class="combine">
          <div class="col-6">
            <div class="comp">
              <h3>Dynasty Leagues</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="comp">
              <p>Take full control of your fantasy team, managing it like a real NHL GM. Draft players, build your
                roster, and keep your entire team from season to season for the ultimate long-term challenge.</p>
            </div>
          </div>
        </div>
        <div class="combine">
          <div class="col-6">
            <div class="comp">
              <h3>Champions Cup Tournaments</h3>
            </div>
          </div>
          <div class="col-6">
            <div class="comp">
              <p>Compete in special tournament-style leagues where teams battle in bracket-style playoffs to determine
                who takes home the cup at the end of the season.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- compettion section end -->



  <!--====slider section start====-->














@include('front_end.layout.newsletter')
 
  <!-- accordian section start -->

  <section class="section blog_post_sec">
    <div class="container">
      <div class="row">
        <!-- blog post -->
        <article class="col-lg-4 col-sm-6 mb-5">
          <div
            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/McDavid.jfif" alt="Post thumb">
            <div class="card-body">
              <!-- post meta -->
              <a>
                <h4 class="card-title">McDavid on a Tear</h4>
                <span> <b>If You Don’t Have Him, You’re Done</b></span>
              </a>
              <p class="card-text">If you don’t have Connor McDavid on your fantasy squad, you might as
                well pack it in
                and start prepping for next season. This guy is absolutely unreal right now. He’s
                putting up points like
                it's his day job—because, well, it is—but even by his standards, he’s torching the
                league. Two goals and
                three assists last night? Not even fair. If you're somehow lucky enough to have drafted
                him,
                congratulations, you basically won your league already. Everyone else, enjoy second
                place.
              </p>
            </div>
          </div>
        </article>
        <!-- blog post -->
        <article class="col-lg-4 col-sm-6 mb-5">
          <div
            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/Goalie.jfif" alt="Post thumb">
            <div class="card-body">
              <!-- post meta -->
              <a>
                <h4 class="card-title">Goalie Drama in Fantasy</h4>
                <span><b>Is Jack Campbell Even Worth a Roster Spot?</b></span>
              </a>
              <p class="card-text">Jack Campbell. What the hell, man? You were supposed to be THE GUY for
                the Oilers,
                but instead, you’ve been more of a wet noodle between the pipes. Campbell’s been giving
                up goals like
                Oprah hands out cars. “You get a goal, you get a goal, everybody gets a goal!” At this
                point, you’re
                better off streaming your grandma than starting this guy. If you’re still holding out
                hope, I respect
                your loyalty, but you might need to face the music and start scouring the waiver wire
                for a goalie who
                won’t tank your team’s GAA.</p>

            </div>
          </div>
        </article>
        <!-- blog post -->
        <article class="col-lg-4 col-sm-6 mb-5">
          <div
            class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/Sleeper-Alert.jpg" alt="Post thumb">
            <div class="card-body">
              <!-- post meta -->
              <a>
                <h4 class="card-title">Sleeper Alert</h4>
                <span><b>Alex Newhook is About to Go OFF</b></span>
              </a>
              <p class="card-text">If you're not paying attention to Alex Newhook, you're missing out. The
                dude's flying
                under the radar, but that won’t last much longer. Newhook is getting minutes, and the
                way he’s buzzing
                around the ice, it’s only a matter of time before he starts piling up the points. Sure,
                he's not a
                household name—yet—but that’s the beauty of it. Snag him now off waivers before everyone
                else catches
                on. You’re welcome in advance when he wins you that crucial playoff matchup.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>









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
              Scoring varies by league settings, but typically points are awarded for goals, assists, power-play
              points,
              saves, shutouts, and other player stats. You can customize scoring for your own league or use our
              default
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
              Our platform supports various draft formats, including snake drafts and auction drafts. In a snake
              draft,
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

@section('custom-script')
<script>

$(document).ready(function(){
    // @if(Session::has('error'))
    //   var flashMessage = "<?= Session::get('error') ?>";
    //   $("#error-message").html(flashMessage)
    //   $("#errorModal").modal('show');
    // @endif
})

</script>
@endsection

