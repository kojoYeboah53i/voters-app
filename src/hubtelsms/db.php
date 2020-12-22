<?php

  // $connect = mysqli_connect("localhost", "root", "", "passbook");

      $dbhost = 'localhost';
$dbuser = 'vxkgn0fmfwww';
$dbpass = '3FebIsGd$ikT';
$dbname="TuaTuaGye Data";
$connect  = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

    if(!$connect){
      $console = "failed to connect to db";
    echo "<script> '.$console.' </script> ";

    }
