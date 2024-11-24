<?php
$server = 'aquasmartdb.mysql.database.azure.com';
$username = 'aquasmart';
$password = 'pentol123.';
$database = 'as_db';

if (isset($_POST))

    $conn = new mysqli($server, $username, $password, $database);
if ($conn) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($conn));
}
