<?php
  session_start();

  $stdid = $_SESSION['stdid'];
  $stdFname = $_SESSION['stdFname'];
  $stdLname = $_SESSION['stdLname'];
  $stdEmail = $_SESSION['stdEmail'];
  $userLvl = $_SESSION['userLvl'];
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>FeVal Online System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">


</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="home.php"> Welcome, <br><?php echo $stdFname; ?></a>

        <div id="close-sidebar">
          <i class="fas fa-bars"></i>
        </div>
      </div>

      <div class="sidebar-menu">

        <?php if($userLvl == 'student'){ ?>
          <ul>
                  <li class="header-menu">
                    <span>General</span>
                  </li>
                  <li>
                  
                    <a href="home.php">
                      <i class="fa fa-home"></i>
                      <span>Home</span>
                    </a>

                    <a href="editstudent.php?id=<?php echo $stdid;?>">
                      <i class="fa fa-cog"></i>
                      <span>Edit Information</span>
                    </a>
                  </li>
                  
        <?php }if($userLvl == 'admin'){ ?>
                <ul>
                  <li class="header-menu">
                    <span>General</span>
                  </li>
                  <li>
                  
                    <a href="student.php">
                      <i class="fa fa-users"></i>
                      <span>Students</span>
                    </a>
                  </li>
                  
                  <li class="sidebar-dropdown">
                    <a href="#">
                      <i class="fa fa-sticky-note"></i>
                      <span>Evaluation</span>
                    </a>
                    <div class="sidebar-submenu">
                      <ul>
                        <li>
                          <a href="listevaluation.php">Evaluation List
                          </a>
                        </li>
                        <li>
                          <a href="#">Result
                          </a>
                        </li>
                        <li>
                          <a href="#">Reports</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
            <?php } ?>
      </div>

      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
        <div class="sidebar-footer">

          <a href="logout.php">
            <i class="fa fa-undo-alt"></i>
          </a>
        </div>
  </nav>
  <!-- sidebar-wrapper  -->
  
  <!-- page-content" -->

<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>
