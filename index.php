<<<<<<< HEAD
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML Table</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
    <style>
      table {
        border-collapse: collapse;
        border: 2px solid red;
        margin: 20px;
      }
      th, td {
        padding: 10px;
        border: 2px solid violet;
      }
    </style>
  </head>
  <body>
    <div class="col-md-6">
        <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>John</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Sarah</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Mike</td>
            <td>28</td>
        </tr>
        </table>
    </div>
    <br>
<div class="col-md-6">
    <form method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"> 
    <br>
      <label for="age">Age:</label>
      <input type="number" id="age" name="age">
    <br>
      <button class="btn btn-outline-dark" type="submit">Submit</button>
    </form>
    </div>
    <div class="col-md-4">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $age = $_POST["age"];
            echo "<table>";
            echo "<tr><th>Name</th><th>Age</th></tr>";
            echo "<tr><td>$name</td><td>$age</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
  </body>
</html>
=======
>>>>>>> 675b13678e6815a808bc93c0b7e89d1de7514dd9
