@extends('front_end.layout.main')
@section('content')

<!--==== Matches section start ====-->
@php
   $PointCalculationService = app(App\Services\PointCalculationService::class);
@endphp

<section class="premier_bg matches my-matches">
    <div class="container">
       <div class="leagure_container">
          <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">
             <!-- <a href="leagues.html" class="back-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff"><path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path></svg></a> -->
             <!-- Component Start -->
             <h1 class="font-medium">
               My Matches
             </h1>
             {{-- <h4>My Matches</h4> --}}
             <div class="flex flex-col mt-6">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                   <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="matches-table">
                         <div class="div-tbl">
                            <table
                               class="table table-light table-striped table-hover table-sm">
                               <thead
                                  class=" text-uppercase">
                                  <tr>
                                     <th scope="col">Team</th>
                                     <th scope="col">Match Info</th>
                                     <th scope="col">Team</th>
                                     <th scope="col">Score</th>
                                     <th scope="col">Status</th>
                                  </tr>
                               </thead>
                               <tbody>
                                @foreach ($matches as $match)
                                @php
                                    $points = $PointCalculationService->calculatePoints(Auth::user()->id,$match->fixture_id);
                                @endphp
                                {{-- @if(isset($match) && !empty($match)) --}}
                                  <tr class="matche-main" data-fixture-id="{{ $match->fixture_id ?? ''}}" data-league-id="{{ $match->league->league_id ?? ''}}">
                                     <td class="match-team-logo">
                                        <img src="{{ $match->home_team_logo ?? '' }}" alt="{{ $match->home_team_name ?? '' }} logo" alt="team-logo-3">
                                        {{-- <span>SHL</span> --}}
                                        <h6>{{ $match->home_team_name ?? '' }}</h6>
                                        {{-- <a href="premier-league-players.html"></a> --}}
                                     </td>
                                     <td>
                                        <h6>{{ $match->venue_name ?? '' }}</h6>
                                        <p>{{$match->venue_city ?? ''}}</p>
                                        <span>{{ date('Y-m-d h:i a', strtotime($match->fixture_date ?? '')) }}</span>
                                     </td>
                                     <td class="match-team-logo">
                                        {{-- <span>CNGZ</span> --}}
                                        <img src="{{ $match->away_team_logo ?? '' }}" alt="{{ $match->away_team_name ?? '' }} logo" alt="team-logo-2">
                                        <h6>{{ $match->away_team_name ?? '' }}</h6>
                                     </td>
                                     <td class="match-score">

                                        <h6>{{$points ?? 0}}</h6>

                                     </td>
                                     <td class="match-status">
                                        <p class="win">-- </p>
                                        {{-- <p class="lose">lose</p> --}}
                                     </td>
                                  </tr>
                                 {{-- @endif --}}
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
    </div>
 </section>

<!--==== Matches section end ====-->

@endsection

@section('custom-script')

<script>
   $(".matche-main").on('click', function() {
    var fixtureId = $(this).data('fixture-id');
    var leagueId = $(this).data('league-id');
    var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
    url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
    window.location.href = url;
  });
</script>

@endsection
