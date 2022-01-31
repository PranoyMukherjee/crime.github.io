<?php include "include/h2.php"; ?>
	<br/>
	<center>
		<?php
		
			if(isset($_REQUEST["submit_login"])){
				
				$username = $_REQUEST["username"];
				$upassword = $_REQUEST["upassword"];
				
				if($username == "Admin" && $upassword == "1234"){
					header("location:upload.php");
				}else{
					echo "<span style='color: red; font-size: 20px;'>Invalid Login!<span>";
				}
				
			}
		
		?>
	</center>
		<div class="container md-1 col-md-6 col-sm-12">
			<div class="row">
				<div class="card-body">
					<div class="card  col-md-12 text-center">
						<div class="card-header display-4 text-primary font-weight-bold alert alert-info col-lg-auto">
							Login
						</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">	
								<center>
								<form action="" method="POST">
									<table class="table table-hover table-borderless" style="max-width: 450px;">
										<tr>
											<td>
												Username :
												<span style="color: red; font-size: 14px;">*</span>
											</td>
											<td>
												<input type="text" name="username" placeholder="Enter Username..." class="form-control" required>
											</td>
										</tr>
										<tr>
											<td>
												Password :
												<span style="color: red; font-size: 14px;">*</span>
											</td>
											<td>
												<input type="password" name="upassword" placeholder="Enter Password..." class="form-control" required>
											</td>
										</tr>
										<tr>
											<td colspan="2" align="center">
												<button type="submit" name="submit_login" class="btn btn-outline-primary font-italic font-weight-bold">
													Login
												</button>
											</td>
										</tr>
									</table>
								</form>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>