@extends('layouts.layout')

@section('content')

{{-- Header --}}
<section>
    <h1 class="text-center hcol1 pb-4"> Admin Panel </h1>
    <h3 class="text-center hcol1 pb-2"> Create New Game </h3>
</section>

<div>
    <form action="" method="POST">
        @csrf
        <input class="form-control" type="text" name="Title" placeholder="Title">
        <textarea class="form-control" name="Description" cols="30" rows="10" type="textarea" placeholder="Content"></textarea>
        <label class="pt-2">Choose console:</label>
        <select class="form-select mb-2" name="ConsoleID">
            <option value="1">Playstation5</option>
            <option value="2">Playstation4</option>
            <option value="3">Xbox series X/S</option>
            <option value="4">Xbox One</option>
            <option value="5">PC</option>
        </select>
        <label class="pt-2">Choose a kind:</label>
        <select class="form-select mb-2" name="KindID">
            <option value="1">Adventure</option>
            <option value="2">Fps</option>
            <option value="3">Strategy</option>
            <option value="4">Sports</option>
        </select>
        <button class="btn btn-primary">Create</button>
        <p>{{$ap}}</p>
    </form>
</div>





@endsection