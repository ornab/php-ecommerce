<?php include 'inc/header.php';?>

 <?php
$login = Session::get("cusLogin");
if($login == false){
    header("location:login.php");
}
?>
 <style>
     .psuccess{width: 500px;text-align: center;border: 1px solid #ddd;margin: 0 auto;padding: 50px;min-height: 200px;}
     .psuccess h2{margin-bottom: 40px;padding-bottom: 10px;border-bottom: 1px solid #ddd}
     .psuccess p{font-size: 18px;line-height: 25px;text-align: left;}
</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
          	 <div class="psuccess">
                 <h2>Success</h2>
                 <?php
                  $cmrId = Session::get("cmrId");
                 $amount = $ct->payableAmount($cmrId);
                 
                 if($amount){
                     $sum = 0;
                     while($result = $amount->fetch_assoc()){
                         $price = $result['price'];
                         $sum = $sum+$price;
                     }
                 }
                 ?>
                 
                 <p>Total Payable Amount(including vat):$
                   <?php
                      $vat = $sum * 0.1;
                      $total = $sum + $vat;
                      echo $total;
                     ?>
                 </p>
                 <p>Thanks For purches.Here is your order details...<a href="oderdetails.php">Visit here</a></p>
                  
          	 </div>
          	 
 		</div>
 	</div>
	</div>
   <?php include 'inc/footer.php';?>