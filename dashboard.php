<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>BOACTS | Dashboard</title>

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

<!-- header starts here -->
<header>
<!-- navigation starts here -->
<nav class="navbar navbar-dark ml-auto bg-dark sticky-top">
	<a class="navbar-brand" href="#"><i class="fa fa-home"></i> BOACTS</a>
	<!-- hamburger menu starts here -->
	<!-- <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button> -->
	<!-- hamburger menu ends here -->

	<!-- dropdown menu starts here -->
	<div class="dropdown d-flex justify-content-end">
		<button class="mr-auto p2 btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user"></i> <?php echo $_SESSION['user'];?>
  		</button>
  		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    		<a class="dropdown-item active" href="dashboard.php">Dashboard</a>
    		<a class="dropdown-item" href="clients.php">Clients</a>
    		<a class="dropdown-item" href="soa.php">SOA</a>
    		<a class="dropdown-item" href="vouchers.php">Vouchers</a>
    		<a class="dropdown-item" href="collection.php">Collection</a>
    		<a class="dropdown-item" href="report.php">Report</a>
    		<a class="dropdown-item" href="charges.php">Charges</a>
    		<div class="dropdown-divider"></div>
    		<a class="dropdown-item" href="logout.php">Logout</a>
  		</div>
	</div>
	<!-- dropdown menu ends here -->

	<!-- collapse menu starts here -->
	<!-- <div class="collapse navbar-collapse" id="navMenu"> -->
		<!-- collapse menu items starts here -->
		<!-- <ul class="navbar-nav align-items-center">
      		<li class="nav-item active">
        		<a class="nav-link" href="#home">Home</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#aboutus">About Us</a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="#contactus">Contact Us</a>
      		</li>
      		<li>
      			<a class="nav-link" href="login.php">Login</a>
      		</li>
    	</ul> -->
    	<!-- collapse menu items ends here -->
	<!-- </div> -->
	<!-- collapse menu ends here -->
</nav>
<!-- navigtion ends here -->
</header>
<!-- header ends here -->

<div class="container-fluid">
	<div class="row mt-4 justify-content-center">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-primary">Clients</h4>
				<div class="card-body">
					<?php
						/*include('conn.php');
						$sql="SELECT * from tbl_clients";
						$result=mysqli_query($connection,$sql);
  						$rowcount=mysqli_num_rows($result);*/
					?>
					<p>Total client record: <?php //echo $rowcount;?></p>
					<div class="text-right">
						<a href="clients.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>

			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-success">Statement of Accounts</h4>
				<div class="card-body">
					<p>some text here</p>
					<div class="text-right">
						<a href="soa.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-danger">Vouchers</h4>
				<div class="card-body">
					<p>some text here</p>
					<div class="text-right">
						<a href="vouchers.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="row mt-4 justify-content-center">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-info">Collection</h4>
				<div class="card-body">
					<p>some text here</p>
					<div class="text-right">
						<a href="collection.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-warning">Report</h4>
				<div class="card-body">
					<p>some text here</p>
					<div class="text-right">
						<a href="report.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<div class="card mb-2">
				<h4 class="card-header text-light bg-dark">Charges</h4>
				<div class="card-body">
					<p>some text here</p>
					<div class="text-right">
						<a href="charges.php" class="btn btn-sm btn-outline-secondary">View</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>