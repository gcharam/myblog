@extends('layouts.layout')

@section('content')

{{-- Header --}}

<section class="mb-4">

    <h3 class="text-center hcol2 pb-2"> {{$games[0]->Name}} </h3>
    
  <div class="d-flex justify-content-center">
      @foreach ($games as $game)
      <?php $bodys = Str::substr($game->Description, 0, 8);?>
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$game -> Title}}</h5>
                <p class="card-text">{{$bodys}}...</p>
              </div>
              <div class="card-body">
                <a href="#" class="card-link">Περισσότερα</a>
              </div>
          </div>
      @endforeach 
  </div>
</section>


@endsection