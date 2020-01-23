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
            <h2>Userslist</h2>

<div class="defaultcontainer">
        <div class="row">
                <form action="{{ route('profile.update', $user->id) }}" method="put" autocomplete="off">
                    @csrf


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>


                        <div class="form-group">
                                <div class="form-label-group2">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>


					<div class="form-group">
                            <div class="form-label-group2">
                                <label>ZIP Code</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>

                    
                        <div class="form-group">
								<div class="form-label-grou2">
									<label for="country">Select Country</label>
									<select name="country" id="country">
											<option value="Austria">Austria</option>
											<option value="Belgium">Belgium</option>
											<option value="Canada">Canada</option>
											<option value="Denmark">Denmark</option>
											<option value="Norway">Norway</option>
											<option value="Philippines">Philippines</option>
											<option value="Sweden">Sweden</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="United States">United States</option>
									</select>
								</div>
							</div>
  
                <button class="button" type="submit" class="btn btn-primary">update</button>
        </div>
    </div>

</div>

</body>
</html>








<style>
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