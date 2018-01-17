<?php

	require_once 'assets/lib/twelve_days.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>12 Days of Christmas</title>

	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div id="glass">

		<h1>
			<?php echo getTitle(); ?>
			<i class="fa fa-microphone animated flash infinite" aria-hidden="true" onclick="changeColor()"></i>
		</h1>

		<div class="wrapper clear">

			<p>
				<?php echo getLyrics(); ?>
			</p>

		</div>

	</div>

	<script src="assets/js/script.js"></script>

</body>
</html>

