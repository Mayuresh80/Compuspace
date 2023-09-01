<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>



<div class="grid_10">
            <div class="box round first grid">
                <h2>Admin report for Total Sale Amount</h2>
                <div class="block">               
                          
               
                

						<?php
							$ser="localhost";
							$uname="root";
							$pass="";
							$db="db_shop";
                            $total=0;
							$conn=mysqli_connect($ser,$uname,$pass,$db);
							$res = mysqli_query($conn," SELECT price FROM tbl_order ");
								while ($row = mysqli_fetch_assoc($res)) 
									{    
   									 $total += $row['price'];
									}

									echo "Total Sale Is:-".$total;
						  ?>
                          
                          </div>
            </div>
        </div>
						
<?php include 'inc/footer.php';?>
