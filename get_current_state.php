<?php

/*
 * Chris Drumgoole
 * cdrum@cdrum.com
 * http://www.cdrum.com
 * Last Updated: 26 October 2014
 *
 * This assumes you have the Ruby HTTP API service running somewhere on your local network. 
 * https://github.com/chendo/lifx-http  (v0.3)
 */

// Change these settings to match your environment
const RESTAPI_URL = "http://192.168.1.221:56780"; // Change the IP Address of your computer running the Ruby LIFX HTTP API

// Don't edit these
const PREFIX = "http.request{url='";
const SUFFIX = "', method='PUT', headers = {['Content-Length'] = string.len(''),['Content-Type'] = 'application/x-www-form-urlencoded'}}";

// Get the current state of the LIFX bulbs - all on network.
$result = json_decode(file_get_contents(RESTAPI_URL . "/lights.json"));

print "local http = require('socket.http')\n";
print "http.TIMEOUT = 20\n";
print "\n";

// Loop through each bulb
foreach($result as $bulb) {
	
	$state = ($bulb->on) ? "on" : "off";
	
	// Set the bulb's on off state
	print PREFIX . RESTAPI_URL . "/lights/" . $bulb->id . "/"  . $state . SUFFIX . "\n";

	if ($state == "on") {
		// set color
		print PREFIX . RESTAPI_URL . "/lights/" . $bulb->id . "/color?hue=" . $bulb->color->hue . "&saturation=" . $bulb->color->saturation . "&brightness=" . $bulb->color->brightness . "&kelvin=" . $bulb->color->kelvin.  SUFFIX . "\n";
	}
}

print "\n";
print "return true\n";
?>
