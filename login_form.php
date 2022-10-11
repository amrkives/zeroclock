<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>

	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="container-fluid">
				<!-- row -->
				

					<div class="login-marg">
						<!-- Billing Details -->
						
						
						<!-- /Billing Details -->
						
						
								<form onsubmit="return false" id="login" class="login100-form ">
									<div class="billing-details jumbotron">
                                    <div class="section-title">
                                        <h5 class="login100-form-title p-b-49" >Login </h5>
										<a class="btn primary-btn" style="background-color: #5a7dc7; color: white; width: 100%;" href="#!" role="button">
                    					<h6 class="modal-title text-center" id="mtitle" style="font-weight:bold;"><i class="fab fa-google"> </i> LOGIN WITH GMAIL</h6></a>
                    					<br><br>
                						<a class="btn primary-btn" style="background-color: #3b5998; color: white; width: 100%;" href="#!" role="button">
                    					<h6 class="modal-title text-center" id="mtitle" style="font-weight:bold;"><i class="fab fa-facebook-square"></i> LOGIN WITH FACEBOOK</h6></a>
                                    </div><hr>
									
                                   
                                    
                                    <div class="form-group">
                                       <label for="email">Email</label>
                                        <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                    </div>
                                    
                                    <div class="form-group">
                                       <label for="email">Password</label>
                                        <input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
                                    </div>
									
									<span><input type="checkbox" class="form-check-input float-start" id="log">&nbsp;Remember me? 
										</span>
                                    <div class="text-pad" >

                                       <span><a href="#" class="float-end">
                                           Forgot Password ?
                                       </a></span>
                                        
                                    </div>
                                    <div class="text-center">
                                        <input class="primary-btn btn-block" style="width: 200px;"  type="submit" onclick="window.location.href='index.php'" Value="Login"><br>
									</div>

                                        <div class="panel-footer">
											<a href="admin/index.php">
												<br><h4 class="text-center">Log in as Admin</h4>
											</a><br>
											<h6 class="text-center">Don't have an account? <a href="" data-toggle="modal" data-target="#Modal_register">Register</a></h6>
											<div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>
                                    
                                    	
                                        
                                    

                                </div>
                                
								</form>
                           
						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					
					<!-- /Order Details -->
				
				<!-- /row -->
			</div>