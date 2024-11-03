{{-- <%= form_with model: post do |form|%>
  <% if form.object.errors.any? %>
    <% form.object.errors.full_messages.each do |message| %>
      <div><%= message %></div>
    <% end%>
  <% end%>
  <div>
    <%= form.label :title%>
    <%= form.text_field :title%>
  </div>
  <div>
    <%= form.label :cover_image%>
    <%= form.file_field :cover_image%>
    <%if @post.cover_image.present?%>
      <%= image_tag @post.cover_image %>
      <%= link_to "Remove image...", post_cover_image_path(post), data: {turbo_method: :delete, turbo_confirm: "Are you sure? Any other changes will be lost!"} %>
    <%end%>
  </div>
  <div>
    <%= form.label :content%>
    <%= form.rich_text_area :content%>
  </div>
  <div>
    <%= form.label :published_at%>
    <%= form.date_select :published_at, include_blank: true, selected: Date.today %>
  </div>
  <div>
    <%= form.label :category %>
    <% for category in @categories %>
      <div>
        <%= radio_button_tag "post[category_id]", category.id, @post.category_id == category.id %><%= category.name %>
      </div>
    <% end %>
  </div>
  <%= form.button "Submit"%>
<% end %> --}}
