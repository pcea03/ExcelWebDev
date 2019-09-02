<?php
require('config/dbconnection.php');

$query = "SELECT * fROM evaluate_tbl";
$result = mysqli_query($conn,$query);
$all = mysqli_fetch_all($result,MYSQLI_ASSOC);
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
<?php include('sidebar.php');?>



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
        				<th class="numeric">Title</th>
        				<th class="numeric">Description</th>
                <th class="numeric">Action</th>
        			</tr>
        		</thead>
        		<tbody>
            <?php foreach($all as $eval):?>
        			<tr>
        				<td data-title="Title"><?php echo $eval["evaTitle"];?></td>
        				<td data-title="Desecription"><?php echo  $eval['evaDesc'];?></td>
        				<td data-title="Action" class="numeric"><a href="editevaluation.php?id=<?php echo $eval['evaID']; ?>" class="btn btn-secondary">Edit</a></td>
                </td>
        			</tr>
            <?php endforeach;?>
        		</tbody>
        	</table>
        </div>

  </main>

    
</body>
</html>