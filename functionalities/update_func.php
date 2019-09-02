<?php

if (isset($_POST['updateBtn'])) {

                $name = $_POST['name'];
                $adress = $_POST['adress'];
                $descri = $_POST['descri'];
                $homepage = $_POST['homepage'];

          if($tableName == "restaurants") {
                
                $teleph = $_POST['teleph'];
                $type = $_POST['type'];

                $sql = "UPDATE restaurants SET 
                name = '$name',
                adress = '$adress', 
                descri = '$descri',
                homepage = '$homepage', 
                teleph = '$teleph',
                type = '$type' 
                WHERE ID = {$id}";

                if( $updatedData = mysqli_query($conn,$sql) ) {
                  header("Location: restaurants.php");
                }   


          }


          if($tableName == "concerts") {
                
                $date = $_POST['date'];
                $time = $_POST['time'];
                $ticketPrice = $_POST['ticketPrice'];

                $sql = "UPDATE concerts SET 
                name = '$name',
                adress = '$adress', 
                descri = '$descri',
                homepage = '$homepage', 
                conc_date = '$date',
                conc_time = '$time',
                ticketPrice = '$ticketPrice ' 
                WHERE ID = {$id}";

                if( $updatedData = mysqli_query($conn,$sql) ) {
                  header("Location: events.php");
                }                 

          } 

          if($tableName == "things_to_do") {
                  
                $type = $_POST['type'];

                $sql = "UPDATE $tableName SET 
                name = '$name',
                adress = '$adress', 
                descri = '$descri',
                homepage = '$homepage', 
                type = '$type' 
                WHERE ID = {$id}";

               if( $updatedData = mysqli_query($conn,$sql) ) {
                  header("Location: events.php");
                }                 

        } 

      } /* End of update btn set */
   

   
      ?>
