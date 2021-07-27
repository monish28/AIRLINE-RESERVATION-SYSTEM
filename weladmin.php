<!DOCTYPE html>
<html>
<title>WELCOME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
body{
  background-image: url("images/ad3.jpg");
  margin-top: 90px;
      margin-bottom: 80px;
      margin-right: 30px;
      margin-left: 30px;
      background-size: 100%;
      background-attachment: fixed;
  }

</style>
<body>
<?php
session_start();
$empname = $_SESSION['empname'];

echo "<div class='w3-top'>
  <div class='w3-red w3-xlarge' style='max-width:1200px;margin:auto'>
    <div class='w3-button w3-padding-16 w3-left onclick='w3_open()''>☰</div>
    <div class='w3-right w3-padding-16'></div>
    <div class='w3-center w3-padding-16'>ADMIN  DASHBOARD</div>
  </div>";
  echo "<br></br>";
  echo  "<u><center><bold><h2><strong>welcome $empname</h2></bold></center></u>";



 ?>

  <center>

  <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:200px;"></center>




    <div class="w3-row-padding w3-padding-16  w3-center" id="food">
      <div class="w3-quarter ">
        <img src="/project/images/plane0.jpg "alt="Sandwich" style="width:90%">
        <div>
          <button class="w3-button w3-black">

           <a href="adins.php?id=">INSERT FLIGHT</a>
        </button>
        </div>
      </div>


        <div class="w3-quarter">

        <img src="/project/images/plane01.jpg" alt="Steak" style="width:100%">

        <div>
          <button class="w3-button w3-black">
           <a href="adins.php?id=SPICEJET">UPDATE FLIGHT</a>
        </button>
        </div>
      </div>
      <div class="w3-quarter ">
        <img src="/project/images/plane02.jpg" alt="Cherries" style="width:90%">
        <div>
          <button class="w3-button w3-black">
           <a href="addel.php?id=GO AIR">DELETE FLIGHT</a>
        </button>
        </div>

      </div>
  </body>
  </html>
