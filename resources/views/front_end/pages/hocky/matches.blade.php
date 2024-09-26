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
                                          @foreach($matches as $key => $value)
                                             <tr class="matche-main" data-fixture-id="{{ $value->id}}">
                                                <td class="match-team-logo">
                                                   <img src="{{$value->home_team_logo}}" alt="team-logo-3">
                                                   {{-- <span>SHL</span> --}}
                                                   <h6>{{$value->home_team_name}}</h6>
                                                   <a href="premier-league-players"></a>
                                                </td>
                                                <td>
                                                   {{-- <h6>Chase Stadium</h6>
                                                   <p>Fort Lauderdale, Florida</p> --}}
                                                   <span>{{ date('Y-m-d h:i a',strtotime($value->fixture_date))}}</span>

                                                </td>

                                                <td class="match-team-logo">
                                                   {{-- <span>CNGZ</span> --}}
                                                   <img src="{{$value->away_team_logo}}"
                                                         alt="team-logo-2">
                                                   <h6>{{$value->away_team_name}}</h6>
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

@section('custom-script')
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
@endsection
