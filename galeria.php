<!doctype html>
<head>
  <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
    }
  </style>
      <link rel="stylesheet" type="text/css" href="css/sliderstyle.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
      <script src="js/jquery.slides.min.js"></script>


  <script>
    $(function(){
      $("#slides").slidesjs({
        // width: 1024,
        // height: 600,
        navigation: false,
     //    effect: {
     //  		fade: {
     //    		speed: 200,
     //      	// [number] Speed in milliseconds of the fade animation.
     //    		crossfade: true
     //     	 // [boolean] Cross-fade the transition.
     //  		}
    	// }
        play: {
      		active: true,
      		auto: true,
      		effect: "fade"
  		}
      });
    });
  </script>
</head>
<body>
    <div id="slides">
		<img src="imgs/m.jpg">
		<img src="imgs/n.jpg">
		<img src="imgs/b.jpg">
		<img src="imgs/v.jpg">
		<img src="imgs/c.jpg">
 	</div>
<!--     <a href="#" class="slidesjs-previous slidesjs-navigation"><img id="flechas" src="imgs/Izq.png"></a>
    <a href="#" class="slidesjs-next slidesjs-navigation"><img id="flechas" src="imgs/Der.png"></a> -->
</body>