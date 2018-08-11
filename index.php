<?php
error_reporting(E_ALL);
ini_set( "display_errors", 1 );
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title ="Building and working on HTML forms using PHP";
$pageData->content = include_once "views/navigation.php";
$pageData->content .= "<div>.....and another form here</div>";
$page =include_once "templates/page.php";
echo $page;
?>
