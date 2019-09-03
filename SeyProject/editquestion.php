<?php 
require('config/dbconnection.php');
include('sidebar.php');

$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = "SELECT * FROM question_tbl WHERE question_tbl.evalID=".$id;
$result = mysqli_query($conn, $query);
$question = mysqli_fetch_all($result,MYSQLI_ASSOC);


if(isset($_POST['save'])){
  print_r($_POST);
  foreach ($_POST as $key => $value) {
       $i = 1;  
            $query = "UPDATE question_tbl set question = '$value' where question_tbl.evalID = ".$id ." && question_tbn.questno =".$i;
            $result = mysqli_query($conn,$query);
            $i++; 
  }
}

?>


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
        				<th class="numeric" width="3%" >Question No.</th>
        				<th class="numeric">Question</th>
            			</tr>
        		</thead>
        		<tbody>
            <form action="#" method="POST">
            <?php foreach($question as $question):?>
            <tr>
        				<td data-title="Desecription"><input type="text" class="form-control text-center" name="<?php echo $question['questno'];?>" value="<?php echo  $question['questno'];?>"></td>
        				<td data-title="Desecription"><input type="text" class="form-control text-center" name="<?php echo $question['question'];?>" value="<?php echo  $question['question'];?>"></td>
        				<!-- <td data-title="Action" class="numeric"><a href="editquestion.php?id=<?php echo $id;?>" class="btn btn-secondary">Edit</a></td> -->
                </td>
                <?php endforeach;?>
        		</tr>
           
        		</tbody>
        	</table>
          <hr>
          <button class="btn btn-primary float-right" name="save">Save Questions</button>
          </form>
        </div>

  </main>

</div>