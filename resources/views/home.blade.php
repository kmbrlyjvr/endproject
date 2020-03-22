@extends('layouts.master')
@section('container')

<div class="defaultcontainer">
    <div class="herocontainer">
        <div class="hero fadeIn"><img src="designers/alealitrouserportrait.jpg" alt="girl wearing green trousers">
        <div class="desc">
            <p><span class="highlightnude">Customize your Trousers with Sinta</span></p>
          <!--   <p><span class="highlightnude">New chosen Designer every 2 months</span></p> -->
        </div> 
    </div>
<!--<div class="logo-hero"><img src="/imgs/logo_colored.svg" alt="logo sinta"></div>-->
    <div class="thiscontainer">
        <p class="this lazyload">FROM THIS</p>
        <div class="herotrouser fadeIn"><img src="designers/alealitrouserarts.svg" alt="grene illustrated trouser"/></div>
        <p class="this2 fadeIn">TO THIS</p>
        <div class="hero2 fadeIn"><img  src="designers/alealitrouser1.jpg" alt="illustration of green trousers"></div>
        <h2 class="title fadeIn"><span class="highlightnude">ALEALI MAY</span></h2>
    </div>

        <div class="generator">
                <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>

                <h2 class="title3 fadeIn"><span>How to use it</span></h2>
            <div class="instructions">
                        <p class="title1 fadeIn">1. Sign Up / Log in</p>
                        <p class="title1 fadeIn">2. Choose Trouser</p>
                        <img class="fadeIn" style="width:45vh;" src="imgs/howto_trouserbw.svg" alt="illustration trouser">
                        <p class="title1 fadeIn">3. Trouser / Pocket / Logo Color</p>
                        <img class="fadeIn" style="width: 50vh;" src="imgs/howto_customizetrouser.svg" alt="illustration trouser">
                        <p class="title1 fadeIn">4. Select Size</p>
                        <p class="title1 fadeIn">5. Order and rock it</p>
                        <img class="fadeIn" style="width: 50vh;" src="imgs/howto_buy.svg" alt="illustration trouser">
            </div>
        </div>
        <div class="designer fadeIn">
            <p style="color:var(--nude);">- - - - - - - - - - - - - -</p>
            <h1 class="fadeIn">designer 2020</h1>
                <div class="designerlogo fadeIn"><img src="designers/ryerson_logo.png"  alt="ryerson logo" /></div>
                <img class="fadeIn" src="designers/ryerson.jpg" alt="designer people"/>
                <p class="title0 fadeIn"><a href="{{ route('items.index') }}"><span class="highlightnude">see their work and customize</span></a></p>
            </div>
    </div>
</div>

@endsection

    <!--   function showImages(el) {
            var windowHeight = jQuery( window ).height();
            $(el).each(function(){
                var thisPos = $(this).offset().top;
    
                var topOfWindow = $(window).scrollTop();
                if (topOfWindow + windowHeight - 200 > thisPos ) {
                    $(this).addClass("fadeIn");
                }
            });
        }
    
        // if the image in the window of browser when the page is loaded, show that image
        $(document).ready(function(){
                showImages('.star');
        });
    
        // if the image in the window of browser when scrolling the page, show that image
        $(window).scroll(function() {
                showImages('.star');
        });

        #####

const images = document.querySelectorAll("[src]");

        function preloadimage(img) {
            const src = img.getAttribute("src");
            
            if(!src) {
                return;
            }

            img.src = src;
        }

        const imgOptions = {
            threshold: 0,
            rootMargin: "0px 0px 0px 0px" 
        };


        const imgObserver = new IntersectionObserver((entries,
        imgObserver) => {
            entries.forEach(entry => {
                if(!entry.isIntersecting) {
                    return;
                } else {
                    preloadimage(entry.target);
                    imgObserver.unobserve(entry.target);
                }
            });
        }, imgOptions);

        images.forEach(image => {
            imgObserver.observe(image);
        });*/
    -->