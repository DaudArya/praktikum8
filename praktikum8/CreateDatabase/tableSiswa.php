<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siswa";

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}

//create table
$sql = "CREATE TABLE siswa (id INT(10) 
UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
jnsp VARCHAR(10) NOT NULL, 
tglm VARCHAR(12) NOT NULL,
nis VARCHAR(50) NOT NULL,
npu VARCHAR(50) NOT NULL,
paud VARCHAR(10) NOT NULL,
tk VARCHAR(10) NOT NULL,
skhu VARCHAR(50) NOT NULL,
ijz VARCHAR(50) NOT NULL,
hb VARCHAR(20) NOT NULL,
ct VARCHAR(30) NOT NULL,
nama VARCHAR(50) NOT NULL,
gndr VARCHAR(15) NOT NULL,
nisn VARCHAR(20) NOT NULL,
nik VARCHAR(20) NOT NULL,
tpl VARCHAR(20) NOT NULL,
tl VARCHAR(11) NOT NULL,
rlg VARCHAR(15) NOT NULL,
bk VARCHAR(20) NOT NULL,
almt VARCHAR(70) NOT NULL,
kdp VARCHAR(5) NOT NULL,
sttg VARCHAR(20) NOT NULL,
trns VARCHAR(20) NOT NULL,
hp VARCHAR(13) NOT NULL,
mail VARCHAR(50) NOT NULL,
kps VARCHAR(6) NOT NULL,
nkps VARCHAR(30) NOT NULL,
reg VARCHAR(10) NOT NULL,
dad VARCHAR(30) NOT NULL,
ybd VARCHAR(12) NOT NULL,
std VARCHAR(20) NOT NULL,
wd VARCHAR(30) NOT NULL,
sd VARCHAR(100) NOT NULL,
dd VARCHAR(30) NOT NULL,
mom VARCHAR(30) NOT NULL,
ybm VARCHAR(12) NOT NULL,
stm VARCHAR(20) NOT NULL,
wm VARCHAR(30) NOT NULL,
sm VARCHAR(100) NOT NULL,
mm VARCHAR(30) NOT NULL)";

if (mysqli_query($conn,$sql)){
        echo "Database Table Created Successfully";
    } else {
        echo "Error Creating Database : " .mysqli_error($conn);
    }
    mysqli_close($conn);
?>