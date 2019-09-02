<?php 

				  // print_r($_POST);
				  
				  if(isset($_POST['loginBtn'])) {

				  	$password = $_POST['user_pass'];

				  	$user_status = $_POST['user_status'];

				  	$login_query="SELECT * FROM system_users WHERE user_status ='$user_status'";

				  	$retrievedUser = mysqli_query($conn,$login_query);

				  	$retrievedUserArray = mysqli_fetch_assoc($retrievedUser);

				  	$count = mysqli_num_rows($retrievedUser);

				  	if ($count == 1 && $retrievedUserArray['user_pass'] == $password) {

						if($user_status == "admin") {
							$_SESSION["system_user"] = "admin";	
						}

						else if($user_status == "employee") {
							$_SESSION["system_user"] = "employee";
						}

						header('Location: restaurants.php');
						exit();

				  	}
				  	
				  }

			 ?>
