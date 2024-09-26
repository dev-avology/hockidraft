 @extends('front_end.layout.main')
 @section('content')

<!--====sign up section start====-->
      <section class="premier_bg matches">
         <div class="container">
            <div class="leagure_container">
               <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">
                <a href="{{ route('leagues') }}" class="back-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path></svg></a>
                  <!-- Component Start -->
                  <h1 class="font-medium">{{ $leaguesMatches[0]->name.' '.$leaguesMatches[0]->year }}</h1>
                  <h4>Matches</h4>
                  <div class="flex flex-col mt-6">
                     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                           <div class="matches-table">
                            <div class="div-tbl">
                                <table
                                   class="table table-light table-striped table-hover table-sm" id="myTable">
                                   <thead
                                      class="thead-light text-uppercase">
                                      <tr>
                                         <th scope="col">Team</th>
                                         <th scope="col">Match Info</th>
                                         <th scope="col">Team</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                   
                                    @foreach ($leaguesMatches[0]->leagueMatches as $key => $matche)
                                    @php
                                     $startSoonMatch = getMatchStatus($matche->fixture_date);
                                    @endphp
                                    <tr class="matche-main" data-fixture-id="{{ $matche->id}}" data-league-id="{{$leaguesMatches[0]->league_id}}" data-home-team="{{ $matche->home_team_id }}" data-away-team="{{ $matche->away_team_id }}">
                                        <td class="match-team-logo">
                                            {{-- <img src="" alt="team-logo-3" class="lazy-load"> --}}
                                            <img class="lazy-load" data-src="{{ $matche->home_team_logo }}" alt="team-logo">

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
                                            <img class="lazy-load" data-src="{{ $matche->away_team_logo }}" alt="team-logo">
                                            <h6>{{ $matche->away_team_name }}</h6>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                                {{-- {!! $matches->links('pagination::bootstrap-4') !!} --}}
                             </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <!-- Component End  -->
            </div>
         </div>
         </div>
      </section>
<!--====sign up section end====-->

  <!-- alert-msg popup start -->
  <div class="alert-msg">
    <div class="modal fade" id="errorModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
             <span>
                 <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
             </span>
                <h4 id="error-message"></h4>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
            </div>
        </div>
        </div>
    </div>
</div>
 <!-- alert-msg popup end -->
@endsection

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

