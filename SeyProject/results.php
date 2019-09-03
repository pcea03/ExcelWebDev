<?php 
    require('config/dbconnection.php');
    include('sidebar.php');

    $query = "SELECT student_tbl.stdFname, student_tbl.stdLname, evaluate_tbl.evaID, evaluate_tbl.evaTitle, evaluate_tbl.totalq, evaluate_tbl.evaDesc, SUM(answer) as 'sum' FROM student_tbl,evaluate_tbl, transactions_tbl WHERE transactions_tbl.stdId = student_tbl.stdid GROUP BY student_tbl.stdid";
    $result = mysqli_query($conn,$query);
    $all = mysqli_fetch_all($result,MYSQLI_ASSOC);

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
        				<th class="numeric">First Name</th>
        				<th class="numeric">Last Name</th>
        				<th class="numeric">Title</th>
                        <th class="numeric">Description</th>
                        <th class="numeric">total</th>
                        <th class="numeric">Perentage</th>
                        <th class="numeric">Equivalent</th>

        			</tr>
        		</thead>
        		<tbody>
            <?php foreach($all as $eval):?>
        			<tr>
        				<td><?php echo $eval['stdFname'];?></td>
        				<td><?php echo $eval['stdLname'];?></td>
        				<td><?php echo $eval['evaTitle'];?></td>
                        <td><?php echo $eval['evaDesc'];?></td>
                        <?php $holdno =  ($eval['sum']/2) ;
                            $highscore = $eval['totalq'] * 5;
                            $holdpercent = ($holdno/$highscore)*100;
                            $equivalent = "";
                            if($holdpercent >= 95){
                                $equivalent = "Excellent";
                            }elseif($holdpercent >= 84){
                                $equivalent = "Very Good";
                            }elseif($holdpercent >= 83){
                                $equivalent = "Good";
                            }elseif ($holdpercent >= 77) {
                                $equivalent = "Satisfactory";
                            }else{
                                $equivalent = "Failed";
                            }
                        ?>
        				<td><?php echo $holdno;?></td>
        				<td><?php echo $holdpercent;?></td>
        				<td><?php echo $equivalent;?></td>
                </td>
        			</tr>
            <?php endforeach;?>
        		</tbody>
        	</table>
        </div>

  </main>
