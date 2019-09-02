<?php
  require_once('config/dbconnection.php');


  $stdid = mysqli_real_escape_string($conn, $_GET['id']);

  $query = "SELECT * FROM student_tbl where stdid =".$stdid;
  $result = mysqli_query($conn, $query);
  $all = mysqli_fetch_array($result);

  if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $add = $_POST['add'];

      $query = "UPDATE student_tbl set stdFname = '$fname', stdLname='$lname',stdEmail='$email', stdPass='$pass',stdAdd='$add' where stdid ='$stdid'";

      if(mysqli_query($conn,$query)){
          header('location: student.php');
      }else{
          ?>
                <script>alert('Unable to update user');</script>
          <?php
      }

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feval Online System</title>
  <link rel="stylesheet" href="css/table.css">
</head>
<body>
<?php include('sidebar.php'); ?>

  <main class="page-content">
    <div class="container-fluid">
      <h2>Excel Technical Skills and Training Center</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
          <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
              Github</a>, it contains more themes and background image option</p>
        </div>
      </div>
      <h5>More templates</h5>
      <hr>

      <div id="no-more-tables">
            <table class="col-md-12 table-striped table-condensed cf text-center">
        		<thead class="cf">
        			<tr>
        				<th class="numeric">First Name</th>
        				<th class="numeric">Last Name</th>
        				<th class="numeric">Email</th>
                <th class="numeric">Password</th>
        				<th class="numeric">Address</th>
        				<th class="numeric">Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
                    <form action="#" method="POST">
        				<td data-title="First Name"><input type="text" class="form-control"name="fname" value="<?php echo $all["stdFname"];?>"></td>
        				<td data-title="Last Name"><input type="text" class="form-control"name="lname" value="<?php echo $all["stdLname"];?>"></td>
        				<td data-title="Email" class="numeric"><input type="email" class="form-control"name="email" value="<?php echo $all["stdEmail"];?>"></td>
        				<td data-title="Password" class="numeric"><input type="text" class="form-control"name="pass" value="<?php echo $all["stdPass"];?>"></td>
        				<td data-title="Address" class="numeric"><input type="text" class="form-control"name="add" value="<?php echo $all["stdAdd"];?>"></td>
                        <td data-title="Action" class="numeric"><button class="btn" type="submit" name="submit">Save</button></td>
                    </form>
                </td>
        			</tr>
        		</tbody>
        	</table>
        </div>

  </main>

</div>


    
</body>
</html>