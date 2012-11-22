<?php

function aprspass ($callsign) { 
	$stophere = strpos($callsign, '-'); 
	if ($stophere) $callsign = substr($callsign, 0, $stophere); 
	$realcall = strtoupper(substr($callsign, 0, 10)); 

	// initialize hash 
	$hash = 0x73e2; 
	$i = 0; 
	$len = strlen($realcall); 

	// hash callsign two bytes at a time 
	while ($i < $len) { 
		$hash ^= ord(substr($realcall, $i, 1))<<8; 
		$hash ^= ord(substr($realcall, $i + 1, 1)); 
		$i += 2; 
	} 

	// mask off the high bit so number is always positive 
	return $hash & 0x7fff; 
} 

?>