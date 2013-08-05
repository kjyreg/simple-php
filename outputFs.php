<?php

/****************************************************************************************
* This file contains the basic (plain html) functions
*****************************************************************************************/

require_once("includes.php");


function dispHeader($header)
{
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php $header ?></title>
<link href="css/reset.css" rel="stylesheet" media="screen">
</head>

<body>
<p> Test page of Agrimi Web Server </p>
<?php
}

/************************************************
* this function displays the footer that is included
* in every webpage of the site.
*************************************************/
function dispHomeContent()
{
?>

    
<?php
}

function dispWorkContent()
{
?>


<?php
}

function dispPubContent()
{
?>

<?php
}

function dispAboutContent()
{
?>

<?php
}

function unusedContent()
{
?>

<?php
}


function dispContContent($report=NULL)
{
?>

<?php
}

function dispStuffContent()
{
?>


<?php
}

/************************************************
* this function displays the footer that is included
* in every webpage of the site.
*************************************************/
function dispFooter()
{
?>
  </div>
</div>
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script> 
<script type="text/javascript" src="js/jquery_003.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>
<?php
}

?>
