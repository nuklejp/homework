@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <table class="table">
                            <tr>
                                <td>名前</td>
                                <td>{{ str_limit($post->name, 150) }}</td>
                            </tr>
                            <tr>
                                <td>性別</td>
                                <td>{{ str_limit($post->gender, 150) }}</td>
                            </tr>
                            <tr>
                                <td>趣味</td>
                                <td>{{ str_limit($post->hobby, 150) }}</td>
                            </tr>
                            <tr>
                                <td>自己紹介</td>
                                <td>{{ str_limit($post->introduction, 150) }}</td>
                            </tr>
                        </table>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection