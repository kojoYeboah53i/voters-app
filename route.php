<?php 
header ("Access-Control-Allow-Origin: *"); 
session_start();
include './src/engine.php';

$function = $_GET['func'];

if (function_exists($function)) {

      $function();

}