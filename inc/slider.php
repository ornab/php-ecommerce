<style>
    .header_bottom_left h1{color: #602d8d;text-align: center;font-size: 22px;
    text-transform: uppercase;height: 50px;width: 225px;margin-top: 10px;}
    
    .rightsidebar{float: right;}
    . span_3_of_1{width: 30%;}
    
    .categories h2{background: #602d8d;color: #fff;padding: 10px;font-size: 1.2em;text-transform: uppercase;}
</style>
	  <div class="header_bottom_left">
		 <h1>Latest Products</h1>
			<div class="section group">
                 
                <?php
                $getGibson = $pd->latestFromGibson();
                if($getGibson){
                    while($result = $getGibson->fetch_assoc()){
                ?>
			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Gibson</h2>
						<p><?php echo $result['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>
			   
			   		<?php } }?>	
                    
                      <?php
                $getBoss = $pd->latestFromBoss();
                if($getBoss){
                    while($result = $getBoss->fetch_assoc()){
                        
                
                ?>                                                      
			   									
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Boss</h2>
						<p><?php echo $result['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
				</div>
				<?php } }?>	
			</div>
			<div class="section group">
			
			
                <?php
                $getYamaha = $pd->latestFromYamaha();
                if($getYamaha){
                    while($result = $getYamaha->fetch_assoc()){
                        
                
                ?>
				<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Yamaha</h2>
						<p><?php echo $result['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
			   </div>
			   <?php } }?>	
			   				
			    <?php
                $getRoland = $pd->latestFromRoland();
                if($getRoland){
                    while($result = $getRoland->fetch_assoc()){
                        
                
                ?>  								
				<div class="listview_1_of_2 images_1_of_2">
							<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image']?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Roland</h2>
						<p><?php echo $result['productName'];?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>">Add to cart</a></span></div>
				   </div>
				</div>
				 <?php } }?>	
			</div>
		  <div class="clear"></div>
		</div>
 
    <div class="header_bottom">
		
        <div class="rightsidebar span_3_of_1">
        <div class="categories">
					<h2>CATEGORIES</h2>
					<ul>
                  <?php
                        $getCat = $cat->getAllCat();
                        if($getCat){
                            while($result = $getCat->fetch_assoc()){
                                
                        
                    ?>
                        
				      <li><a href="productbycat.php?catId=<?php echo $result['catId'];?>"><?php echo $result['catName'];?></a></li>
				      
				       <?php } }?>
    				</ul>
            </div>
 				</div>
         
	
	  <div class="clear"></div>

  </div>	
