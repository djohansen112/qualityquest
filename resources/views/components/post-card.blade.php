@props(['post'])

<div class="postcontainer">
    <div class="postimageContainer">
        {{-- if there's an image display, otherise do a random --}}
        <img src="{{ asset('images/orc_avatar.png') }}" alt="tag" style="height: 350px;",class="postimage">
    </div>
    <div class="posttextContainer">
        <h1 class="postTitle"> <a href="/posts/{{ $post['id'] }}">
                {{ $post['title'] }}
            </a></h1>
        <div class="carddetail">
            {-- <% if post.draft? %> --}
            {-- <p class="postdate">Draft</p> --}
            {-- <% elsif post.scheduled? %> --}
            {-- <p class="postdate">Scheduled for <%= post.published_at.strftime("%d-%b-%Y") %></p> --}}
            {-- <% elsif post.published_at.present? && !post.scheduled? %> --}
            <p class="postdate">Published: {{$post['created_at']->diffForHumans()}} ago</p>
            {-- @else --}
            {-- <p>Error!</p> --}
            {-- @endif --}
            <p class="postcategory">
                Category: 
            {-- @if post.category_id.present? %> --}
                {--$post['category']--}</p>
            {-- @else --}
                Uncategorised </p>
            {-- @endif --}
        </div>
        <p class="postdesc">
            <p>{{ $post['bodytruncated']}}</p>
        </p>
    </div>
</div>
