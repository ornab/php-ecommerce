<?php include 'inc/header.php';?>

 <?php
$login = Session::get("cusLogin");
if($login == false){
    header("location:login.php");
}
?>

<?php
if(isset($_GET['orderid']) && $_GET['orderid'] == 'order'){
    
    $cmrId = Session::get("cmrId");
    $inserOrder = $ct->orderProduct($cmrId);
    $delData = $ct->delCustomerCart();
    header("Location:success.php");
}
?>

<style>
     .division{width: 50%;float: left;}
 </style>
 
 <div class="main">
    <div class="content">
    	<div class="section group">
          	  <div class="division">


                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="hzamil17-facilitator@gmail.com">
                            <input type="hidden" name="currency_code" value="USD">    
                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                       <th>Product</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Sub-total</th>

                                      </tr>
                                    </thead>
                                    <tbody>
                                       <?php cart(); ?>
                                    </tbody>
                                </table>

                                <?php show_paypal(); ?>
                            </form>

                    </div>
                </div>
            </div>
        </div>
        
    <?php include 'inc/footer.php';?>
