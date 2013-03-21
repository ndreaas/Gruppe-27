<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "test123";
$db_name = "dtbd_database";

@mysql_connect ("$db_host","$db_username","$db_pass") or die ("Could not connect to server");
@mysql_select_db ("$db_name") or die ("404 (Server) not found");



echo"Server connection successful";
?>