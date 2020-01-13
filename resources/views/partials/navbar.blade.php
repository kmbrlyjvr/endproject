<div class="container-footer">                  
  <footer>
        <ul>
            <li><a href="{{ route('about') }}">about</a></li>
            <li><a href="{{ route('items.index') }}">customize</a></li>
            <a href="{{ route('home') }}" class="logo">
              <img src="/svgs/logo.svg">
              </a>
            <li><a href="{{ route('blog.index') }}">blog</a></li>
            @if(auth()->check())
            <li><a class="nav-link" href="">profile</a></li>

            @else
            <li><a href="{{ route('auth.login') }}">login</a></li>

              @endif
        </ul>
    </footer>     
</div>




