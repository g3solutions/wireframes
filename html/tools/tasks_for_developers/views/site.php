<html lang="en">

	<?php require_once $documentRoot . '/assets/head.php' ?>

	<body>
		<div class="container-fluid">

			<?php require_once '_navbar.php' ?>

		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">

					<?php require_once '_sidebar.php' ?>

				</div>
				<div class="col-md-10">

					<?php require_once $content ?>

				</div>
			</div>
		</div>
	</body>
</html>