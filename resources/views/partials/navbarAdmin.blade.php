
       <nav class="main-menu">
            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.index')}}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Admin
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="{ route('admin.user.index') }}">
                    <!--   <i class="fa fa-list fa-2x"></i> -->
                    <i class="fa fa-user fa-2x"></i>                        
                        <span class="nav-text">
                            Userslist
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="{{ route('admin.order.index') }}">
                    <i class="fa fa-truck fa-2x"></i>                        
                    <span class="nav-text">
                            Orders
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blogpost') }}">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Blog
                        </span>
                    </a>
                </li>
                 <!-- <li>
                 <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>-->
           <!--     <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            To-Do
                        </span>
                    </a>
                </li>-->
            </ul>

            <ul class="logout">
                <li>
                   <a href="{{ route('auth.logout') }}">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
