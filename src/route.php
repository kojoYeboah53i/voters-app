<?php 
header ("Access-Control-Allow-Origin: *"); 
session_start();
include 'engine.php';

$function = $_GET['func'];

if (function_exists($function)) {

      $function();

}