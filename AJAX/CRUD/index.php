<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple CRUD With Ajax/MySQLi</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form method="POST">
			<div class="form-inline">
				<label>Firstname</label>
				<input type="text" id="firstname" class="form-control"/>
				<label>Lastname</label>
				<input type="text" id="lastname" class="form-control"/>
			</div>
			<br />
			<div class="form-inline">
				<label>Address</label>
				<input type="text" id="address" class="form-control"/>
			</div>
			<br />
			<center><button type="button" id="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button><button type="button" id="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button></center>
		</form>
		<br />
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody id="data"></tbody>
		</table>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>