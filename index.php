<?php

include_once 'config.php';



?><!DOCTYPE html>
<html>
<head>
	<?php include_once 'Layouts/head.php'; ?>
</head>

<body class="desktop home">

	<div id="app">


		<!-- Header Topbar -->
		<?php require_once 'Themes/Header.php'; ?>
		<!-- End:Header Topbar -->

		<main id="main" class="main">


			<?php require WWW_COMPONENTS.'Carousel/index.php'; ?>
			
			
			<div id="content">
				<?php require_once 'View/Home/index.php'; ?>
			</div>
		</main>

		<?php require_once 'Themes/Footer.php'; ?>
	</div>
	
</body>
</html>