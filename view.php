<?php error_reporting(E_ALL^E_NOTICE);?>
<?php
$con= mysqli_connect('localhost','root','','youtube');

         if(!$con)
         {
             die("Connection failed: " . mysqli_connect_error());
         }


mysqli_select_db($con,'youtube');
$from=$_POST['from1'];
$to=$_POST['to1'];
$date=$_POST['date1'];

$plane_name=$_POST['plane_name'];
$price=$_POST['price'];
$select_class=$_POST['select_class'];



mysqli_select_db($con,'youtube');

   $ins=" INSERT into plane (from1,to1,date1) values('$from','$to','$date')";
   $in =" INSERT into viewplane (plane_name,price,class) values('$plane_name','$price','$select_class')";



      echo "<center><strong>FLIGHT DETAILS UPDATED SUCCESFULLY</strong></center>";
      echo "<center><br><a href=admin1.php>BACK</a></br></center>";





mysqli_query($con,$ins);
mysqli_query($con,$in);
mysqli_close($con);

?>
