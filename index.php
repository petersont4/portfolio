<?php
  include("assets/include.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Tim Peterson Portfolio</title>
<link href="assets/css/main.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
</head>

<body>
<?php include_once("$root/assets/navbar.php"); //Imports navigation bar ?>
<div class="parallax" id="header">WELCOME</div>
<div class="parallaxText">
  <p>Welcome to my portfolio site.  Look around and let me know what you think!</p>  
</div>
<div class="parallax" id="photoParallax">PHOTOGRAPHY</div>
  <div class="photoBar"></div>
<div class="parallax" id="flyerParallax">FLYERS</div>
  <div class="flyerBar"></div>
<div class="parallax" id="websitesParallax">WEBSITES</div>
  
<script>
  // When the user scrolls down 20px from the top of the document, slide down the navbar
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("navbar").style.top = "0";
      } else {
          document.getElementById("navbar").style.top = "-50px";
      }
  }
</script>


</body>
</html>
