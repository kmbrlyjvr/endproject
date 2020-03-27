@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <div class="herocontainer">
        <section class="hero fadeIn"><img src="designers/alealitrouserportrait.jpg" alt="girl wearing green trousers">
            <div class="desc">
                <p><span class="highlightnude">Customize your Trousers with Sinta</span></p>
            <!--   <p><span class="highlightnude">New chosen Designer every 2 months</span></p> -->
            </div>
        </section>
<!--<div class="logo-hero"><img src="/imgs/logo_colored.svg" alt="logo sinta"></div>-->
    <section class="thiscontainer outer">
        <p class="this inner">FROM THIS</p>
        <div class="herotrouser fadeIn outer"><img src="designers/alealitrouserarts.svg" alt="grene illustrated trouser"/></div>
        
        <p class="this2 inner">TO THIS</p>
        <div class="hero2 fadeIn outer"><img  src="designers/alealitrouser1.jpg" alt="illustration of green trousers"></div>
        <h2 class="title fadeIn outer"><span class="highlightnude">ALEALI MAY</span></h2>
    </section>

        <section class="generator outer">
                <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>

                <h2 class="title3 outer"><span>How to use it</span></h2>
            <div class="instructions">
                        <p class="title1 outer">1. Sign Up / Log in</p>
                        <p class="title1 outer">2. Choose Trouser</p>
                        <img class="inner" style="width:45vh;" src="imgs/howto_trouserbw.svg" alt="illustration trouser">
                        <p class="title1 outer">3. Trouser / Pocket / Logo Color</p>
                        <img class="inner" style="width: 50vh;" src="imgs/howto_customizetrouser.svg" alt="illustration trouser">
                        <p class="title1 outer">4. Select Size</p>
                        <p class="title1 outer">5. Order and rock it</p>
                        <img class="inner" style="width: 50vh;" src="imgs/howto_buy.svg" alt="illustration trouser">
            </div>
        </section>
        <section class="designer outer">
            <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>
            <h1 class="outer">designer 2020</h1>
                <div class="designerlogo  inner"><img src="designers/ryerson_logo.png"  alt="ryerson logo" /></div>
                <img class="inner" src="designers/ryerson.jpg" alt="designer people"/>
                <p class="title0 inner"><a href="{{ route('items.index') }}"><span class="highlightnude">see their work and customize</span></a></p>
        </section>
    </div>
</div>

@endsection