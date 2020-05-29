<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-dark">
<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 mx-auto mt-5">
				<div class="card shadow bg-secondary">
					<div class="card-body pl-5 pr-5 pt-3 pb-3 text-center">
						<form method="post" action="">
							<h2 class="mb-3">Register your self</h2>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="mobile" placeholder="Mobile">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-block btn-success text-white">Register</button>
						</form>	
					</div>
				</div>
				
		</div>
	</div>


<?php

if (isset($_POST['username'])&&isset($_POST['mobile'])&&isset($_POST['email'])&&isset($_POST['password'])){
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

    $sql = "INSERT INTO users (username, mobile, email, password)
VALUES ('$username', '$mobile', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}
?>
	</div>
</body>
</html>


