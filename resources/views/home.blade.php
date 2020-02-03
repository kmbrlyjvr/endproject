@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <div class="herocontainer">
        <div class="hero"><img src="designers/bg2.jpg" alt="girl wearing green trousers">
        <div class="desc">
            <p><span class="highlightnude">Customize your Trousers with Sinta</span></p>
            <p><span class="highlightnude">New chosen Designer every 2 months</span></p>
        </div> 
    </div>
<!--<div class="logo-hero"><img src="/imgs/logo_colored.svg" alt="logo sinta"></div>-->
    <div class="thiscontainer">
        <div class="this">FROM THIS</div>
        <div class="herotrouser"><img src="designers/alealitrouserarts.svg" alt="grene illustrated trouser"/></div>
        <div class="this2">TO THIS</div>
        <div class="hero2"><img  src="designers/alealitrouser1.jpg" alt="illustration of green trousers"></div>
        <h2 class="title"><span class="highlightnude">ALEALI MAY</span></h2>
    </div>

        <div class="generator">
                <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>

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
        <div class="designer">
            <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>
            <h1>designer 2020</h1>
                <div class="designerlogo"><img src="designers/ryerson_logo.png"  alt="ryerson logo" /></div>
                <img src="designers/ryerson.jpg" alt="designer people"/>
                <p class="title0"><a href="{{ route('items.index') }}"><span class="highlightnude">see their work and customize</span></a></p>
            </div>
    </div>
</div>

@endsection

