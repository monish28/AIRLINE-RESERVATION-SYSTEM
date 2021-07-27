<?php

session_start();
$con= mysqli_connect('localhost','root','','youtube');

mysqli_select_db($con,'youtube');



    $i=$_SESSION['image'];
    $u=$_SESSION['unique_id'];
    $name=$_SESSION['name'];
  $v=" SELECT Cost FROM requested_vechile WHERE Unique_id='$u' ORDER BY Order_id DESC LIMIT 1";
       $result=mysqli_query($con,$v);
      $row=mysqli_fetch_assoc($result);
      $cost= $row['Cost'];

  $detail="SELECT * FROM customer WHERE Name='$name'  ";
     $res=mysqli_query($con,$detail);
     $row1=mysqli_fetch_assoc($res);

    $card="SELECT * FROM card_details WHERE cardname='$name'ORDER BY card_id DESC LIMIT 1";
    $res1=mysqli_query($con,$card);
    $row2=mysqli_fetch_assoc($res1);

    $day="SELECT * FROM booking WHERE uname='$name'ORDER BY Book_id DESC LIMIT 1";
    $res2=mysqli_query($con,$day);
    $row3=mysqli_fetch_assoc($res2);
?>
