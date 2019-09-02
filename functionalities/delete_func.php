 <?php

	 if(isset($_POST['deleteBtn'])) {

	                     $sql = "DELETE FROM $tableName WHERE ID = {$id}";

	                     if( $deletedData = mysqli_query($conn,$sql) ) {
                  		 
	                     	if( $tableName == "restaurants") {
                  		 		header("Location: restaurants.php");
                  		 	}

                  		 	else if( $tableName == "concerts" || $tableName == "things_to_do" ) {
                  		 		header("Location: events.php");
                  		 	}

                		} /* end of delete query */    
	  }
	?>    
               