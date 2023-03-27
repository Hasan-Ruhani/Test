<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
  </head>
  <body>
    <?php
      // Check if the form has been submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the form data
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Validate the form data
        $errors = array();

        if (empty($first_name)) {
          $errors[] = "First name is required";
        }

        if (empty($last_name)) {
          $errors[] = "Last name is required";
        }

        if (empty($email)) {
          $errors[] = "Email address is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = "Invalid email address";
        }

        if (empty($password)) {
          $errors[] = "Password is required";
        } elseif ($password != $confirm_password) {
          $errors[] = "Passwords do not match";
        }

        // Display the confirmation message or errors
        if (count($errors) == 0) {
          echo "<p>Thank you for registering, $first_name!</p>";
        } else {
          echo "<ul>";
          foreach ($errors as $error) {
            echo "<li>$error</li>";
          }
          echo "</ul>";
        }
      }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required><br>

      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required><br>

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required><br>

      <input type="submit" value="Register">
    </form>
  </body>
</html>
