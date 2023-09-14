<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ADMIN</title>
	<link rel="stylesheet" type="text/css" href="assets/css/loginstyle.css">
</head>
<body>
     <form action="masuk.php" method="post">
     	<h2>LOGIN ADMIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="Username" required><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" required><br>

     	<button type="submit">Login</button>
      <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
     </form>
</body>
</html>