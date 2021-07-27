<?php error_reporting(E_ALL^E_NOTICE);?>
<?php
session_start();

$con= mysqli_connect('localhost','root','','youtube');

         if(!$con)
         {
             die("Connection failed: " . mysqli_connect_error());
         }


mysqli_select_db($con,'youtube');
$adult=$_POST['Adult'];
$age=$_POST['Age'];
$id=$_POST['id'];
$kid=$_POST['Kid'];

$card_no=$_POST['card_no'];
$exp_month=$_POST['exp_month'];
$exp_year=$_POST['exp_year'];
$cvv=$_POST['cvv'];
unset($unid);
$name=$_SESSION['name'];
$unid=$_SESSION['id'];
$_SESSION['card_no']=$card_no;


mysqli_select_db($con,'youtube');

   $in=" INSERT into booking (adult,age,id,kid,name) values('$adult','$age','$id','$kid','$name')";
   $i=" INSERT into card  (card_no,exp_month,exp_year,cvv) values('$card_no','$exp_month','$exp_year','$cvv')";


     echo "<script>window.location='booking3.php'</script>";








    mysqli_query($con,$in);
    mysqli_query($con,$i);





mysqli_close($con);

?>
