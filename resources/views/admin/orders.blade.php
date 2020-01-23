<!doctype html>
<html lang="de">
<head>
    <title>@yield('title') Sinta</title>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('head')
</head>

 <body>
    <div class="area">  
            <h2>Orders</h2>

<div class="defaultcontainer">
        <div class="tablecontainer">

                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Size</th>
                            <th>Address</th>
                            <th>Total (+ shipping)</th>
                            <th>Payment</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
            
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            @foreach($users as $user)
                            <td>{{ $order->user_name }}</td>
                            <td>{{ json_decode($order->config)->type }}</td>
                            <td>{{ json_decode($order->config)->size }}</td>
                            <td>{{ $user->address }} {{ $user->zip }} {{ $user->country}}</td>
                            <td>{{ $order->payment }}</td>
                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                            <td>{{ $order->status }}</td>
                            @endforeach
                            <td><a href="">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                    <a href="{{ route('admin.index') }}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Admin
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="{{ route('admin.users') }}">
                    <!--   <i class="fa fa-list fa-2x"></i> -->
                    <i class="fa fa-user fa-2x"></i>                        
                        <span class="nav-text">
                            Userslist
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="{{ route('admin.orders') }}">
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
 </body>
</html>

<style>
 
.defaultcontainer {
  position: absolute;
  margin: 60px 0;
  width: 100%;
}

.tablecontainer {
  grid-column-start: 6;
  font-family: var(--main-font);
  color: #51545f;
  font-size: 15px;
  min-width: 200px;
  padding: 100px;
  text-align: center;
  display: flex;
  justify-content: center;
}

table{
  border-collapse: collapse;

}
 th {
  color: var(--nude);
}

td:first-child {
  color:var(--main-color);

}

th {
  padding: 15px;
  text-align: left;
}

td {
  padding: 15px;
  text-align: left;

}

td:nth-child(1){
  border-bottom: 1px solid var(--main-txt-color);
}

@import url('https://fonts.googleapis.com/css?family=Lekton&display=swap');
@import url('https://fonts.googleapis.com/css?family=Racing+Sans+One&display=swap');
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
}


:root {
  --main: #f1e1d8;
  --nude: #b38383;
  --black: #231f20;
  --main-font: 'Lekton', sans-serif;
  --sec-font: 'Racing Sans One', cursive;  
}

.title2 {
  font-family: 'Racing Sans One', cursive;
  color: #b38383; 
  font-size: 3em;
  text-transform: uppercase;
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
    display: flex;
    justify-content: center;
    margin-top: 10vh;
    background: #fff;
    width: 100%;
    height: 100%;
}

</style>