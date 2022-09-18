<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>UIU Bookstore</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/header.css">

</head> 

<body>
	<div class="strip d-flex justify-content-end px-4 py-1 bg-light">
        <div class="font-rale font-size-14">
            <a href="login.php" class="px-3 border-right border-left text-dark">Log In</a>
            <a href="register.php" class="px-3 border-right text-dark">Sign Up</a>
        </div>
    </div>
<nav class="navbar navbar-expand-lg navbar-light costom-nav-background-color">
	<a href="http://localhost/uiubook/index.php" class="navbar-brand"><img src="img/uiu.png" id="logo" alt="uiu logo"><b>BookShop</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="costom-styel-navCollase collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="http://localhost/uiubook/index.php" class="nav-item nav-link">Home</a>
			<a href="#" class="nav-item nav-link">About</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Department</a>
				<div class="dropdown-menu">					
					<a href="cse.php" class="dropdown-item">CSE</a>
					<a href="eee.php" class="dropdown-item">EEE</a>
					<a href="bba.php" class="dropdown-item">BBA</a>
					<a href="civil.php" class="dropdown-item">Civil</a>
				</div>
            </div>
			<a href="#" class="nav-item nav-link">Contact</a>
        </div>
		<form class="navbar-form form-inline search-form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default " id="search"><i style="color: #fff;" class="fa fa-search"></i></button>
				</span>
			</div>
		</form>			
    </div>
	</div>
</nav>
</body>
</html>