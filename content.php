<?php

date_default_timezone_set("Serbia/Belgrade");
if ($weather) {
	echo '<div class="alert alert-success" role="alert"><h1>' . $weather . ", and the time is " . date('H:i:s') . '</h1></div> ';
}
