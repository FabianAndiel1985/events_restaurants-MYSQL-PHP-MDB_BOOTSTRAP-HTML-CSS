<?php
          $id = $_GET['id'];
          $tableName= $_GET['tableName'];
          $query ="SELECT * FROM $tableName WHERE ID = {$id}";
          $retrievedData = mysqli_query($conn,$query);
          $dataArray= mysqli_fetch_assoc($retrievedData);
?>