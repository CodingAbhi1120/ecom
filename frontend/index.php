<?php
require('top.php');
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link rel="stylesheet" href="css_folder_for_frent/homestyle.css?v=<?=$version?>">
</head>
<body>
  
  <div class="container">
<div class="content">
         <img src="image/shopping1.jpeg" alt="shopping">
        <div class="box">
          <ul>
            <li>Super value deals</li>
            <li>On all products</li>
            <li id="shop-logo">Shop now</li>
          </ul>
        </div>
      </div>
      </div>
    
      <section id="feature">
        <div class="boxs">
          <img src="image/free.jpeg" alt="free shipping">
        </div>
        <div class="boxs-2">
          <img src="image/available.jpeg" alt="24/7 available">
        </div>
        <div class="boxs-3">
          <img src="image/save.jpeg" alt="save money">
        </div>
      </section>
      
      <section id="fun">
        <div class="con">
          <img src="image/shopping2.jpeg" alt="">
         <h1 style="width:43%; margin-left:31%;font-size: 12vh;margin-top: -40%;opacity: 0.6;background: cornsilk;">Fashion Trends</h1>
         <h2 style="width: 68%;font-size: 4.5em;margin-top: 33%; margin-left: 18%;background: darkgrey;">Gets our latest 2024 collection</h2>
         <span class="hh3"><h3>30% off on New Arrival</h3></span>
         <span class="offerlogo"><a href="#"><h3>Shop now for exclusive offer</h3></a></span>
        </div>
      </section>

      <section class="extra">

      </section>
       <section id="main-pro-container">
        
      <?php
      $limit = 4;
      $get_product = get_product($conn,'');
      foreach($get_product as $list){

      
      echo"<div class='faltu' style='margin-top: -29%;'>
      <div class='container-pro'>
            <div class='prot'>
                <a href='product.php?id=". $list["id"]."'>
                    <img src='".PRODUCT_IMAGE_SITE_PATH.$list["image"]."' alt=''>
                </a>
                <div class='box1'>
                <span class='boxing _pr'> <a href='#'>". $list["name"]."</a></span>
                <div class='pr1'>
                    <span class='boxing2 _pr'><b>&#8377;<del>". $list["mrp"]."</del></b></span>        
                   <span class=' _pr'><b>&#8377;". $list["price"]."</b></span></div>  </div>      
        </div>  
        </div>
        </div>
        ";}?>
      </section>
      <?php
require('footer.php');
?>
</body>
</html>

