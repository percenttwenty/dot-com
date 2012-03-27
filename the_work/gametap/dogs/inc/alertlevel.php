<?php
	//alertlevel can be 8, 16, 32, 64, or 128.
	$alertlevel = "128";


	//path to images directory (all pages except landing are ../)
	global $imagepath;
	if($imagepath == "") $path = "../";
	else $path = "./";

	//fallback, just in case
	if(($alertlevel != "8") && ($alertlevel != "16") && ($alertlevel != "32") && ($alertlevel != "64") && ($alertlevel != "128")) $alertlevel = "8";

	echo "<a href=\"" . $path . "debriefing/alert.php\"><img src=\"" . $path . "images/alert_" . $alertlevel . "bit.gif\" width=\"194\" height=\"39\" alt=\"Current Danger Alert Level: " . $alertlevel . "-bit\" id=\"alert_level\" /></a>";

?>