<!DOCTYPE html>
<html lang="<?= LOCATE_APP ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?= NAME_APP ?></title>
	<?php include "views/layouts/css.php" ?>
	<link rel="stylesheet" href="<?= RESOURCES ?>css/styles.css">
</head>
<body class="bg-light">
	<?php include "views/layouts/menu.php"; ?>
	<?php include "views/layouts/header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a href="<?= URL ?>" class="nav-link active">Nuevos</a></li>
					<li class="nav-item"><a href="<?= URL ?>" class="nav-link">Ofertas</a></li>
				</ul>
			</div>
		</div>
	</div>

	<?php include "views/layouts/footer.php"; ?>
	<?php include "views/layouts/scripts.php"; ?>
</body>
</html>