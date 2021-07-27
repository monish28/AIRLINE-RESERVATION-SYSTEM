<?php
session_start();
$con=mysqli_connect('localhost','root','','youtube');
if(!$con){
  echo  "no connection ";
}
  mysqli_select_db($con,'youtube');
  if(isset($_POST['empname'])){

  $empname=$_POST['empname'];
}

$_SESSION['empname']=$empname;
  $empname=$_POST['empname'];
  $emppass=$_POST['emppass'];
if(!empty($empname)and !empty($emppass)){
  $sql=" SELECT * FROM admin Where empname='$empname' AND emppass='$emppass'";
  $result=mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);

  flush();
  if($num==1){
    echo "<script>window.location='weladmin.php'</script>";
  }else{
    echo "admin details wrong";
  }
}
?>
