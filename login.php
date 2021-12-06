<!DOCTYPE html>
<html>
<head>
	<title>BOACTS | Login</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	<script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center mt-4">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">
							<i class="fa fa-key"></i> Login Page
						</h4>
					</div>
					<div class="card-body">
						<form method="POST" action="login2.php?op=in">
							<div class="form-group">
								<input class="form-control type="text" name="username" placeholder="Enter username" required>
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="password" placeholder="Enter password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-sm btn-primary">Login</button>
							</div>
							<div class="form-group">
								<a href="login2.php?op=out" class="form-control btn btn-sm btn-danger">Return Home</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>