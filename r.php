FORM 1	FILE NAME : index.php
<html>
<head>
<title>IT Management</title>
</head>
<body>
<h1>IT Management</h1>
<form action="connect.php" method="POST">
        Name: <input type="text" name="name" required /><br><br>
        Gender: Male<input type="radio" name="gender" value="male" required />
        Female<input type="radio" name="gender" value="female" required /><br><br>
        Role: <input type="text" name="role" required /><br><br>
        Mobile: <input type="number" name="phone" required /><br><br>
<input type="submit" />
</form>
<a href="display.php">Show Data</a>
</body>
</html>
