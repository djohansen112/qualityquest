@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <link rel="stylesheet" href="{{ asset('css/cardlist.css') }}">

    <div class="home-container">
        {{-- Featured --}}
        <div class="featured-container">
            <h1 class="featured-title">
                <b>Featured</b>
            </h1>
            <div class="featured-post">
                {{-- if featured image, then diesplay image, otherwise randomise --}}
                <div class="featured-imgContainer">
                    {{-- <% if @featured.cover_image.present? %> --}}
                    <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                        style="height:100%;width:auto;",class="postimage">
                </div>
                <div class="featured-textContainer">
                    {{-- get featured post as just the latest post or whatever --}}
                    <h1 class="featured-postTitle">
                        Post Title Link
                    </h1>
                    <p class="featured-postDesc">
                        Post description truncated
                    </p>
                </div>
            </div>
        </div>
        {{-- CategoryList --}}
        <div class="catListcontainer">
            <h1 class="catListtitle">Popular Categories</h1>
            <div class="catListcategories">
                <div class="catListcategory cat1">
                    <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                        style="height:64px;width:64px;",class="catListtimage">
                    <a href="/categories/testing"> /testing
                    </a>
                </div>
                <div class="catListcategory cat2">
                    <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                        style="height:64px;width:64px;",class="catListtimage">
                    <a href="/categories/software">/software</a>
                </div>
                <div class="catListcategory cat3">
                    <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                        style="height:64px;width:64px;",class="catListtimage">
                    <a href="/categories/dev">/dev</a>
                </div>
                <div class="catListcategory cat4">
                    <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                        style="height:64px;width:64px;",class="catListtimage">
                    <a href="/categories/etc">/etc</a>
                </div>
            </div>
        </div>
        {{-- <%# CardList %> --}}
        <div class="blogcontent">
            <div class="cardListcontainer">
                <h1 class="cardListtitle">Recent Posts</h1>
                <div class="cardListposts">
                    @unless (count($posts) == 0)
                        @foreach ($posts as $post)
                            <x-post-card :post="$post" />
                        @endforeach
                    @else
                        <p>No posts yet, come back soon!</p>
                    @endunless
                </div>
                <div class="pagination">
                    #PAGINATION
                </div>
            </div>
            {{-- <%# end cardlistcontainer%> --}}
            <x-menu />
        </div>

    </div>



@endsection
