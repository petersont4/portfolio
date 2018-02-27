<?php
  include("../assets/include.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Photography</title>
  <link href="../assets/css/main.css" rel="stylesheet" type="text/css">
  <style>
    #navbar{
      top: 0;
    }
  </style>
</head>

<body>
<?php 
  include_once("$root/assets/navbar.php"); //Imports navigation bar 
?> 
<div class="gallery">
  <div class="galleryColumn">
    <img src="uploads/20180219-_DSC6923.jpg" class="regularPhoto" alt=""/> 
    <img src="uploads/20180219-_DSC7086.jpg" class="regularPhoto" alt=""/>
    <img src="uploads/20180219-_DSC7133.jpg" class="regularPhoto" alt=""/>
  </div>
  <div class="galleryColumn">
    <img src="uploads/20180219-_DSC7137.jpg" class="regularPhoto" alt=""/>
    <img src="uploads/20180219-_DSC7172.jpg" class="regularPhoto" alt=""/>
    <img src="uploads/20180219-_DSC7179.jpg" class="regularPhoto" alt=""/>
  </div>
  <div class="galleryColumn">
    <img src="uploads/20180219-_DSC7253.jpg" class="regularPhoto" alt=""/>
    <img src="uploads/20180219-_DSC7263.jpg" class="regularPhoto" alt=""/>
  </div>
</div>
</body>
</html>
