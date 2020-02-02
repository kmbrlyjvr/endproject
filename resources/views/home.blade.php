@extends('layouts.master')
@section('container')


<div class="hero"><img src="designers/bg2.jpg" alt="girl wearing green trousers">
    <div class="desc">
        <p><span class="highlightnude">Customize your Trousers with Sinta</span></p>
        <p><span class="highlightnude">New chosen Designer every 2 months</span></p>
    </div> 
    <div class="this">
        <p><span class="highlightnude">from this</span></p>
    </div>
    <div class="this2">
            <p><span class="highlightnude">to this</span></p>
        </div>
</div>

<!--<div class="logo-hero"><img src="/imgs/logo_colored.svg" alt="logo sinta"></div>-->

<div class="hero2"><img  src="designers/alealitrouser.jpg" alt="illustration of green trousers"></div>


<div class="desc1">
        <p><span class="highlightnude">Sinta is a service allowing you to personalize your own trousers, which are created by designers.<br>
        Every 2 months, a new designer gets the chance to present their best and favourite trousers of their newest collection.<br>
        You are able to change either color, material, buttons or the trousers' pocket. <br>
        All trousers are made for women as well as for men.</span></p>
</div>
       
<div class="generator">
        <h2 class="title3"><span>How to use it</span></h2>

    <div class="instructions">


                <p class="title1">1. Sign Up / Log in</p>
                <p class="title1">2. Choose Trouser</p>
                <img style="width:45vh;" src="imgs/howto_trouserbw.svg" alt="illustration trouser">
                <p class="title1">3. Trouser / Pocket / Logo Color</p>
                <img style="width: 50vh;" src="imgs/howto_customizetrouser.svg" alt="illustration trouser">
                <p class="title1">4. Select Size</p>
                <p class="title1">5. Order and rock it</p>
                <img style="width: 50vh;" src="imgs/howto_buy.svg" alt="illustration trouser">
    </div>
</div>


<div class="homecontainer">
    <h2 class="title">Designer of the month</h2>

  <div class="home-inner">
    <img src="/imgs/ryerson_logo.png" alt="ryerson logo" style="width: 30em;">
    <a href="{{ route('items.index') }}" class="button">customize</a>
  </div>
  <div class="box">
  </div>
</div>


  
@endsection

