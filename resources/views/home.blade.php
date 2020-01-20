@extends('layouts.master')
@section('container')


<!-- <div class="clouds"><img src="/imgs/clouds-19.png" style="width: 90em;"></div>-->


<div class="hero"><img src="imgs/alealitrouser.jpg">
    <div class="logo-hero"><img src="/imgs/logo_transparent.svg"></div>
    <div class="desc">
            <p>Sinta is a service allowing you to personalize your own trousers, which are created by designers.<br>
            Every 2 months, a new designer gets the chance to present their best and favourite trousers of their newest collection.<br>
            You are able to change either color, material, buttons or >the trousers' pocket. <br>
            All trousers are made for women aswell as for men.</p>
        </div>
</div>

       

<div class="generator">
        <h2 class="title3">How to use it</h2>

    <div class="instructions">

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
  <img src="/trousers_utility_new.svg" alt="trouser utility">
  </div>


<!-- how to use with gif preview -->

@endsection
