<?php
/*Mendefinisikan data server,username,password, dan nama database yang akan digunakan */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'siswa');

/*koneksi ke database MySql */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// pengecekan koneksi
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>