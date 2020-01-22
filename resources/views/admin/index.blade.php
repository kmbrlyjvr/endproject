<!--<div class="container">
        <a href="{{ route('home') }}" class="logo">
                <img src="/svgs/logo.svg">
              </a>
        <h2 class="title">Welcome Admin</h2>
    


<div class="admin-nav">                  
        <nav>
              <ul>
                  <li><a href="/about">about</a></li>
              <li><a href="{{ route('items.index') }}">generator</a></li>
                  <li><a href="{{ route('admin.blogpost') }}">blog</a></li>
                  <li><a class="nav-link" href="{{ route('profile') }}">userlist</a></li>
      
              </ul>
            </nav>     
      </div>
</div>-->




<html>
  <head>
 
  </head>
  <body><div class="area"></div><nav class="main-menu">
            <ul>
                <li>
                    <a href="">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home
                        </span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Admin
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Userslist
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
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
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            To-Do
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
  </body>
    </html>

<style>
/*
.html {
  margin: 0;
  padding: 0;
}

body {
  margin: 0;
  padding: 0;
  background: #fff;
  color: var(--black);
  font-family: 'Lekton', sans-serif;
}

.container {
  position: absolute;
  margin: 60px 0;
  width: 100%;
}

.logo img {
    width: 10em;
}

.admin-nav {
    font-size: 1em;
}

.admin-nav li {
    list-style: none;
}
*/
@import url('https://fonts.googleapis.com/css?family=Lekton&display=swap');
@import url('https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap');
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}
.fa-2x {
font-size: 1em;
}
.fa {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size: 20px;
}


.main-menu:hover,nav.main-menu.expanded {
width: 250px;
overflow: visible;
}

.main-menu {
background: #fff;
text-transform: uppercase;
/*border-right:1px solid #e5e5e5;*/
position: absolute;
top: 0;
bottom: 0;
height: 100%;
left: 0;
width: 60px;
overflow: hidden;
-webkit-transition: width .05s linear;
transition: width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index: 1000;
}

.main-menu>ul {
margin: 7px 0;
}

.main-menu li {
position: relative;
display: block;
width: 250px;
}

.main-menu li>a {
position: relative;
display: table;
border-collapse: collapse;
border-spacing: 0;
color: #b38383;
font-family: 'Racing Sans One', cursive;
font-size: 14px;
text-decoration: none;
-webkit-transform: translateZ(0) scale(1,1);
-webkit-transition: all .1s linear;
transition: all .1s linear;
  
}

.main-menu .nav-icon {
position: relative;
display: table-cell;
width: 60px;
height: 36px;
text-align: center;
vertical-align: middle;
font-size: 18px;
}

.main-menu .nav-text {
position: relative;
display: table-cell;
vertical-align: middle;
width: 190px;
font-family: 'Racing Sans One', cursive;
}

.main-menu>ul.logout {
position: absolute;
left: 0;
bottom: 0;
}

.no-touch .scrollable.hover {
overflow-y: hidden;
}

.no-touch .scrollable.hover:hover {
overflow-y: auto;
overflow: visible;
}

a:hover,a:focus {
text-decoration: none;
}

nav {
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
-o-user-select:none;
user-select:none;
}

nav ul,nav li {
outline: 0;
margin: 0;
padding: 0;
}

.main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
.dashboard-page nav.dashboard-menu ul li.active a {
color:#fff;
background-color:#b38383;
}
.area {
float: left;
background: #fff;
width: 100%;
height: 100%;
}



</style>