<?php
require('config/dbconnection.php');

    $stdid = mysqli_real_escape_string($conn, $_GET['id']);

    $query = "DELETE From student_tbl where stdid = '$stdid'";

    if(mysqli_query($conn,$query)){
      header('location:student.php');
    }else{
        ?>

          <script>alert('Unable to delete User');</script>
    <?php
    }

  ?>
