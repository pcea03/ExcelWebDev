<?php
require('config/dbconnection.php');
include('sidebar.php');

$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT  DISTINCT evaluate_tbl.evaTitle, evaluate_tbl.evaDesc, question_tbl.questno, question_tbl.question FROM evaluate_tbl,question_tbl WHERE evaluate_tbl.evaID = '$id' && evaluate_tbl.evaID = question_tbl.evalID";
$result = mysqli_query($conn, $query);
$question = mysqli_fetch_all($result,MYSQLI_ASSOC);

// $e = mysqli_fetch_array($result);
// print_r($question);
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
      <h5><?php echo $question[0]['evaTitle']; ?>: <?php echo $question[0]['evaDesc']?></h5>
      <hr>

      <div id="no-more-tables">
            <table class="col-md-12 table-striped cf text-center">
        		<thead class="cf">
        			<tr>
        				<th class="numeric">Question No.</th>
        				<th class="numeric">Question</th>
                <th class="numeric">Action</th>
        			</tr>
        		</thead>
        		<tbody>
            <?php foreach($question as $eval):?>
            <tr>
        				<td data-title="Desecription"><?php echo  $eval['questno'];?></td>
        				<td data-title="Desecription"><?php echo  $eval['question'];?></td>
        				<td data-title="Action" class="numeric"><a href="editevaluation.php?id=<?php echo $eval['evaID']; ?>" class="btn btn-secondary">Edit</a></td>
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