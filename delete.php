<!-- prevents not logged in user from accessing delete.php -->

<?php include 'components/not_logged_in_redirect.php';?>

<!-- prevents emplpyee user from accessing delete.php -->

<?php if($_SESSION["system_user"] == "employee") { header('Location: restaurants.php'); } ?>
 
<?php include 'components/head.php';?>

<body>

   <header>
     <?php include 'components/navbar.php';?>
  </header>
  
	<div class="container"> <!-- start container for whole site -->
		<main>

      <?php 
           require_once 'functionalities/fetch_data.php';

           $name = $dataArray['name'];
           
           ?>

                <form action ='' method='post'>

                   <div class='alert alert-danger mt-4' role='alert'>
                    Do you really want to delete 
                    <?php echo $name; ?>
                   </div>

                   <input type='hidden' name= 'id' value='$res_ID'/>

                   <button type='submit' name='deleteBtn' class='btn btn-danger'>Yes delete</button>

                   <?php

                     if ($tableName == "restaurants") {
                        echo"
                          <a href='restaurants.php'><button type='button' class='btn btn-primary'>No go back</button></a> 
                       "; }

                       else if ($tableName == "concerts" || $tableName == "things_to_do" ) {

                        echo"
                          <a href='events.php'><button type='button' class='btn btn-primary'>No go back</button></a> 
                       "; 
                      }

                   ?>

                </form>
                
		</main>

	</div> <!-- start container for whole site -->

    <?php include 'functionalities/delete_func.php';?>


	<footer>
  	<?php include 'components/footer.php';?>
  </footer>	

  <?php include 'components/scripts.php';?>

</body>
</html>