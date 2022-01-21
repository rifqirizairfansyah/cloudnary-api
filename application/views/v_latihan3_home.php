<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Home</title>
</head>
<body>

	<?php
			echo "Selamat datang <b>".$this->session->userdata('username').'</b> di pemrograman web2';
			echo '<br> <a href="'.base_url().'index.php/latihan3/logout">Logout</a>';
	?>

</body>
</html>