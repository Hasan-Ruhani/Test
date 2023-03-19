<?php
    session_start([
        'cookie_lifetime => 300',
    ]);
    $error = false;

    if (!isset($_SESSION['loggedin'])) {
        $_SESSION['loggedin'] = false;
    }

    if(isset($_POST['uName']) && isset($_POST['password'])){
        if('admin' == $_POST['uName'] && '6d0ebbbdce32474db8141d23d2c01bd9628d6e5f' == sha1($_POST['password'])){   // ('6d0ebbbdce32474db8141d23d2c01bd9628d6e5f' = rabbit) its convart with "sha1" methode
            $_SESSION['loggedin'] = true;                                                                           // example <?php echo sha1("rabbit");                                          
        }

        else{
            $_SESSION['loggedin'] = false;
            $error = true;
        }
    }

    if(isset($_POST['logout'])){
        $_SESSION['loggedin'] = false;
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
    <style>
		body{
			background-color: #615d8329;
		}
		.col {
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			-ms-flex-positive: 1;
			flex-grow: 1;
			max-width: 100%;
			border: rgb(67 137 50 / 11%);
			padding-bottom: 100px;
			margin: 45px 7px;
			padding-top: 30px;
			background: rgb(67 137 50 / 11%);
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
                    <h1> 
                        <?php
                            if($_SESSION['loggedin'] == true){
                                echo "Hello admin, welcome your new journey";
                            }
                            else{
                                echo "Hello Stanger, please login below!!";
                            }
                        ?>
                    </h1>
                    <?php
                        if(false == $_SESSION['loggedin']) :
                    ?>
                    <form method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <label for="name" class="input-group-text">User Name:</label><br>
                            </div>
                            <input class="form-control" type="text" id="uName" name="uName" placeholder="user name or e-mail" required><br>
                        </div>
                        <div class="input-group form-group">
							<div class="input-group-prepend">
								<label for="password" class="input-group-text">Password:</label><br>
							</div>
							<input class="form-control" type="password" id="password" name="password" placeholder="password" required>
						</div>
						<div class="btn float-right login_btn">
							<button type="submit" name="submit" class="btn btn-outline-dark">Log In</button>
						</div>
                        <?php 
                            if($error){
                                echo "<blockquote>user name or password didn't match</blockquote>";
                            }
                        ?>
					</form>
                    <?php
                        else:
                    ?>
                    <form action="useSession.php" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="btn btn-outline-dark" name="submit">Log Out</button>
                    </form>
                    <?php
                        endif;
                    ?>
				</div>
			</div>
		</div>
    </body>
</html>