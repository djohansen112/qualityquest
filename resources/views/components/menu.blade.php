<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

<div class="menucontainer">
    <h2 class="menusubtitle">What's hot?</h2>
    <h1 class="menuposttitle">Most popular</h1>
    <div class="menupostitems">
        <div class="menupostitem">
            <div class="menupostimageContainer">
                <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                    style="width: 120px; height:120px",class="menupostimage">
            </div>
            <div class="menuposttextContainer">
                <span class="menupostcategory">
                    {{-- randomise one here? --}}
                    Category Title
                </span>
                <h3 class="menupostTitle">
                    {{-- randomise one here? --}}
                    Post Title
                </h3>
                <div class="menupostdetail">
                    {{-- display published date --}}
                    <div class="menupostdate">Published: Some time ago</div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="menusubtitle">Discover by topic</h2>
    <h1 class="menuposttitle">Categories</h1>
    <div class="menucategoryList">
        <ul>
            <li class ="menucategoryItem"><a href="/categories/testing">/testing</a></li>
            <li class ="menucategoryItem"><a href="/categories/software">/software</a></li>
            <li class ="menucategoryItem"><a href="/categories/dev">/dev</a></li>
            <li class ="menucategoryItem"> <a href="/categories/etc">/etc</a></li>
        </ul>
    </div>
    <h2 class="menusubtitle">Chosen by the editor</h2>
    <h1 class="menuposttitle">Editor's Picks</h1>
    <div class="menupostitem">
        <div class="menupostimageContainer">
            <img src="{{ asset('images/orc_avatar.png') }}" alt="tag"
                style="width: 120px; height:120px",class="menupostimage">
        </div>
        <div class="menuposttextContainer">
            <span class="menupostcategory">
                {{-- <%= @popularpost.category.name%> --}}
                Pop Cat Name
            </span>
            <h3 class="menupostTitle">
                Pop Cat Title
            </h3>
            <div class="menupostdetail">
                <div class="menupostdate">Published: Some time ago
                </div>
            </div>
        </div>
    </div>
</div>
