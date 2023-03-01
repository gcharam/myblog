@extends('layouts.layout')

@section('content')

{{-- Header --}}
<section>
    <h1 class="text-center hcol1 pb-4"> Admin Panel </h1>
    <h3 class="text-center hcol1 pb-2"> Create Article </h3>
</section>

<div>
    <form action="" method="POST">
        @csrf
        <input class="form-control" type="text" name="title" placeholder="Title">
        <textarea class="form-control" name="body" cols="30" rows="10" type="textarea" placeholder="Content"></textarea>
        <button class="btn btn-primary">Create</button>
        <p>{{$ap}}</p>
    </form>
</div>





@endsection