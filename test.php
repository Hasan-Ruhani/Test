<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">    
    </head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $users = [
        ["name" => "Mark", "last_name" => "Otto", "handle" => "@mdo"],
        ["name" => "Jacob", "last_name" => "Thornton", "handle" => "@fat"],
        ["name" => "Larry", "last_name" => "the Bird", "handle" => "@twitter"],
      ];
      
      $counter = 1;
      foreach ($users as $user) {
        echo "<tr>";
        echo "<th scope='row'>" . $counter . "</th>";
        echo "<td>" . $user['name'] . "</td>";
        echo "<td>" . $user['last_name'] . "</td>";
        echo "<td>" . $user['handle'] . "</td>";
        echo "</tr>";
        $counter++;
      }
    ?>
  </tbody>
</table>
</body>
</html>
