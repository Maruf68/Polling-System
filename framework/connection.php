<?php

function GetDb(){
    $serverName="localhost";
    $userName="root";
    $password="";
    $databaseName="wt-poll_v-4";


    $db = new mysqli($serverName,$userName, $password,$databaseName);

    // Check connection
    if ($db -> connect_errno) {
      echo "Failed to connect to MySQL: " . $db -> connect_error;
      exit();
    }
    return $db;
}

?>