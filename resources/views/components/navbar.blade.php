<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<div class="navcontainer">
    <div class="navlogoContainer">
        <span><a href='/'><img src="{{ asset('images/orc_avatar.png') }}" alt="tag" class="imageLogo"></a></span>
    </div>
    <div class="navtitleContainer">
        <h1 id="navTitle">Quality Quest</h1>
        <h4> RANDOM QUOTE HERE</h4>
    </div>
    <div class="auth-nav">
        <ul class="auth-nav-top">
            {{-- <% if user_signed_in? %> --}}
            <span>Signed In as: USERNAME</span>
            <li>Profile</li>
            <li>Logout</li>
            {{-- <% if current_user.role_id == 1%> --}}
            <li>New Post</li>
            {{-- <%end%> --}}
            {{-- <% else %> --}}
            <li>Sign in</li>
            <li>Sign up</li>
            {{-- <%end%> --}}
        </ul>
        <ul class="auth-nav-bottom">
            <li><a href='/'>Home</a></li>
            <li><a href='/categories'>Categories</a></li>
            <li><a href='/about'>About</a></li>
            <li><a href='/contact'>Contact</a></li>
        </ul>
    </div>
</div>
