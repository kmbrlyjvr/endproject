window.addEventListener("load", function() {

   /* var tl = new TimelineLite();
  
      tl.fromTo(".fade", 0.60, { y: '40px'}, { y: 0, opacity: 1, ease: Power2.EaseInOut });*/
  
    var ctrl = new ScrollMagic.Controller();
  
  // Create scenes in jQuery each() loop
  $("section").each(function(i) {

    var outer = $(this).find(".outer");
    var inner = $(this).find(".inner");

    var tl = new TimelineMax({pause:true});
    
      tl.fromTo(outer, 0.10, {y: '40px', opacity: 0}, {y: 0, opacity: 1, ease: Power2.EaseInOut })
      tl.fromTo(inner, 0.10, {y: '60px', opacity: 0}, {y: 0, opacity: 1, ease: Power2.EaseInOut })

    new ScrollMagic.Scene({
        triggerElement: this,
        triggerHook: 0.15
    })
  
        .setTween(tl)
        .addTo(ctrl)
  
  });
  
  
  /*
  console.clear();
  
  let lastTime;
  
  function fadeIn() {
    lastTime = Date.now();
    
    const objsToFadeIn = [];
    document.querySelectorAll('.card:not(.loaded)').forEach(card => {
      if(card.offsetTop < scrollY + innerHeight) {
        objsToFadeIn.push(card);
      }
    });
    
    if(objsToFadeIn.length) {
      gsap.set(objsToFadeIn, {className: "card mr-3 mb-3 loaded"});
      gsap.to(objsToFadeIn, {autoAlpha: 1, stagger: 0.1});
    }
  }
  
  function onScroll() {
    // If more than 50ms has passed since last fade, fade in
    if(Date.now() - 50 > lastTime) {
      fadeIn();
    }
  }
  
  function init() {
    lastTime = Date.now();
    
    document.addEventListener("scroll", onScroll);
    
    fadeIn();
  }
  
  init();*/
  
  });