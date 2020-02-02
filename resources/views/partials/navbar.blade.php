<div class="container-footer">                  
  <footer>
        <ul>
            <li><a href="/about">about</a></li>
            <li><a href="{{ route('items.index') }}">customize</a></li>
            <a href="{{ route('home') }}" class="logo">
              <img src="/svgs/logo.svg" alt="sinta logo">
            </a>


            <li><a href="/blog">blog</a></li>
            @if(auth()->check())
            <li><a class="nav-link" href="{{ route('profile') }}">profile</a></li>
            @else
            <li><a href="{{ route('auth.login') }}">login</a></li>

            @endif
        </ul>
    </footer>     
</div>




