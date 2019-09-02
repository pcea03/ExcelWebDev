<?php
    require('config/dbconnection.php');
    include('sidebar.php');

    $evaID = $_GET['id'];
    // echo $evaID;
    // $querymax = "SELECT MAX(question_tbl.questNo) FROM question_tbl where question_tbl.evalID =".$evaID;
    // $resultmax = mysqli_query($conn,$querymax);
    // $questmax = mysqli_fetch_array($resultmax);
    // print_r($questmax);
    
    $query = "SELECT * FROM question_tbl WHERE question_tbl.evalID =".$evaID;
    $result = mysqli_query($conn,$query);
    $quests= mysqli_fetch_all($result,MYSQLI_ASSOC);

    if(isset($_POST['submit'])){
        // $answers = $question['questno'];
        $i = 1;
        foreach ($_POST as $key => $value) {
            $result = mysqli_query($conn,$query);
            $query = "INSERT INTO transactions_tbl(stdId,evaId,questNo,answer) VALUES ('$stdid','$evaID','$i','$value')";
            $i++; 
        }

    }
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
      <h5>More templates</h5>
      <hr>

      <div id="no-more-tables">
            <table class="col-md-12 table-striped cf text-center">
        		<thead class="cf">
        			<tr>
        				<th class="numeric" width ="20%">Question</th>
        				<th class="numeric">1</th>
        				<th class="numeric">2</th>
        				<th class="numeric">3</th>
        				<th class="numeric">4</th>
        				<th class="numeric">5</th>

        			</tr>
        		</thead>
        		<tbody>
                <form action="#" method="POST">
                        <?php foreach($quests as $question):?>
                            <tr>
                                <td data-title="Question"><?php echo $question['question'];?></td>
                                <td data-title="1"><input class="form-check-input" type="radio" name="<?php echo $question['questno']?>" id="exampleRadios1" value="1" ></td>
                                <td data-title="2"><input class="form-check-input" type="radio" name="<?php echo $question['questno']?>" id="exampleRadios1" value="2" ></td>
                                <td data-title="3"><input class="form-check-input" type="radio" name="<?php echo $question['questno']?>" id="exampleRadios1" value="3" ></td>
                                <td data-title="4"><input class="form-check-input" type="radio" name="<?php echo $question['questno']?>" id="exampleRadios1" value="4" ></td>
                                <td data-title="5"><input class="form-check-input" type="radio" name="<?php echo $question['questno']?>" id="exampleRadios1" value="5" ></td>
                            </tr>
                            
                        <?php endforeach;?>
        		</tbody>
        	</table>
        </div>
        <hr>
            <div class="text-center">
            <button class="btn btn-primary" name="submit">Submit</button>
            </div>
                </form>
  </main>

</div>

    
</body>
</html>