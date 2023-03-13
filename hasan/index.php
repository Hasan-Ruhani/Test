<?php
// Start session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] ?? '' == "POST") {
    // Check if all fields are filled out
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
        echo "Please fill out all fields.";
    } else {
        // Validate email
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
        } else {
            // Upload profile picture  
            $uploads_dir = 'uploads/';
            $tmp_name = $_FILES["profile-picture"]["tmp_name"];
            $name = basename($_FILES["profile-picture"]["name"]);
            $ext = pathinfo($name, PATHINFO_EXTENSION);
            $new_name = uniqid() . '_' . date('YmdHis') . '.' . $ext;
            $upload_path = $uploads_dir . $new_name;
            if (move_uploaded_file($tmp_name, $upload_path)) {
                // Save user information to CSV file
                $user_info = array($_POST["name"], $_POST["email"], $new_name);
                $file = fopen("C:\\xampp\\htdocs\\Test\\hasan\\users.csv", "r+");
                fputcsv($file, $user_info);
                fclose($file);

                // Set cookie
                $name = $_POST["name"];
                setcookie("user_name", $name, time()+3600);

                // Display success message
                echo "Registration successful.";
            } else {
                // Display error message
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<form method="POST" action="function.php" enctype="multipart/form-data">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>

		<label for="profile-picture">Profile Picture:</label>
		<input type="file" id="profile-picture" name="profile-picture" accept="image/*"><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>

