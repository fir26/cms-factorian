<!DOCTYPE html>
<html>
	<head>
		<?php include('elements/header.php'); ?>
	</head>
	<body>
		<?php
			$a = new Area('Contenu');
			$a->display($c);
		?>
		<?php include('elements/footer.php'); ?>
	</body>
</html>