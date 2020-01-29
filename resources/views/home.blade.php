@extends('layouts.master')
@section('container')

    
<div class="hero"><img src="imgs/alealitrouser.jpg">
    <div class="logo-hero"><img src="/imgs/logo_transparent.svg"></div>
    <div class="desc">
            <p><span>Sinta is a service allowing you to personalize your own trousers, which are created by designers.<br>
            Every 2 months, a new designer gets the chance to present their best and favourite trousers of their newest collection.<br>
            You are able to change either color, material, buttons or >the trousers' pocket. <br>
            All trousers are made for women aswell as for men.</span></p>
    </div>
</div>

<div class="herotrouser"><img  style="width:300px;" src="imgs/alealitrouserarts-02.svg"></div>


       

<div class="generator">


        <h2 class="title3"><span>How to use it</span></h2>

    <div class="instructions">

            <div class="anim-info move">
                    <div class="info-field anim-name">
                        <div class="label">HOW TO USE IT</div>
                    </div>
                </div>

            <p><span class="highlightnude">1. Choose Trouser</span></p>
            <img style="width: 45vh;"src="imgs/howto_trouserbw.svg">
            <p><span class="highlightnude">2. Trouser / Pocket / Logo Color</span></p>
            <img style="width: 50vh;"src="imgs/howto_customizetrouser.svg">
            <p><span class="highlightnude">5. Select Size</span></p>
            <p><span class="highlightnude">6. Order and rock it</span></p>
            <img style="width: 50vh;"src="imgs/howto_buy.svg">
    </div>
</div>


<div class="homecontainer">
    <h2 class="title">Designer of the month</h2>

  <div class="home-inner">
    <img src="/imgs/ryerson_logo.png" style="width: 30em;">
    <a href="{{ route('items.index') }}" class="button">customize</a>
  </div>
  <div class="box">
  </div>

@endsection

