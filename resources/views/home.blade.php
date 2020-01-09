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

       

    <section class="home-3">
        <h3>How to <br>use it</h3>
    </div>

            <div class="how">
                <div class="left">
                     <p>1. Choose Trouser</p>
                     <img style="width: 45vh;"src="imgs/howto_trouserbw.svg">
                </div>
                <div class="right">
                        <p>2. Trouser / Pocket / Logo Color</p>
                        <img style="width: 50vh;"src="imgs/howto_customizetrouser.svg">
   
                     <p>5. Select Size</p>
                     <p>6. Order and rock it</p>
                     <img style="width: 50vh;"src="imgs/howto_buy.svg">
                </div>
            </div>
      </section>


<div class="homecontainer">
    <h2>Designer of the month</h2>

  <div class="home-inner">
    <img src="/imgs/ryerson_logo.png" style="width: 30em;">
    <a href="{{ route('items.index') }}" class="button">customize</a>
  </div>
  <div class="box">
  <img src="/trousers_utility_new.svg" alt="trouser utility">
  </div>


<!-- how to use with gif preview -->

@endsection
