<!doctype html>
<html>
<head>
<title>Welcome Admin</title>
<style>
    body{
    background-image: url("/project/images/clouds123.jpg");
       margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-size: 100%;
    background-attachment: fixed;
    color: #261A15;
    font-family: 'Yantramanav', sans-serif;;
    font-size: 100%;

        }
            h1 {
   color: red;}
        h3 {
    color: rgb(44,62,80);
    font-family: verdana;
    font-size: 100%;
}
         a {
    color: rgb(102, 51, 153);
}
fieldset {
  background-color: black;
  color: white;
  opacity: 0.8;
}
fieldset {
  background-color: black;
  color: white;
  opacity: 0.8;
}
</style>
<link rel="stylesheet" type="text/css" href="emp.css">
</head>
<body>
<center><h1><u> AIRLINE RESERVATION SYSTEM </u></h1></center>
<br><h2>Welcome</h2>

<div class="right"><button class="button">
	<a href="logout.php"  style="color:black">Logout</a></button>
</div><br><br><br>
<form action="view.php" method="POST">
<legend>
    <fieldset>
	<center>
	<br>
	<h2>Enter Flight Details: </h2><br>
<b> FROM:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</b><input type="text" name="from1"><br><br>
<b> DATE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="date1"><br><br>
<b> DESTINATION:&nbsp;</b><input type="text" name="to1"><br><br>
<b> PLANE NAME:&nbsp;</b><input type="text" name="plane_name"><br><br>
<b> PRICE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><input type="text" name="price"><br><br>
<tr>
    <td>
    <td>
      <b>CLASS:&nbsp;&nbsp;&nbsp;</b>
     <select name="select class" required>
      <option selected hidden value="">SELECT CLASS</option>
      <option value="economy">economy</option>
      <option value="premium economy">premium economy</option>

     </select>

    </td>
   </tr>

&emsp; &emsp; &emsp; &emsp; &emsp;


	<div class="right">
	<br><center><button class="w3-button w3-dark-grey" type="submit"> INSERT FLIGHT</button></center></br>
</div><br>
</form>
</body>
</html>
