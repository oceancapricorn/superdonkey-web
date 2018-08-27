<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Complete Bootsrap 4 Website Layout</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link rel="stylesheet" type="text/css" href="../../css/main.css">
	</head>
	<body class="login">

		<div class="modal-dialog text-center">
			<div  class ="col-sm-8 main-section">
				<div class="modal-content">
					<div class="col-12 user-img">
						<img src="../../images/donkey2.png">
					</div>
					<div class="col-12 user-name">
						<h1>User Login</h1>
					</div>
					<div class="col-12 form-input">
						 <form action="index.php" method="post" autocomplete="off">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter email" name="email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" name="password">
							</div>
							<button type="submit" class="btn btn-success" name="login">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
			
	</body>
</html>
