<?php

$e = $_SERVER["REDIRECT_STATUS"];

switch($e){
	case 0:
		break;
	case 602:
		$m = array("Coming Soon","This page is coming in the near future.");
		break;
	case 400:
		$m = array("Bad Request","Your client sent a bad request.");
		break;
	case 401:
		$m = array("Banned IP","Your IP address has been banned from this server");
		break;
	case 402:
		$m = array("No Payment","The requested resource requires a paid subscription.");
		break;
	case 403:
		$m = array("Forbidden","You are forbidden to access this page");
		break;
	case 404:
		$m = array("Not Found","The requested file was not found on this server.");
		break;
	case 405:
		$m = array("Method Forbidden","That request method is not supported for the requested resource.");
		break;
	case 406:
		$m = array("Incorrect Content","The requested resource did'nt generate the correct content.");
		break;
	case 500:
		$m = array("Internal Server Error","The server couldent process your request.");
		break;
	case 502:
		$m = array("Bad Gateway","The server coulden't process it's own request.");
		break;
	case 503:
		$m = array("Service Unavailable","The server is currently down.");
		break;
	case 504:
		$m = array("Gateway Timeout","The server couldent process your request fast enough.");
		break;

}

?>

<html>
	<head>

		<meta name="theme-color" content="#F44336">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
		<link rel="stylesheet" href="/error/src/style.css"/>
		<link rel="fav icon" href="/error/src/img.png"/>
		<title><?php echo "$e - $m[0]";?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	</head>

	<body>

		<div class="card">
			<br><br>
			<span class="enum">Error <?php echo $e; ?></span>
			<br><br><br><hr><p><?php echo $m[1]; ?></p>
			<center>
				<?php
					if($e < 400){
						echo '<a href="'. "http://" . $newurl .'"><i class="material-icons">&#xE409;</i></a>';
					} else {
						echo '<a href="'. "http://" . $_SERVER['HTTP_HOST'] .'"><i class="material-icons">&#xE88A;</i></a>';
					}
				?>
			</center>
		</div>

	</body>
</html>
