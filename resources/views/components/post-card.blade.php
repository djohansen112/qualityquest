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
            {{-- <% if post.draft? %> --}}
            {{-- <p class="postdate">Draft</p> --}}
            {{-- <% elsif post.scheduled? %> --}}
            {{-- <p class="postdate">Scheduled for <%= post.published_at.strftime("%d-%b-%Y") %></p> --}}
            {{-- <% elsif post.published_at.present? && !post.scheduled? %> --}}
            <p class="postdate">Published: Some time ago</p>
            {{-- <%= time_ago_in_words post.published_at %> --}}
            {{-- <% else %> --}}
            {{-- <p>Error!</p> --}}
            {{-- <%end%> --}}
            <p class="postcategory">
                Category: Things </p>
            {{-- <% if post.category_id.present? %> --}}
            {{-- <%= post.category.name %> --}}
            {{-- <% end %></p> --}}
        </div>
        <p class="postdesc">
            {{-- shorten to 100 words or whatever --}}
        <p>{{ $post['body'] }}</p>
        </p>
    </div>
</div>
