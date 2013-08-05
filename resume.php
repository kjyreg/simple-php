<?php

/****************************************************************************************
*	Tests files for Agrimi Web Server
*****************************************************************************************/

require_once("includes.php");

try
{	
	dispHeader('');
	dispHomeContent();
	dispWorkContent();
    dispPubContent();
	dispAboutContent();
	dispContContent($report);
	dispStuffContent();
	dispFooter();
	if($report!=NULL) echo "<script> window.location.hash = '#contact' </script>";
}
catch(Exception $e)
{
	dispHeader("Error:");
	echo $e->getMessage();
	dispFooter();
	exit;
}      

?>
