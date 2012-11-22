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
	
	// Generate Passcode
	$app->post('/passcode', function () {
		// Include function to generate APRS Code
		require('aprs_func.php');
		
		// Store Passcode
		$passcode = aprspass($_POST['callsign']);
		
		// Load Page
		require('templates/passcode.php');
	});


	// Run slim
	$app->run();
	
?>