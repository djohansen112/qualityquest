@extends('layout')
@section('content')
    <h1>The {{ $placeholder }} page </h1>
@endsection
<div>
    <div class="catListcontainer">
        <h1 class="catListtitle">Categories</h1>
        <div class="catListcategories">
            <div class="catListcategory cat1">
                <%= image_tag "avatar_#{rand(1..23)}.png", style: "height:64px;width:64px;", class:"catListtimage"%>
                <%= link_to "testing", category_path("testing") %>
            </div>
            <div class="catListcategory cat2">
                <%= image_tag "avatar_#{rand(1..23)}.png", style: "height:64px;width:64px;", class:"catListtimage"%>
                <%= link_to "software", category_path("software") %>
            </div>
            <div class="catListcategory cat3">
                <%= image_tag "avatar_#{rand(1..23)}.png", style: "height:64px;width:64px;", class:"catListtimage"%>
                <%= link_to "dev", category_path("dev") %>
            </div>
            <div class="catListcategory cat4">
                <%= image_tag "avatar_#{rand(1..23)}.png", style: "height:64px;width:64px;", class:"catListtimage"%>
                <%= link_to "etc", category_path("etc") %>
            </div>
        </div>
    </div>
    <h1 style="margin-top:50px;">You're in <%= @categories.name%></h1>
    <%if @categories.post_ids.empty? %>
    <h2 style="margin-top:50px;">There's nothing to show here, check back later.</h2>
    <%else%>
    <% @categories.posts.each do |post|%>
    <div class="postcontainer">
        <div class="postimageContainer">
            <% if post.cover_image.present? %>
            <%= image_tag post.cover_image,style: "height: 350px;", class:"postimage" %>
            <% else %>
            <%= image_tag "avatar_#{rand(1..23)}.png", style: "height: 350px;",class:"postimage" %>
            <%end%>
        </div>
        <div class="posttextContainer">
            <h1 class="postTitle"> <%= link_to post.title, post %> </h1>
            <div class="carddetail">
                <% if post.draft? %>
                <p class="postdate">Draft</p>
                <% elsif post.scheduled? %>
                <p class="postdate">Scheduled for <%= post.published_at.strftime("%d-%b-%Y") %></p>
                <% elsif post.published_at.present? && !post.scheduled? %>
                <p class="postdate">Published: <%= time_ago_in_words post.published_at %> ago</p>
                <% else %>
                <p>Error!</p>
                <%end%>
                <p class="postcategory">
                    Category:
                    <% if post.category_id.present? %>
                    <%= post.category.name %>
                    <% end %></p>
            </div>
            <p class="postdesc">
                <%= post.content.to_plain_text.truncate_words(100) %>
            </p>
        </div>
    </div>
    <% end %>
    <% end %>
</div>
