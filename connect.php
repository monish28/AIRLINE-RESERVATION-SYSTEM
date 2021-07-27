<?php
session_start();
$con=mysqli_connect('localhost','root','','youtube');
if(!$con){
  echo  " connection error";
  }
  mysqli_select_db($con,'youtube');


  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql=" SELECT * FROM register WHERE username='$username'AND password='$password'";
  $result=mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);
  flush();
  if($num==1){
    $_SESSION['name']=$username;
    echo "<script>window.location='booking.php'</script>";
  }else{
    echo "user not registered";
  }


?>
