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

   $ins=" DELETE FROM plane WHERE values('$from','$to','$date')";
   $in =" DELETE FROM viewplane WHERE(plane_name,price,class) values('$plane_name','$price','$select_class')";

   mysqli_query($con,$ins);
   mysqli_query($con,$in);
   mysqli_close($con);

      echo "<center><strong>FLIGHT DETAILS UPDATED SUCCESFULLY</strong></center>";
      echo "<center><br><a href=weladmin.php>BACK</a></br></center>";






?>
