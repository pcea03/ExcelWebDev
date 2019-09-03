<?php
  require('config/dbconnection.php');
  include('sidebar.php');
  

  $query = "SELECT * FROM evaluate_tbl";
  $result = mysqli_query($conn,$query);
  $eval = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>




<main class="page-content">
    <div class="container-fluid">
      <h2>Excel Technical Skills and Training Center</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">

        </div>
      </div>
      <h5>List of Evaluation</h5>
      <hr>
          <div class="row">
          <?php foreach($eval as $evals){ ?>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">         
                <div class="card rounded-0 p-0 shadow-sm">
                  <img src="https://user-images.githubusercontent.com/25878302/58369568-a49b2480-7efc-11e9-9ca9-2be44afacda1.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
                  <div class="card-body text-center">
                      <h6 class="card-title"><?php echo $evals['evaTitle'];?></h6>
                      <a href="answereval.php?id=<?php echo $evals['evaID']?>" class="btn btn-primary btn-sm">Answer Evaluation</a>
                  </div>
                </div>
              </div>  
          <?php } ?>
          </div>
    </div>

  </main>

</div>
  