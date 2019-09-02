<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid"> <!-- start container for whole site -->
		
		

		<main>

			<div id="main_row_one" class="d-flex justify-content-center"> <!-- start main row -->
		  	
				<div id="login_form_container"> 
					<form action="login.php" method="POST" >
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

						<div class="md-form input-group mb-3">
						 <button type="sumbit" name="loginBtn" class="btn btn-deep-purple">Einloggen</button>
						</div>
					</form>	
				</div> <!-- END OF FORM CONTAINER -->

			</div> <!-- end of main row -->

		</main>


	</div> <!-- start container for whole site -->







	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script>
</body>
</html>