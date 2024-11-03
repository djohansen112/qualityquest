<link rel="stylesheet" href="{{ asset('css/show.css') }}">
{{-- <% if user_signed_in? %>
<%= form_for [@post, @newcomment] do |form| %>
<% if form.object.errors.any? %>
<% form.object.errors.full_messages.each do |message| %> --}}
<div>
    Message here {{-- <%= message %> --}}
</div>
{{-- <% end%>
<% end%> --}}
<div>
    text field here iwth "leave a comment"class:"commenttextfield"
    {{-- <%= form.text_field :body, placeholder:"Leave a comment here...", class:"commenttextfield"%> --}}
</div>
submit button
{{-- <%= form.button "Submit", class:"commentsubmitbtn"%>
<% end %>
<% else%> --}}
You must sign in to leave a comment.
{{-- <%end%> --}}
