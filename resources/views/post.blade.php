@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    <div class="content-container">
        <div class="content-articlecontainer">
            <div class="content-adminarea">
                {{-- @if ($user == logged_in && $user . role == 1(admin))
                    <figure out how to do this?>
                        <a href="/edit">Edit this page</a>
                @endif --}}
            </div>
            <div class="contentimagecontainer">
                @if ($post['image'])
                    {{ $post['image'] }}
                @else
                    <img src="/images/avatar_2.png" class="contentimage">
                @endif
            </div>
            <div class="contentheading">
                <div class="contenttitle">
                    <h1> {{ $post['title'] }} </h1>
                </div>
                <div class="contentdetails">
                    <div class="contentcategory">
                        @if ($post['category'])
                            <h3> Category: {{ $post['category'] }} </h3>
                        @else
                            <h3> No category</h3>
                        @endif
                    </div>
                    <div class="contentcategory">
                        @if ($post['publisheddate'])
                            <h3> Published: {{ $post['publisheddate'] }} ago </h3>
                        @else
                            <h3> Not published yet </h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="contentbody">
                <p>{{ $post['body'] }}</p>
            </div>
            <div class="contentcommentscontainer">
                <div class="contentcommentstitle">
                    <h3>Comments:</h3>
                </div>
                <div class="contentcommentsnew">
                    <x-newcomment />
                </div>
                <div class="contentcomments">
                    {{-- @if ($comments)
                        @foreach ($comments as $comment)
                            <div>
                                <div class="contentcommenter">{{ $comments['user_id'] }} commented
                                    {{ $comment[created_at] }} ago:</div>
                                <p class="commentcontent">{{ $comment['body'] }}</p>
                            </div>
                        @endforeach
                    @else
                        <div class="contentcommenter">No comments so far...</div>
                    @endif --}}
                    <div class="contentcommenter">No comments so far...</div>
                </div>
            </div>
        </div>
        <div class="content-menucontainer">
            <div class="content-menupostitem">
                <h2 class="menusubtitle">Recommended</h2>
                <h1 class="content-menuposttitle">Popular Pick</h1>
                <div class="content-menupostitem">
                    <a href="/categories">
                        <div class="content-menupostimageContainer">
                            <img src="/images/avatar_2.png" class="content-menupostimage">
                        </div>
                        <div class="content-menuposttextContainer">
                            <h3 class="content-menupostTitle">
                                Popular post title
                            </h3>
                            <span class="content-menupostcategory">
                                Popular post category
                            </span>
                            <div class="content-menupostdetail">
                                <div class="content-menupostdate">Published: Popular post created_at
                                    ago</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
