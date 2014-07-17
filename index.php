<!DOCTYPE>

<html>

<head>
	<title>NPK</title>
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
        navigation: false,
        play: {
      		active: true,
      		auto: true,
      		effect: "fade"
  		}
      });
    });
  </script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.each($('.idiomas'), function(i, v){
				$(v).click(function(){
					window.location.href = 'principal.php';
				})
			})
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
 	<div id="contenedor">
	 	<div id="intro">
			<div id="logo1">
			</div>
			<div id="lan" class="idiomas">
				<a id="ES" class="idiomas" href="/principal.php"></a>
				<a id="IN" class="idiomas" href="/principal.php"></a>
			</div>
		</div>
	</div>
</body>

</html>