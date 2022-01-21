<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3</title>
</head>
<body>
	<h2>Latihan Session Login</h2>
	<form action="<?php echo base_url().'index.php/latihan3/cek_login'; ?>" method="POST"> 
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>

</body>
</html>