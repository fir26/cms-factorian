<!DOCTYPE html>
<html>
	<head>
		<?php Loader::element('header_required'); ?>
		<meta charset="UTF-8" />
		<title>Factorian</title>
		<link href="<?php echo $view->getThemePath(); ?>/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $view->getThemePath(); ?>/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h1>FACTORIAN</h1>
					</div>
					<div class="col-md-9">
						<?php
							$a = new GlobalArea('Menu');
							$a->display($c);
						?>
					</div>
				</div>
			</div>
		</nav>