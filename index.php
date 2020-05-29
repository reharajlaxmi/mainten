<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maniten</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="bg-dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 mx-auto mt-5">
				<div class="card shadow bg-secondary">
					<div class="card-body pl-5 pr-5 pt-3 pb-3 text-center">
						<form method="get">
							<h2 class="mb-3">Log in</h2>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-block btn-outline-primary text-white">Log In</button>
						</form>	
					</div>
				</div>
				<a href="resister.php" class="text-center text-info">Create an Account</a>
			</div>
		</div>
	</div>
</body>
</html>