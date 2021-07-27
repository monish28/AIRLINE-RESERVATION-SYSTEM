<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<link href='cars.css' rel='stylesheet'>


<?php

session_start();
$con= mysqli_connect('localhost','root','','youtube');

mysqli_select_db($con,'youtube');

  $card_no = $_SESSION['card_no'];

    $c=$_SESSION['id'];

    $name=$_SESSION['name'];


     $date = $_SESSION['depdate'];
     $from = $_SESSION['from'];
     $to = $_SESSION['to'];


         $detail="SELECT * FROM booking WHERE Name='$name'  ";
            $res=mysqli_query($con,$detail);
            $row1=mysqli_fetch_assoc($res);

            $plane="SELECT * FROM viewplane WHERE plane_name='$c'";
            $res1=mysqli_query($con,$plane);
            $row2=mysqli_fetch_assoc($res1);

            $i=$row2['image'];


?>


<body>
<div id="wrap">
<div id="accordian">

<div class="step" id="step2">
<div class="number">
  <span><i class="fa fa-plane"></i></span>
        </div>
        <div>
  <h1>Finalize Order</h1>
  </div>
  <div class="modify">
  <i class="fa fa-plus-circle"></i>
  </div>
  </div>
  <div class="content" id="final_products">
  <div class="left" id="ordered">
  <div class="products">
  <div class="product_image">
              <?php

  echo"<img src=$i id='imgg'>";
              ?>
            </div>
  <div class="product_details">

  <span class="product_name">PLANE:<?php   echo $c; ?></span>

  <span class="quantity">NO OF PERSONS :<?php echo $row1['adult']; ?></span>
  <span class="price">PRICE:<?php echo $row2['price']; ?></span>
  </div>
  </div>
  <div class="totals">
  <span class="subtitle">Subtotal <span id="sub_price"><?php $total= $row1['adult']*$row2['price'];
            echo $total;
              ?></span></span>
  <span class="subtitle">Tax <span id="sub_tax"><?php
                        $tax=$total*0.12;
                        echo $tax;
             ?></span></span>

  </div>
  <div class="final">
  <span class="title">Total <span id="calculated_total">
              <?php
                $price=$total+$tax;
                echo $price;?></span></span>
  </div>
  </div>
  <div class="right" id="reviewed">
  <div class="billing">
  <span class="title">BILLER NAME:</span>
  <div class="address_reviewed">
  <span class="name"><?php echo "<strong>$name</strong>"; ?></span>
</div>
</div>
<div class="date">
<span class="title">DATE OF TRAVEL:</span>
<div class="address_reviewed">
<span class="name"><?php echo "<strong>$date</strong>"; ?></span>
  </div>
  </div>
  <div class="shipping">
  <span class="title">FROM and TO:</span>
  <div class="address_reviewed">
  <span class="name"><?php echo "<strong>$from------>$to</strong>"; ?></span>
  </div>
  </div>
  <div class="payment">
  <span class="title">PAYMENT:</span>
  <div class="payment_reviewed">
  <span class="method">VISA</span>
  <span class="number_hidden"><?php

 $masked =  str_pad(substr($card_no, -4), strlen($card_no), '*', STR_PAD_LEFT);
echo $masked;

               ?></span>
  </div>
  </div>

</div>
<form action="new.php" target="_blank">

<button type="submit" class="w3-button w3-green w3-third">FLY  WITH  US  </button>
</form>

</div>


</body>
<?php
mysqli_select_db($con,'youtube');
$is=" INSERT into bill(Tax,total,price,cust_name) values('$tax','$total','$price','$name')";
mysqli_query($con,$is);
mysqli_close($con);

 ?>
