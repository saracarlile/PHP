<?php
/* $GLOBALS in php is an associative array that contains references to all variables which are currently defined in the global
scope of the script */

	function WritePage($pagetitle, $description, $pageheading, $forwardlink = "", $backlink = "") {
		$GLOBALS["forwardlink"] = "$forwardlink"; /* assigns the global variable forwardlink to the arguement passed into $forwardlink in the function WritePage */
		$GLOBALS["backlink"] = "$backlink";
		echo "<br>"."<br>".$pagetitle."<br>".$description."<br>".$pageheading."<br>".$GLOBALS["forwardlink"]."<br>".$GLOBALS["backlink"];	
	}


WritePage(
		"Page Title - PHP Globals",
		"A page description for PHP Globals goes here.",
		"PHP Globals - Example",
		"optional-forwardlinks",
		"optional-backlink" 

	);
	

?>




<div id="centerWrap">
	<?php PrevNext($GLOBALS["backlink"]	, $GLOBALS["forwardlink"]); ?>
	<div id="center">