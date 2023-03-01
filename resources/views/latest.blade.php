@extends('layouts.layout')

@section('content')

{{-- Header --}}
<section>
    <h1 class="text-center hcol1 pb-4"> Admin Panel </h1>
    <h3 class="text-center hcol1 pb-2"> Create Game </h3>
</section>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session()->has('message'))
                            <!--Success Alert-->
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <!--End of Success Alert-->
                        @endif
<div>
    <form action="/submit-latest" method="POST">
        @csrf
        <input class="form-control" type="text" name="title" placeholder="Title">
        <textarea class="form-control" name="body" cols="30" rows="10" type="textarea" placeholder="Content"></textarea>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
@endsection