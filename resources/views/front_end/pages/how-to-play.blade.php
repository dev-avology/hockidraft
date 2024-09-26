@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary"
                            href="{{route('home')}}">Home</a></li>
                    <li class="list-inline-item text-white h3 font-secondary nasted">How to Play
                    </li>
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
                <h2 class="section-title">How to Play
                </h2>
                <p>Understanding the Basics Fantasy hockey involves creating and managing a virtual hockey team
                    using real NHL players. Your team earns points based on the actual performance of those players
                    in real NHL games.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- /about -->


<section class="existing">
    <div class="container">
        <div class="existing_inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Joining or Creating a League
                            </h5>
                            <p><strong>Join a League</strong>: You can join an existing league by accepting an
                                invitation or signing
                                up for a public league on the platform.
                            </p>
                            <p><strong>Create a League</strong>: Start your own league by setting the rules,
                                scoring system, and draft format. Invite friends or other players to join.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Drafting Your Team
                            </h5>
                            <p><strong>Draft Format</strong>: Choose between draft types: </p>
                            <p><strong>Snake Draft</strong>: Teams take turns selecting players in a serpentine
                                order (e.g., 1-10, 10-1).</p>
                            <p><strong>Auction Draft</strong>: Teams bid on players using a budget.</p>
                            <p><strong>Draft Strategy</strong>: Consider balancing your team with top forwards,
                                defensemen, and
                                goalies. Pay attention to player stats, injuries, and potential breakout candidates.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Managing Your Roster

                            </h5>
                            <p><strong>Lineup Changes</strong>: Set your starting lineup based on game schedules
                                and player
                                performance. Adjust as needed to maximize points.</p>
                            <p><strong>Trades</strong>: Propose trades with other teams to improve your roster.
                                Make sure trades are
                                fair and beneficial.
                            </p>
                            <p> <strong>Add/Drops</strong>: Add free agents or drop underperforming players from
                                the waiver wire to
                                keep your team competitive.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Scoring Points
                            </h5>
                            <p><strong>Scoring Categories</strong>: Points are awarded based on various categories,
                                such as:</p>
                            <p><strong>Forwards</strong>: Goals, assists, power-play points, plus/minus, shots on
                                goal, hits.
                            </p>
                            <p><strong>Defensemen</strong>: Goals, assists, power-play points, plus/minus, blocked
                                shots.</p>
                            <p><strong>Goalies</strong>: Wins, saves, shutouts, goals-against average (GAA), save
                                percentage.</p>
                            <p><strong>Custom Scoring</strong>: Your league may have customized scoring settings.
                                Familiarize
                                yourself with your league’s scoring system to strategize effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Weekly Matchups and Standings </h5>
                            <p><strong>Head-to-Head</strong>: Compete against another team each week. Win your
                                matchup to earn
                                victory points and improve your standings.</p>
                            <p><strong>Rotisserie</strong>: Accumulate stats over the season. Your team’s rank in
                                each category
                                contributes to your overall score.
                            </p>
                            <p><strong>Points-Based</strong>: Track total points accumulated from various stats. The
                                team with the
                                most points at the end of the season wins.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Playoffs and Championships </h5>
                            <p><strong>Playoffs</strong>: Typically occur at the end of the regular NHL season. The
                                top teams from
                                the regular season advance to the playoffs, where they compete in a knockout format
                                to win the championship.
                            </p>
                            <p><strong>Championship</strong>: The team that performs best in the playoff rounds or
                                has the highest
                                total points in a points-based league is crowned the champion.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Monitoring and Adjusting </h5>
                            <p><strong>Stay Informed</strong>: Keep up with NHL news, player injuries, and trades to
                                make informed
                                decisions.
                            </p>
                            <p><strong>Analyze Performance</strong>: Regularly review your team’s performance and
                                make
                                adjustments to
                                improve your chances of winning.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Engaging with Your League
                            </h5>
                            <p><strong>Communication</strong>: Participate in league chats or forums to discuss
                                trades,
                                strategies,
                                and game updates.
                            </p>
                            <p><strong>League Rules</strong>: Adhere to league rules and guidelines. Respect other
                                players and engage
                                in fair competition.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="continuous">
                        <div class="heading_continuous">
                            <h5>Have Fun!

                            </h5>
                            <p><strong>Enjoy the Game</strong>: Fantasy hockey is all about having fun and enjoying
                                the competition.
                                Embrace the highs and lows, and celebrate your successes with fellow league members.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- newsletter -->
@include('front_end.layout.newsletter')

<section class="section blog_post_sec">
    <div class="container">
        <div class="row">
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/Fantasy-Owners.jfif" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <a >
                            <h4 class="card-title">Fantasy Owners</h4>
                            <span><b>Freaking Out as Matthews Keeps Busting</b></span>
                        </a>
                        <p class="card-text">Auston Matthews is an absolute monster… when he shows up. But lately,
                            he’s been
                            quieter than a church mouse in a library. What’s the deal, Auston? One goal in the last
                            five games?
                            Fantasy owners are starting to panic. I’ve seen more action from a rookie fourth-liner
                            who hasn’t even
                            cracked 10 minutes a night. If you’re sitting on Matthews, hold the line. The dude’s too
                            good to stay
                            cold forever. But man, you gotta be sweating a little right now if your season’s riding
                            on him turning
                            it around soon.</p>

                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/Cale-Makar.jfif" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <a >
                            <h4 class="card-title">Cale Makar</h4>
                            <span><b>Cheat Code on Ice, Still the King of Fantasy D-Men</b>
                            </span>
                        </a>
                        <p class="card-text">Let’s take a moment to appreciate just how filthy Cale Makar is. This
                            guy’s putting
                            up points like a top forward while still playing defense at a Norris Trophy level. It’s
                            like having a
                            cheat code for your fantasy team. You’re getting goals, assists, and power-play points
                            from a D-man that
                            skates better than most wingers. If you’ve got Makar on your squad, congrats—you’re
                            living the dream. If
                            not, you’re just praying your defense isn’t a total dumpster fire. Simple as that.</p>

                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5">
                <div
                    class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="images/Waiver.jpg" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <a >
                            <h4 class="card-title">Waiver Wire Warriors</h4>
                            <span><b>Guys You NEED to Add Right Now</b></span>
                        </a>
                        <p class="card-text">Waiver wire gold doesn’t just fall into your lap, but I’m here to do
                            the digging for
                            you. First up, Dylan Cozens—this guy is heating up in Buffalo and looking like he’s
                            ready to make some
                            noise. Then we’ve got Lawson Crouse, who’s flying under the radar but quietly stuffing
                            the stat sheet in
                            Arizona. And if you’re desperate in net, give Jeremy Swayman a look. He’s splitting time
                            with Ullmark,
                            but Swayman’s been standing on his head lately. These are the kind of guys that win
                            championships while
                            your league-mates are sleeping. Act fast.</p>

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
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                            What is Fantasy Hockey?</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse in collapse" role="tabpanel"
                    aria-labelledby="headingOne" style="">
                    <div class="panel-body">
                        Fantasy hockey lets you manage your own virtual NHL team by drafting real players, tracking
                        their
                        performance, and competing against other fantasy teams. Points are based on the real-life
                        stats of the
                        players you draft.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is it free to play?</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Yes, 100%! Our platform is free to join, draft, and play. You can create or join leagues,
                        manage your
                        team, and compete with friends without any cost.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I sign up?</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingThree">
                    <div class="panel-body">
                        Simply click the Sign Up button on our homepage, create an account with your email or social
                        media, and
                        you’re ready to start drafting your team!</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingfour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Can I join more than one league?
                        </a>
                    </h4>
                </div>
                <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingfour">
                    <div class="panel-body">
                        Absolutely! You can join as many leagues as you want. It’s a great way to try different
                        formats or play
                        with different groups of friends.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingfive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            How does scoring work?</a>
                    </h4>
                </div>
                <div id="collapsefive" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingfive">
                    <div class="panel-body">
                        Scoring varies by league settings, but typically points are awarded for goals, assists,
                        power-play
                        points,
                        saves, shutouts, and other player stats. You can customize scoring for your own league or
                        use our
                        default
                        settings.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingsix">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            How do drafts work?</a>
                    </h4>
                </div>
                <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                    <div class="panel-body">
                        Our platform supports various draft formats, including snake drafts and auction drafts. In a
                        snake
                        draft,
                        teams take turns picking players, while in an auction draft, you bid on players with a
                        budget.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingseven">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            Can I make trades and add/drop players?</a>
                    </h4>
                </div>
                <div id="collapseseven" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingseven">
                    <div class="panel-body">
                        Yes, you can trade players with other teams or add and drop players from the free-agent pool
                        throughout
                        the season. Make smart moves to improve your roster!</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingeight">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            What happens if one of my players gets injured?</a>
                    </h4>
                </div>
                <div id="collapseeight" class="panel-collapse collapse" role="tabpanel"
                    aria-labelledby="headingeight">
                    <div class="panel-body">
                        If a player on your roster gets injured, you can either keep them in hopes they return soon
                        or drop them
                        and pick up a free agent to fill their spot.</div>
                </div>
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
