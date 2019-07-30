<?php

require('request.php');

?>
<!DOCTYPE html>
<html>

<head>
	<title>Zadatak 3</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="weather" id="weather">
			<?php

			require('content.php');

			?>
		</div>
	</div>
	<script src="main.js"></script>
</body>

</html>