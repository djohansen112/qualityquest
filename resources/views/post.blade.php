@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <h1>{{ $page_heading }}</h1>

    <h2>{{ $post['title'] }} </h2>
    <p>{{ $post['body'] }}</p>
@endsection


<% stylesheet_link_tag "show" %>
<% stylesheet_link_tag "menu" %>
<div class="content-container">
    <div class="content-articlecontainer">
        <div class="content-adminarea">
            <% if user_signed_in? && current_user.role_id == 1%>
            <%= link_to "Edit this page", edit_post_path%>
            <%  end %>
        </div>
        <div class="contentimagecontainer">
            <%if @post.cover_image.present?%>
            <%= image_tag @post.cover_image, :class => "contentimage"%>
            <%end%>
        </div>
        <div class="contentheading">
            <div class="contenttitle">
                <h1> <%= @post.title %> </h1>
            </div>
            <div class="contentdetails">
                <div class="contentcategory">
                    <% if @post.category.name.present? %>
                    <h3> Category: <%= @post.category.name %> </h3>
                    <%end%>
                </div>
                <div class="contentcategory">
                    <% if @post.published_at.present? %>
                    <h3> Published: <%= time_ago_in_words @post.updated_at %> ago </h3>
                    <%end%>
                </div>
            </div>
        </div>
        <div class="contentbody">
            <p><%= @post.content %></p>
        </div>
        <div class="contentcommentscontainer">
            <div class="contentcommentstitle">
                <h3>Comments:</h3>
            </div>
            <div class="contentcommentsnew">
                <%= render partial: 'shared/newcomment', locals:{post: @post}%>
            </div>
            <div class="contentcomments">
                <% if @comments.present? %>
                <%@comments.each do |comment|%>
                <div>
                    <div class="contentcommenter"><%= comment.user_id %> commented
                        <%= time_ago_in_words comment.created_at %> ago:</div>
                    <p class="commentcontent"><%= comment.body %></p>
                </div>
                <%end%>
                <% else %>
                <div class="contentcommenter">No comments so far...</div>
                <%end%>
            </div>
        </div>
    </div>
    <div class="content-menucontainer">
        <div class="content-menupostitem">
            <h2 class="menusubtitle">Recommended</h2>
            <h1 class="content-menuposttitle">Popular Pick</h1>
            <div class="content-menupostitem">
                <div class="content-menupostimageContainer">
                    <%= image_tag "avatar_#{rand(1..23)}.png", class:"content-menupostimage" %>
                </div>
                <div class="content-menuposttextContainer">
                    <h3 class="content-menupostTitle">
                        <%= link_to @popularpost.title, @popularpost%>
                    </h3>
                    <span class="content-menupostcategory">
                        <%= @popularpost.category.name%>
                    </span>
                    <div class="content-menupostdetail">
                        <div class="content-menupostdate">Published: <%= time_ago_in_words @popularpost.published_at %>
                            ago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
