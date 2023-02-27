<?php
	include_once("Task3.php");
	include_once("Task2.php");

	if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
		$abc = new MyPerson();
		$abc->setName($_POST["name"]);
		$abc->setEmail($_POST["email"]);
	}
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
    <style>
		body{
			background-image: url('img_girl.jpg');

		}
		.col {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%;
			border: solid bisque;
			padding-bottom: 200px;
			margin: 45px 7px;
			padding-top: 30px;
			background: bisque;
			border-radius: 10px;
		}
		h1 {
			font-size: 2rem;
			font-family: roboto;
			font-weight: 600;
			color: lightslategrey;
		}
	</style>
    <body>
		<div class="container text-center">
			<div class="row">
				<div class="col">
					<form method="POST">
						<h1>Task-01</h1>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<label for="name" class="input-group-text">Name:</label><br>
								</div>
								<input type="text" id="name" name="name" placeholder="Name" required><br>
							</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="email" class="input-group-text">Email:</label><br>
							</div>
							<input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
						</div>
						<div class="form-group" text="center">
							<input type="submit" value="Submit" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="col">
					<h1>Task-02</h1>
					<p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium totam distinctio 
						consequatur ad quis corporis at aliquam natus commodi aliquid deleniti tempore dicta harum, 
						illum quibusdam, quidem, aperiam reiciendis provident.
					</p>

					<?php
						echo "Name: " . $person->getName() . "<br>";
						echo "Email: " . $person->getEmail() . "<br>";
					?>
				</div>
				<div class="col">
					<h1>Task-03</h1>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium totam distinctio 
						consequatur ad quis corporis at aliquam natus commodi aliquid deleniti tempore dicta harum, 
						illum quibusdam, quidem, aperiam reiciendis provident.
					</p>

					<?php
						echo "Name: " . $abc->getName() . "<br>";
						echo "Email: " . $abc->getEmail() . "<br>";
					?>
				</div>
			</div>
		</div>
    </body>
</html>