<?php
require('config/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            <table class="col-md-12 table-striped cf text-center">
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
            <?php foreach($all as $user):?>
        			<tr>
        				<td data-title="First Name"><?php echo $user['stdFname'];?></td>
        				<td data-title="Last Name"><?php echo  $user['stdLname'];?></td>
        				<td data-title="Email" class="numeric"><?php echo $user['stdEmail'];?></td>
        				<td data-title="Password" class="numeric"><?php echo $user['stdPass'];?></td>
        				<td data-title="Address" class="numeric"><?php echo $user['stdAdd'];?></td>
        				<td data-title="Action" class="numeric"><a href="editstudent.php?id=<?php echo $user['stdid']; ?>" class="btn btn-secondary">Edit</a> 	<a href="deletestudent.php?id=<?php echo $user['stdid']; ?>" class="btn btn-danger">Delete</a></td>
                </td>
        			</tr>
            <?php endforeach;?>
        		</tbody>
        	</table>
        </div>

  </main>

</div>
    
</body>
</html>