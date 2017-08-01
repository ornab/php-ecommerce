<?php include 'inc/header.php';?>

 <?php
$login = Session::get("cusLogin");
if($login == false){
    header("location:login.php");
}
?>
 <style>
     .payment{width: 500px;text-align: center;border: 1px solid red;margin: 0 auto;padding: 50px;min-height: 200px;}
     .payment h2{margin-bottom: 40px;padding-bottom: 10px;border-bottom: 1px solid #333}
     .payment a{background: #ff0000;border-radius: 3px solid #ddd;font-size: 25px;padding: 6px 20px;color: #fff;}
     .back a{width: 160px;margin: 5px auto 0;padding: 7px 0;text-align: center;display: block;background: #555;border: 1px solid #333; border-radius: 3px;color: #fff;font-size: 25px;padding-bottom: 4px;}
     .back a:hover{background: coral;}
</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
          	 <div class="payment">
                 <h2>Choose your payment option</h2>
                 <a href="paymentoffline.php">OFFline Payment</a>
                 <a href="paymentonline.php">ONline Payment</a>
          	 </div>
          	 <div class="back">
                 <a href="cart.php">Previous</a>
          	 </div>
 		</div>
 	</div>
	</div>
   <?php include 'inc/footer.php';?>
   