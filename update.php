<!-- prevents not logged in user from accessing update.php -->

<?php include 'components/not_logged_in_redirect.php';?>

<!-- prevents emplpyee user from accessing update.php -->

<?php if($_SESSION["system_user"] == "employee") { header('Location: restaurants.php'); } ?>

<?php include 'components/head.php';?>

<body>

  <header>
     <?php include 'components/navbar.php';?>
  </header>
  
  
      <div class="container">

        <p class='h4 mt-5 text-center'>UPDATE</p>

        <form class=' border border-light p-5' action='' method='POST'>
              
         <?php

          require_once 'functionalities/fetch_data.php';

        // declare common variables of all tables

          $ID = $dataArray['ID'];
          $img =  $dataArray['img'];
          $name = $dataArray['name'];
          $adress = $dataArray['adress'];
          $descri = $dataArray['descri'];
          $homepage = $dataArray['homepage'];

        echo "

  
              <input type='text' name='ID' class='form-control mb-4  d-none' value='$ID'>
              <label for='name'>Name</label>
              <input type='text' name='name' class='form-control mb-4' value='$name'>
              <label for='adress'>Name</label>
              <input type='text' name='adress' class='form-control mb-4' value='$adress'>
              <label for='descri'>Description</label>
              <input type='text' name='descri' class='form-control mb-4' value='$descri'>
              <label for='homepage'>Homepage</label>
              <input type='text' name='homepage' class='form-control mb-4' value='$homepage'>
              "
              ;

        // show special fiels restaurants      
      
        if ($tableName == "restaurants") {

          $teleph = $dataArray['teleph'];
          $type = $dataArray['type'];

          echo 
            "
            <label for='teleph'>Telephone number</label>
            <input type='text' name='teleph' class='form-control mb-4' value='".$teleph."'>

            <label for='teleph'>Category</label>
            <select name='type' class='browser-default custom-select mb-4'>
              <option selected>Choose a category</option>
              <option value='German'>German</option>
              <option value='Austrian'>Austrian</option>
              <option value='Swedish'>Swedish</option>
            </select>

            ";

            }

            // show special fields concerts  

        if ($tableName == "concerts") {

          $date = $dataArray['conc_date'];
          $time = $dataArray['conc_time'];
          $ticketPrice = $dataArray['ticketPrice'];

          echo 
            "
            <label for='date'>Telephone number</label>
            <input type='text' name='date' class='form-control mb-4' value='".$date."'>

            <label for='time'>Telephone number</label>
            <input type='text' name='time' class='form-control mb-4' value='".$time."'>

            <label for='ticketPrice'>Ticket price</label>
            <input type='text' name='ticketPrice' class='form-control mb-4' value='".$ticketPrice."'>            

            ";

        }


            // show special fields things_to_do



        if ($tableName == "things_to_do") {

          $type = $dataArray['type'];

          echo 
            "
            <label for='type'>Type</label>
            <select name='type' class='browser-default custom-select mb-4'>
              <option selected>Choose a category</option>
              <option value='Sports'>Sports</option>
              <option value='Club'>Club</option>
              <option value='Chill'>Chill</option>
            </select>
            ";
         }

      ?>
    

      <button id="updateBtn" name="updateBtn" type="submit" class="btn #ff8f00 amber darken-3  btn-rounded">Update</button>


    </div> <!-- End of container -->


    <!-- includes functionality for actual updating -->

    <?php include 'functionalities/update_func.php'; ?>

  <div class="container-fluid">
    <div class="logout_container">
      <a class="logout" href="logout.php?logout">Log out</a>
    </div>
  </div>

      
  </footer> 


<?php include 'components/scripts.php';?>

</body>
</html>

