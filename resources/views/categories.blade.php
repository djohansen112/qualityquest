@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div>
        <div class="catListcontainer">
            <h1 class="catListtitle">Categories</h1>
            <div class="catListcategories">
                <div class="catListcategory cat1">
                    <a href="/categories">
                        <img src="/images/avatar_1.png", style="height:64px;width:64px;" class="catListtimage">
                        Testing</a>
                </div>
                <div class="catListcategory cat2">
                    <a href="/categories">
                        <img src="/images/avatar_2.png", style="height:64px;width:64px;" class="catListtimage">
                        Software</a>
                </div>
                <div class="catListcategory cat3">
                    <a href="/categories">
                        <img src="/images/avatar_3.png", style="height:64px;width:64px;" class="catListtimage">
                        Development</a>
                </div>
                <div class="catListcategory cat4">
                    <a href="/categories">
                        <img src="/images/avatar_4.png", style="height:64px;width:64px;" class="catListtimage">
                        Etc</a>
                </div>
            </div>
        </div>
        <h1 style="margin-top:50px;">You're in
            CATEGORY NAME{{-- {{$categories['name']}} --}}
        </h1>
        {{-- @if ($categories['post_ids'])
            {{-- if it is empty --}}
        <h2 style="margin-top:50px;">There's nothing to show here, check back later.</h2>
        {{-- @else --}}
        {{-- @foreach ($categories['posts'] as $category['post']) --}}
        @foreach ($posts as $post)
            <div class="postcontainer">
                <div class="postimageContainer">
                    @if ($post['image'])
                        <img src="/images/avatar_4.png", style="height:350px" class="postimage">
                    @else
                        <img src="/images/avatar_4.png", style="height:350px" class="postimage">
                    @endif
                </div>
                <div class="posttextContainer">
                    <h1 class="postTitle">
                        <a href="/posts/1">{{ $post['title'] }}</a>
                    </h1>
                    <div class="carddetail">
                        @if ($post['status'] == 'draft')
                            <p class="postdate">Draft</p>
                        @elseif($post['status'] == 'scheduled')
                            <p class="postdate">Scheduled for {{ $post['scheduled_at'] }}</p>
                        @elseif($post['published_at'] && !$post['scheduled_at'])
                            <p class="postdate">Published: $post['createddate'] ago</p>
                        @else
                            <p>Error!</p>
                        @endif
                        <p class="postcategory">
                            @if ($post['categoryname'])
                                Category: {{ $post['categoryname'] }}
                            @else
                                No category
                            @endif
                        </p>
                    </div>
                    <p class="postdesc">
                        {{ $post['body'] }} {{--truncated text here--}}
                        Descirption from post first 100 words
                    </p>
                </div>
            </div>
        @endforeach
        {{-- @endif --}}
    </div>
@endsection
