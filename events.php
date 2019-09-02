<?php include 'components/not_logged_in_redirect.php';?>

<?php include 'components/head.php';?>

<body>

  <header>
     <?php include 'components/navbar.php';?>
  </header>


  <div class="container-fluid mt-4">
      <div class="row justify-content-center">

          <?php 

            $sql="SELECT * FROM concerts";
            $result = mysqli_query($conn,$sql); 

            // print_r($row);

            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)) {
                  $tableName = "concerts";
                  echo "
                  <div class='col-auto mb-3'>
                    <div class='card'  style='width: 25rem;'>

                    <!-- Card image -->
                    <div class='view view-cascade overlay'>
                      <img  class='card-img-top' src='".$row['img'] ."' alt='Card image cap'>
                      <a href='#!'>
                        <div class='mask rgba-white-slight'></div>
                      </a>
                    </div>


                      <div class='card-body'>
                      <div class='card_header_container'>
                          <h5 class='card-title'>".$row['name']."</h5>
                      </div>
                        <p class='card-text'>
                        <ul>
                          <li>adress:".$row['adress']."</li>
                          <li> description:".$row['descri']."</li>
                          <li> date:".$row['conc_date']."</li>
                          <li> start:".$row['conc_time']."</li>";
        
                      if ($_SESSION["system_user"] == "admin") {
                        echo "
                           <a  href='update.php?id=".$row['ID']."&tableName=".$tableName."'>
                              <button type='button' class='btn btn-primary'>
                                <i class='fas fa-tools mr-1'></i>
                                edit
                              </button>
                           </a>
                            <a href='delete.php?id=".$row['ID']."&tableName=".$tableName."'>
                              <button type='button' class='btn btn-danger'>
                                <i class='fas fa-burn mr-1'></i>
                                delete
                              </button>
                            </a>
                        ";
                      }

                      echo "

                      </div>
                    </div>
                  </div>
                  ";
                }

            } /*end of whole display */


          ?>

      </div>  <!-- ENDING FIRST ROW MAIN -->
    </div> <!-- ENDING CONCERTS CONTAINER -->


    <div class="container-fluid mt-4">
      <div class="row justify-content-center">
          
          <?php 

            $sql1="SELECT * FROM things_to_do";
            $result1 = mysqli_query($conn,$sql1); 

            // print_r($row);

            if(mysqli_num_rows($result1)>0)
             {
                while($row = mysqli_fetch_assoc($result1)) {
                  $tableName="things_to_do";
                  echo "
                  <div class='col-auto mb-3'>
                    <div class='card' style='width: 25rem;'>

                    <!-- Card image -->
                    <div class='view view-cascade overlay'>
                      <img  class='card-img-top' src='".$row['img']."' alt='Card image cap'>
                      <a href='#!'>
                        <div class='mask rgba-white-slight'></div>
                      </a>
                    </div>

                      <div class='card-body'>

                      <div class='card_header_container'>
                          <h5 class='card-title'>".$row['name']."</h5>
                      </div>

                        <ul>
                          <li>adress:".$row['adress']."</li>
                          <li> description:".$row['descri']."</li>
                          <li> date:".$row['homepage']."</li>";
        
                      if ($_SESSION["system_user"] == "admin") {
                        echo "
                           <a  href='update.php?id=".$row['ID']."&tableName=".$tableName."'>
                              <button type='button' class='btn btn-primary'><i class='fas fa-tools mr-1'></i>
                                edit
                              </button>
                           </a>
                            <a href='delete.php?id=".$row['ID']."&tableName=".$tableName."'>
                              <button type='button' class='btn btn-danger'><i class='fas fa-burn mr-1'></i>
                                delete
                              </button>
                           ";
                      }

                      echo "

                      </div>
                    </div>
                  </div>
                  ";
                }

            } /*end of whole display */
          ?>

        </div>
      </div>


<div class="container-fluid">
  <div class="logout_container">
    <a class="logout" href="logout.php?logout">Log out</a>
  </div>
</div>

  
    <?php include 'components/footer.php';?>
  


    <?php include 'components/scripts.php';?>

</body>
</html>

<?php  ob_end_flush();?>
