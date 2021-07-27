
<!DOCTYPE html>
<html>
<title>VIEW FLIGHTS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
body{
background-image: url("/project/images/clouds123.jpg");}
</style>
<body>


  <!-- Sidebar (hidden by default)
  <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()"
    class="w3-bar-item w3-button">Close Menu</a>
    <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
  </nav>

   Top menu -->
<?php
session_start();

$date = $_SESSION['depdate'];
$from = $_SESSION['from'];
$to = $_SESSION['to'];






echo "<div class='w3-top'>
  <div class='w3-white w3-xlarge' style='max-width:1200px;margin:auto'>
    <div class='w3-button w3-padding-16 w3-left onclick='w3_open()''>☰</div>
    <div class='w3-right w3-padding-16'>$date</div>
    <u><div class='w3-center w3-padding-16'>AVALIABLE FLIGHTS</div></u>
  </div>";
   echo "<br><strong><center>$from  -----> $to </center></strong></br>";
  ?>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">


  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="/project/images/indigo.jpg" alt="Sandwich" style="width:80%">
      <div>
        <button class="w3-button w3-black">
         <a href="booking2.php?id=INDIGO">Book</a>
      </button>
      </div>
      <h3>INDIGO</h3>
      <p>PRICE:4100</p>
      <p> CLASS : ECONOMY</p>
    </div>
    <div class="w3-quarter">
      <img src="/project/images/spicejet.jpg" alt="Steak" style="width:80%">
      <div>
        <button class="w3-button w3-black">
         <a href="booking2.php?id=SPICEJET">Book</a>
      </button>
      </div>
      <h3>SPICEJET</h3>
      <p>PRICE:4050</p>
      <p>CLASS : ECONOMY</p>
    </div>
    <div class="w3-quarter">
      <img src="/project/images/goair.jpg" alt="Cherries" style="width:100%">
      <div>
        <button class="w3-button w3-black">
         <a href="booking2.php?id=GO AIR">Book</a>
      </button>
      </div>

      <h3>GO AIR</h3>
      <p>PRICE:4200</p>
      <p>CLASS : ECONOMY</p>
    </div>
    <div class="w3-quarter">
      <img src="/project/images/airindia.jpg" alt="Pasta and Wine" style="width:110%">
      <div>
        <button class="w3-button w3-black">
         <a href="booking2.php?id=AIR INDIA">Book</a>
      </button>
      </div>
      <h3>AIR INDIA</h3>
      <p>PRICE:4500</p>
      <p>CLASS : ECONOMY</p>
    </div>
  </div>





  <!-- <hr id="about">


  <div class="w3-container w3-padding-32 w3-center">
    <h3>About Me, The Food Man</h3><br>

    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>

   Footer
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>

    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>
  </footer>

 End page content
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script> -->

</body>
</html>
