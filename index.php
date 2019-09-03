<?php

ob_start();
session_start();
require 'dbconnect.php';

if(isset($_SESSION['system_user'])!="" ){
 header("Location: restaurants.php" ); 
};

?>

<?php include 'components/head.php';?>

<body id="login_background">
	<div class="container-fluid"> <!-- start container for whole site -->

		<main id="login_main">

			<div id="main_row_one" class="d-flex justify-content-center"> <!-- start main row -->
		  	
				<div id="login_form_container"> 
					<form action="index.php" method="POST" >
						<div class="md-form input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">user status</span>
						  </div>
						  <input type="text" id="user_status" name="user_status" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
						</div>

						<div class="md-form input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-default">password</span>
						  </div>
						  <input type="password" id="user_pass" name="user_pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-default">
						</div>

						<div class="md-form input-group mb-3 loginBtn">
						 	<button type="sumbit" name="loginBtn" class="btn">Einloggen</button>
						</div>

					</form>	
				</div> <!-- END OF FORM CONTAINER -->

			</div> <!-- end of main row -->

		</main>


	</div> <!-- start container for whole site -->

	<?php include 'functionalities/login_func.php';?>

	
  	<?php include 'components/footer.php';?>
 
	<?php include 'functionalities/fields_func.php';?>

  	<?php include 'components/scripts.php';?>

</body>
</html>

<?php  ob_end_flush(); ?>