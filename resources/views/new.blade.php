@extends('layout\user-layout')
@section('content')

    <p class="mb-1">This is Form page .</p>
    <div class="card col-12 container p-2 mt-5">
    <form action="/new" method="post">
        @csrf
        <div class="form-group mb-2">
            <label for="Long_URL" class="mb-1"><h4>Past Long URL</h4></label>
            <input type="text" class="form-control" id="Long_URL" name="Long_URL" placeholder=" Past Long URL ">
        </div>
        <button class="btn btn-primary">Create Short URL</button>
    </form>
    </div>
@endsection
