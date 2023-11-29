<?php
header("Content-Type: text/html; charset=utf-8");
include("lib/vendor/autoload.php");

$dispatch=new Classes\ClassDispatch();
include($dispatch->getInclusao());