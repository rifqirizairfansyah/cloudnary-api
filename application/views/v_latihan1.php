<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
	<h2>Latihan Attribut method</h2>
		<form action="<?php echo base_url().'index.php/latihan/method';?>" method="GET">
			<table>
				<tr>
					<td>Nilai 1</td>
					<td><input type="number" name="nilai1"></td>
				</tr>
				<tr>
					<td></td>
					<td><select name="operasi">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">:</option>
					</select></td>
				</tr>
				<tr>
					<td>Nilai 2</td>
					<td><input type="number" name="nilai2"></td>
				</tr>
				<tr>
					<td><input type="submit" name="hitung"></td>
				</tr>
			</table></form>
</body>
</html>