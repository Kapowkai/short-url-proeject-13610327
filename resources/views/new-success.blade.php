@extends('layout\user-layout')
@section('content')
    <div class="card col-12 container p-2 mt-5">
        <h6 style="color: green" class="mt-2">Add Successfully</h6>
        <h4 class="mb-2"><label class="fw-light"> Short URL is : </label><a href="/{{$URL ->Short_URL}}">{{$URL ->Short_URL}}</a></h4>
        <a href="http://www.short.local" class="btn btn-primary mt-2 mb-4">Go back</a>
    </div>

@endsection
