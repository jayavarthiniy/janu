<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Database Rows</title>
</head>
<body>
<div class="container">
<h1>IT Management Data</h1>
<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Gender</th>
<th>Role</th>
<th>Mobile</th>
</tr>
<?php
            require_once('connect.php');
            $result = $conn->query("SELECT * FROM employee");
            foreach($result as $rows) {
            ?>
<tr style="text-align:center">
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['gender'] ?></td>
<td><?php echo $rows['role'] ?></td>
<td><?php echo $rows['phone'] ?></td>
</tr>
<?php
            }
            ?>
</table>
<br><a href=" index.php">Insert</a>
</div>
</body>
</html>
