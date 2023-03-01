@extends('layouts.layout')

@section('content')

{{-- Header --}}
<div>
<h1 class="text-center hcol1 pb-2"> Admin Panel </h1>
</div>

<section>
    <div class="pt-5">
        <h3 class="text-center hcol1 pb-2">Create Articles</h3>        
        <a href="{{route('latest')}}"><button>Create Latest Release</button></a>
        <a href="{{route('newpost')}}"><button>Create Post</button></a>
    </div>
</section>

<section>
    <div class="pt-5">
        <h3 class="text-center hcol1 pb-5">Create Game</h3>
        <a href="{{route('newgame')}}"><button>Create New Game</button></a>
    </div>
</section>

<section>
    <div class="pt-5">
        <h3 class="text-center hcol1 pb-5">Create Console</h3>
        {{-- <a href="{{route('newconsole')}}"><button>Create New Console</button></a> --}}
    </div>
</section>


@endsection