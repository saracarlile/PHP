<?php
/* $GLOBALS in php is an associative array that contains references to all variables which are currently defined in the global
scope of the script */

	function WritePage($pagetitle, $description, $pageheading, $forwardlink = "", $backlink = "") {  /*not all pages need forward and back links, therefore a default value of blank is assigned so the function can be called without these two arguements */
		$GLOBALS["forwardlink"] = "$forwardlink"; /* assigns the global variable forwardlink to the arguement passed into $forwardlink in the function WritePage */
		$GLOBALS["backlink"] = "$backlink";
		echo "<br>"."<br>".$pagetitle."<br>".$description."<br>".$pageheading."<br>".$GLOBALS["forwardlink"]."<br>".$GLOBALS["backlink"];	
	}


WritePage(
		"Page Title - PHP Globals",
		"A page description for PHP Globals goes here.",
		"PHP Globals - Example",
		"/link/somplace/forward/",
		"/link/someplace/back/" 

	);


function PrevNext($back	, $forward){
	echo "<a href=".$back.">Back</a>";
	echo "<a href=".$forward.">Forward</a>";
	
}
	
?>




<div id="center">
	<?php PrevNext($GLOBALS["backlink"]	, $GLOBALS["forwardlink"]); ?>
</div>