<?php
define("HOSTNAME", "localhost");  //THIS is a consts
define("USERNAME", "root");
define("PASSWORD", "");
define("DTABASE", "crud-database");
 $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DTABASE);
 if(!$connection){
    die("Could not connect ");
 }
 ?>