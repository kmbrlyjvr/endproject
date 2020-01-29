

	var tl = new TimelineLite,
	  splitTextTitle = new SplitText("p span", {
		type: "chars"
	  }),
	  splitTextSub = new SplitText("h2 span", {
		type: "chars"
	  }),
	  lettersTitle = splitTextTitle.chars,
	  lettersSub = splitTextSub.chars;
  
	for (i = 0; i < lettersTitle.length; i++) {
	  tl.to(lettersTitle[i], .4, {
		ease: Power2.easeOut,
		y: 80
	  }, 0.3 + i * 0.06);
	}
  
	for (i = 0; i < lettersSub.length; i++) {
	  var temp = lettersSub.length - 1 - i;
	  tl.to(lettersSub[temp], .4, {
		ease: Power2.easeOut,
		y: -160
	  }, 0.8 - temp * 0.06);
	}
 



var sw = window.innerWidth;
var sh = window.innerHeight;
var tlInfo, tlSlideshow;

window.addEventListener("resize", onScreenResize);

function onScreenResize(){
	sw = window.innerWidth;
	sh = window.innerHeight;
	animate();
}

function showInfos(cls, delay){
	var targetClass = cls;
	var targetLabels = cls + " .label";
	var targetInfoFields = cls + " .info-field";
	tlInfo = new TimelineMax({delay:delay});
	tlInfo.set(targetLabels, {y:40});
	tlInfo.add("start");
	tlInfo.from(targetInfoFields, 1, { y:400, ease:Power4.easeOut}, "start");
	tlInfo.staggerFrom(targetInfoFields, 1, {x:0, width:0, paddingRight:0, paddingLeft:0, ease:Power4.easeInOut},.1, "start+=1");
	tlInfo.staggerTo(targetLabels, 1, {y:0, ease:Power4.easeInOut},.1, "start+=1.1");

}

showInfos(".move", 1);
animate(3);

function animate(delay){
	if (tlSlideshow) tlSlideshow.kill();
	tlSlideshow = new TimelineMax({repeat:-1, repeatDelay:1, delay:delay});
	tlSlideshow.set(".slide2", {width: 0, scale:1.5});
	tlSlideshow.set(".slide1", {scale:1.2});
	tlSlideshow.add("start");
	tlSlideshow.to(".slide2", 2.5, {scale:1.2, ease:Power4.easeInOut}, "start");
	tlSlideshow.to(".slide2", 2, {width:"100%", ease:Power4.easeInOut}, "start");
	tlSlideshow.to(".slide1", 2, {width:"0%", x:480, scale:1, ease:Power4.easeInOut}, "start");
	tlSlideshow.add("step2");
	tlSlideshow.set(".slide1", {width: 0, x:0, scale:1.5});
	tlSlideshow.to(".slide1", 2.5, {scale:1.2, ease:Power4.easeInOut}, "step2+=1");
	tlSlideshow.to(".slide1", 2, {width:"100%", ease:Power4.easeInOut}, "step2+=1");
	tlSlideshow.to(".slide2", 2, {width:"0%", x:480, scale:1, ease:Power4.easeInOut}, "step2+=1");
	var duration = .8;
}

