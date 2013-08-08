<?php
/****************************************************************************************
* This function contains all the appropriate statements to be included in every file.
*****************************************************************************************/

$BASE = "bower_components";
$FILE_VARS['bs-css'] = "$BASE/bootstrap/dist/css/bootstrap.min.css";
$FILE_VARS['bs-js'] = "$BASE/bootstrap/dist/js/bootstrap.min.js";
$FILE_VARS['bs-js-dd'] = "$BASE/bootstrap-js-dropdown/index.js";
$FILE_VARS['jq'] = "$BASE/jquery/jquery.min.js";
$FILE_VARS['rsp'] = "$BASE/respond/respond.min.js";

require_once("outputFs.php");
require_once("mainFunctions.php");
?>
