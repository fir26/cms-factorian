<?php $view->inc('elements/header.php'); ?>
		<header>
			<?php
				$a = new Area('Diaporama');
				$a->display($c);
			?>
		</header>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php
							$a = new Area('Col1');
							$a->display($c);
						?>
					</div>
					<div class="col-md-4">
						<?php
							$a = new Area('Col2');
							$a->display($c);
						?>
					</div>
					<div class="col-md-4">
						<?php
							$a = new Area('Col3');
							$a->display($c);
						?>
					</div>
				</div>
			</div>
			<div class="well">
				<div class="container">
					<div class="row">
						<?php
							$a = new Area('CTA');
							$a->enableGridContainer();
							$a->display($c);
						?>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php
						$a = new Area('Contenu');
						$a->enableGridContainer();
						$a->display($c);
					?>
				</div>
		</section>
<?php $view->inc('elements/footer.php'); ?>