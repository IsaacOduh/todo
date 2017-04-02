
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $page_title; ?></title>

	<!-- some custom CSS -->
	<style type="text/css">
		.left-margin{
			margin: 0 .5em 0 0;
		}
		.right-button-margin{
			margin: 0 0 1em 0;
			overflow: hidden;
		}
		/*some changes in bootstrap modal*/
		.modal-body{
			padding:20px 20px 0px 20px !important;
			text-align: center !important;
		}
		.modal-footer{
			text-align: center !important;
		}
	</style>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="libs/css/bootstrap/css/bootstrap.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="libs/css/style.css">
</head>
<body>
	<!-- container -->
	<div class="container">
		<?php 
			//show page header
			echo "<div class='page-header'>";
				echo "<h1>{$page_title}</h1>";
			echo "</div>";
		?>
	