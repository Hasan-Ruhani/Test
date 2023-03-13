<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Profile Picture</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Read user information from CSV file
				$file = fopen("C:\\xampp\\htdocs\\Test\\hasan\\users.csv", "r");
				if ($file !== FALSE) {
					while (($data = fgetcsv($file)) !== FALSE) {
						echo "<tr>";
						echo "<td>".$data[0]."</td>";
						echo "<td>".$data[1]."</td>";
						echo "<td><img src='uploads/".$data[2]."' width='100'></td>";
						echo "</tr>";
					}
					fclose($file);
				} else {
					echo "<tr><td colspan='3'>No data found</td></tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
