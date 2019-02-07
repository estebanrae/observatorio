<!DOCTYPE html>
<html>
<head>
	<title>Observatorio de Periferias</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri();?>/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<?php
	$backWithLogo = true;
?>
<body style='background-image:url("<?= ($backWithLogo) ? includes_url('/images/observatorio/back-with-logo.jpeg') : includes_url('/images/observatorio/background.jpeg'); ?>");'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src='<?= get_template_directory_uri();?>/js/main.js'></script>
	<script type="text/javascript" src='<?= get_template_directory_uri();?>/js/auth.js'></script>
	<script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
	<div class="main-container">