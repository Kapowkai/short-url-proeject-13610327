@extends('layout\user-layout')
@section('content')
    <p>This is Welcome page .</p>
    <div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="d-flex justify-content-between">
                        <div>list</div>
                        <div>
                            <a href="/new" class="btn btn-primary">สร้างแบบฟอร์ม</a>
                        </div>
                    </div>
                </h5>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Created</th>
                        <th>Long URL</th>
                        <th>Short URL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if(!$URLs->isEmpty())
                            @foreach($URLs as $index=>$URL)
                                <td>{{$index+1}}</td>
                                <td>{{$URL ->created_at}}</td>
                                <td>{{$URL ->Long_URL}}</td>
                                <td><a href="http://www.{{$URL ->Short_URL }}">{{$URL ->Short_URL}}</a></td>

                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
