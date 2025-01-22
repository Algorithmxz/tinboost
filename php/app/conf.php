<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//error_reporting(0);
//phpinfo();

$s = "db";
$u = "root";
$p = trim(file_get_contents("/run/secrets/db-password"));
$db = "tdx";  

$con = mysqli_connect($s, $u, $p, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$ap = sha1('Kashgrab13@');

// 0 = off
// 1 = on

?>