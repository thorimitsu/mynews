@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <h1>プロフィール</h1>
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-8">
                                <div class="row">
                                    <div class="title col-md-4">名前</div>
                                    @if ($posts)<div class="body col-md-8 mt-1">{{ $posts->name }}</div>@endif
                                </div>
                                <hr color="#c0c0c0">
                                <div class="row">
                                    <div class="title col-md-4">性別</div>
                                    @if ($posts)<div class="body col-md-8 mt-1">{{ $posts->gender }}</div>@endif
                                </div>
                                <hr color="#c0c0c0">
                                <div class="row">
                                    <div class="title col-md-4">趣味</div>
                                    @if ($posts)<div class="body col-md-8 mt-1">{{ $posts->hobby }}</div>@endif
                                </div>
                                <hr color="#c0c0c0">
                                <div class="row">
                                    <div class="title col-md-4">自己紹介</div>
                                    @if ($posts)<div class="body col-md-8 mt-1">{{ $posts->introduction }}</div>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <hr color="#c0c0c0">
        </div>
@endsection