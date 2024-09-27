@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
   <div class="container">
       <div class="row">
           <div class="col-md-8">
               <ul class="list-inline custom-breadcrumb mb-2">
                   <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('home')}}">Home</a></li>
                   <li class="list-inline-item text-white h3 font-secondary nasted">My Matches</li>
               </ul>
           </div>
       </div>
   </div>
</section>


<section class="premier_bg matches my-matches">
   <div class="container">
       <div class="leagure_container">
           <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">
               <h1 class="font-medium">{{date('Y')}} Season</h1>
               <h4>My Matches</h4>
               <div class="flex flex-col mt-6">
                   <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                       <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                           <div class="matches-table">
                               <div class="div-tbl">
                                   <table class="table table-light table-striped table-hover table-sm" id="myTable">
                                       <thead class="thead-light text-uppercase">
                                           <tr>
                                               <th scope="col">Team</th>
                                               <th scope="col">Match Info</th>
                                               <th scope="col">Team</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                          {{-- @foreach($matches as $key => $value)
                                             <tr class="matche-main" data-fixture-id="{{ $value->id}}">
                                                <td class="match-team-logo">
                                                   <img src="{{$value->home_team_logo}}" alt="team-logo-3">
                                                   <h6>{{$value->home_team_name}}</h6>
                                                   <a href="premier-league-players"></a>
                                                </td>
                                                <td>
                                                  
                                                   <span>{{ date('Y-m-d h:i a',strtotime($value->fixture_date))}}</span>

                                                </td>

                                                <td class="match-team-logo">
                                                   <img src="{{$value->away_team_logo}}"
                                                         alt="team-logo-2">
                                                   <h6>{{$value->away_team_name}}</h6>
                                                </td>
                                             </tr>
                                          @endforeach --}}


                                          @foreach ($matches as $key => $matche)
                                          @php
                                           $startSoonMatch = getMatchStatus($matche->fixture_date);
                                          @endphp
                                          <tr class="matche-main" data-fixture-id="{{ $matche->id}}"  data-home-team="{{ $matche->home_team_id }}" data-away-team="{{ $matche->away_team_id }}">
                                              <td class="match-team-logo">
                                                  {{-- <img src="" alt="team-logo-3" class="lazy-load"> --}}
                                                  {{-- <img class="lazy-load" data-src="{{ $matche->home_team_logo }}" alt="team-logo"> --}}
                                                  <img src="{{$matche->home_team_logo}}" alt="team-logo-3">
      
                                                  {{-- <span>SHL</span> --}}
                                                  <h6>{{ $matche->home_team_name }}</h6>
                                                
                                                  @if($matche->short_status == 'LIVE' || $matche->short_status == '1H' || $matche->short_status == 'HT' || $matche->short_status == '2H' || $matche->short_status == 'ET' || $matche->short_status == 'BT' || $matche->short_status == 'P' || $matche->short_status == 'SUSP' || $matche->short_status == 'INT' || $matche->short_status == 'INT')
      
                                                   <div id="Head-Banner">
                                                      <span id="Head-Banner-Text">LIVE ({{ $matche->long_status }})</span>
                                                   </div>
      
                                                  @elseif((isset($startSoonMatch) && !empty($startSoonMatch) && $startSoonMatch <= 40) || ( $startSoonMatch == '0'))
      
                                                   <div id="Head-Banner">
                                                      <span id="Head-Banner-Text">Start In {{ $startSoonMatch.' mints' }}</span>
                                                   </div>
      
                                                   @endif
                                              </td>
                                              <td>
                                                  <h6>{{$matche->venue_name}}</h6>
                                                  <p>{{$matche->venue_city}}</p>
                                                  <span>{{ date('Y-m-d h:i a',strtotime($matche->fixture_date))}}</span>
      
                                              </td>
      
                                              <td class="match-team-logo">
                                                  {{-- <span>CNGZ</span> --}}
                                                  {{-- <img src="{{ $matche['teams']['away']['logo'] }}" alt="team-logo-2"> --}}
                                                  {{-- <img class="lazy-load" data-src="{{ $matche->away_team_logo }}" alt="team-logo"> --}}
                                                  <img src="{{$matche->home_team_logo}}" alt="team-logo-3">
                                                  <h6>{{ $matche->away_team_name }}</h6>
                                              </td>
      
      
                                          </tr>
                                          @endforeach

                                       </tbody>
                                   </table>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
           <!-- Component End  -->
       </div>
   </div>

</section>


@endsection

{{-- @section('custom-script')
<script>
  let table = new DataTable('#myTable');
  $(".matche-main").on('click', function(event) {
      event.preventDefault();
      var matcheId = $(this).data('fixture-id');  
      var url = "{{ route('matche-detail', ':matcheId') }}"; 
      url = url.replace(':matcheId', matcheId);
      window.location.href = url;
  });
</script>
@endsection --}}

@section('custom-script')
<script>
 $(".matche-main").on('click', function() {
   //  var homeTeam = $(this).data('home-team'); // Assuming teams is an array
   //  var awayTeam = $(this).data('away-team'); // Assuming teams is an array
   //  var leagueId = $(this).data('league-id'); // Assuming teams is an array
    var matcheId = $(this).data('fixture-id'); // Assuming teams is an array

    var url = "{{ route('matche-detail', [':matcheId']) }}";
    url = url.replace(':matcheId', matcheId);
    window.location.href = url;
});

//  $(".matche-main-not-start").on('click',function(){
//     $("#error-message").html("Lineups are available between 20 and 40 minutes before the match start");
//     $("#errorModal2").modal('show');
//  })

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>

<script>

   document.addEventListener("DOMContentLoaded", function() {
      lazyLoading();
   });

   $(document).ready(function() {

      $(document).on('click', '.dt-paging-button', function() {
         lazyLoading();
      });

      $('.dt-input').on('keyup change', function () {
         lazyLoading();
      });

   });

  function lazyLoading(){
  
   let lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));

   if ("IntersectionObserver" in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
         entries.forEach(function(entry) {
               if (entry.isIntersecting) {
                  let lazyImage = entry.target;
                  lazyImage.src = lazyImage.dataset.src;
                  lazyImage.classList.remove("lazy-load");
                  lazyImageObserver.unobserve(lazyImage);
               }
         });
      });

      lazyImages.forEach(function(lazyImage) {
         lazyImageObserver.observe(lazyImage);
      });
   } else {
      // Fallback for older browsers
      lazyImages.forEach(function(lazyImage) {
         lazyImage.src = lazyImage.dataset.src;
      });
   }
  }

</script>

@endsection

