<?php

function aprspass ($callsign) { 
	// drop SSID and use only first 10 characters
	$call = strtoupper(substr(strtok($callsign,'-'), 0, 10));
	
	// make sure station len is even, convert and explode the data
	$parts = unpack("n*",strlen($call)%2?"$call\x00":$call);
	
	// initiate the hash and process the data
	$hash = 0x73e2; foreach($parts as $part) $hash ^= $part;

	// mask off the high bit so number is always positive 
	return $hash & 0x7fff; 
} 

?>
