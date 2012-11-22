<?php

	// Load Slim
	require 'Slim/Slim.php';

	$app = new Slim();

	// Functions
	//GET route
	$app->get('/', function () {
		// Require HTML Template
		require('templates/main.php');
	});
	
	$app->post('/passcode', function () {
		require('aprs_func.php');
		echo aprspass($_POST['callsign']);
	});


	// Run slim
	$app->run();
	
?>