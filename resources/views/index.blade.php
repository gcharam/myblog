@extends('layouts.layout')

@section('content')

{{-- Header --}}
<section>
    <h1 class="text-center hcol1 pb-2"> Τα πάντα για το Gaming </h1>
</section>

{{-- Latest articles --}}
<section class="mb-4">
    <h3 class="text-center hcol2 pb-2"> Πρόσφατα άρθρα </h3>

    @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
  
  <div class="d-flex justify-content-center">
      @foreach ($posts as $post)
      <?php $bodys = Str::substr($post->body, 0, 8);?>
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$post -> title}}</h5>
                <p class="card-text">{{$bodys}}</p>
              </div>
              <div class="card-body">
                <a href="#" class="card-link">Περισσότερα!!</a>
                <a href="#" class="card-link">Περισσότερα!!</a>
                <a href="/delete/testgame/{{$post->id}}" class="card-link">Deleteα</a>
              </div>
          </div>
      @endforeach 
  </div>
</section>


{{-- Latest games --}}
<section>
  <h3 class="text-center hcol2 pb-2"> Τελευταίες Κυκλοφορίες </h3>
    
  <div class="d-flex justify-content-center">
    @foreach ($games as $game)
    <?php $body = Str::substr($game->body, 0, 8);?>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$game -> title}}</h5>
          <p class="card-text">{{$body}}</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Περισσότερα</a>
        </div>
      </div>  
    @endforeach
  </div>      
</section>


@endsection