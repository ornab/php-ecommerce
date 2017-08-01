<?php include 'inc/header.php';?>

 <?php
$login = Session::get("cusLogin");
if($login == false){
    header("location:login.php");
}
?>
 <style>
     .tblone{width: 650px;margin: 0 auto;border: 2px solid #333;}
     .tblone tr td{text-align: justify;background:aquamarine;}
     .tblone tr td a:hover{background: blue}
      
</style>

 <div class="main">
    <div class="content">
    	<div class="section group">
           <?php
            $id = Session::get("cmrId");
            $getData =$cmr->getCustomerData($id);
            if($getData){
                while($result=$getData->fetch_assoc()){
                    
           
            ?>
           
            <table class="tblone">
                <tr>
                    <td colspan="3"><h2 style="color:coral">Your Profile Details</h2></td>
                </tr>
                <tr>
                    <td width="20%">Name</td>
                    <td width="5%">...</td>
                    <td><?php echo $result['name'];?></td>
                </tr>
                  <tr>
                    <td>Phone</td>
                    <td>...</td>
                    <td><?php echo $result['phone'];?></td>
                </tr>
                  <tr>
                    <td>E-mail</td>
                    <td>...</td>
                    <td><?php echo $result['email'];?></td>
                </tr>
                  <tr>
                    <td>Address</td>
                    <td>...</td>
                    <td><?php echo $result['address'];?></td>
                </tr>
                  <tr>
                    <td>City</td>
                    <td>...</td>
                    <td><?php echo $result['city'];?></td>
                </tr>
                  <tr>
                    <td>Zip-code</td>
                    <td>...</td>
                    <td><?php echo $result['zip'];?></td>
                </tr>
                  <tr>
                    <td>Country</td>
                    <td>...</td>
                    <td><?php echo $result['country'];?></td>
                </tr>
                <tr>
                    <td> </td>
                    <td></td>
                    <td><a href="editprofile.php">Update Details</a></td>
                </tr>
                 
                
            </table>
            <?php } } ?>	 
 		</div>
 	</div>
	</div>
   <?php include 'inc/footer.php';?>