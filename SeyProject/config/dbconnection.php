<?php
    define('ROOT_URL','http://localhost/ExcelWebDev/SeyProject/home.php');
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','feval');
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if(mysqli_connect_errno()){
    echo 'Failed to connect to MYSQL'.mysql_connect_errno();
}

?>