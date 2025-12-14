<?php

echo "connecting php to mysql database. " .  "<br>";

// ways.

// 1. MySQLi extention
// 2. PDO  

// vatiable

$servername  = "localhost";
$username  = "root";
$password  = "root12"; //no space
$db_name = "php_db";

// connection object

$conn = mysqli_connect($servername, $username, $password, $db_name);

// check connection
if (!$conn) {
    die("sorry we failed to connect " . mysqli_connect_error());
} else
    echo "Connection successfull !";

// create table

$sql = "create table st_record(
f_name CHAR(20),
l_name CHAR(20),
Age INT
)";

// execute query

// if (mysqli_query($conn, $sql)) {
//     echo "<br>Table STUDENT created successfully";
// } else
//     echo "<br>Error in creating table " . mysqli_connect_error();

// select query

$select = "desc st_record";

// checking data

if (mysqli_query($conn, $select)) {
    echo "select data : " . $select;
} else {
    echo "<br>Error in fetching table data " . mysqli_connect_error();
}



// closing conection
mysqli_close($conn);
