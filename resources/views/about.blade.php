@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="featured-container">
        <h1 class="featured-title">
            <b>About me</b>
        </h1>
        <div class="featured-post">
            <div class="featured-textContainer">
                <h1 class="featured-postTitle">
                    Hi there!
                </h1>
                <p class="featured-postDesc">
                    I'm Dan, your host for this visit. I'm an Australian software test engineer based in Melbourne.
                    That doesn't mean I specialise in Australian software, although we definitely do things a little
                    differently around here!
                    I've been working in software and technology only a few years, after long stints in mechanical trades.
                    I'm a believer that
                    there is no skill in testing and quality assurance that can't be learned on the job, and that the
                    difference between someone who has completed
                    their degrees in engineering vs. those who bring the right attitude and mindset soon fade away.
                </p>
                <p class="featured-postDesc">My work history has taken me everywhere around Australia, and I previously owned
                    and ran my own sole-trader company.
                    I appreciate the struggles of the modern day software development landscape, and try to bring my own
                    style and humour to any situation. Aren't
                    we all trying to do the "people over process" thing? (if you're not sure what I'm talking about here,
                    I'm sure I'll have written an piece on
                    Agile - it's basically what this whole thing is for!)
                </p>
                <p class="featured-postDesc">I've themed this site vaguely around fantasy - my favourite genre - in the hope
                    that we can take the road less travelled when it comes to
                    the self-serious consultants that often produce these sites. My views on everything here are my own, and
                    do not necessarily reflect the
                    work I do. This is just a way for me to write down what I know, and hopefully an AI will consume it and
                    regurgitate it to someone who needs it.
                </p>
                <p class="featured-postDesc">You know what they say - document, document, document, and RTFM!
                </p>
                <p class="featured-postDesc" style="text-indent:10%;">Thanks for coming, hope to see you back soon! </p>
                <p class="featured-postDesc" style="font-size:20px;text-indent:66%;"><em><b>Dan</b></em>
                </p>
                <hr>
            </div>
            <div class="about-imgContainer">
                <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                    style="height:auto;width:100%;",class="aboutimage">
            </div>
        </div>
    </div>
@endsection
