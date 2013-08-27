<?php

/****************************************************************************************
* This file contains the basic (plain html) functions
*****************************************************************************************/
function dispHeader($header) {
  global $FILE_VARS;
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Agrimi test page | <?php echo $header; ?></title>
<link href="css/reset.css" rel="stylesheet" media="screen">
<script src="functions.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo $FILE_VARS['bs-css']; ?>" rel="stylesheet" media="screen">
</head>
<body>

<div class="navbar">
<div class="container">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Title</a>
  <div class="nav-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Link1</a></li>
      <li><a href="#">Link2</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action1</a></li>
          <li><a href="#">Action2</a></li>
          <li><a href="#">Action3</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a href="#">Action4</a></li>
          <li><a href="#">Action5</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form pull-right" action="index.php" method="get">
      <input type="text" class="form-control col-lg-8" placeholder="Search" name="search_box">
    </form>
  </div>
</div>
</div>

<br /> <br />

<div class="dropdown">
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
    <li><a tabindex="-1" href="#">Action</a></li>
    <li><a tabindex="-1" href="#">Another action</a></li>
    <li><a tabindex="-1" href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div>
<?php
}

/************************************************
* this function displays the footer that is included
* in every webpage of the site.
*************************************************/
function dispFooter() {
  global $FILE_VARS;
?>

<script type="text/javascript" src="<?php echo $FILE_VARS['jq']; ?>"></script>
<script type="text/javascript" src="<?php echo $FILE_VARS['bs-js']; ?>"></script>
<script type="text/javascript" src="<?php echo $FILE_VARS['rsp']; ?>"></script>
<script type="text/javascript" src="<?php echo $FILE_VARS['bs-js-dd']; ?>"></script>
</body>
</html>

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


?>
