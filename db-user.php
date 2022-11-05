<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "posttest_web";
// $db_email = "";
// $db_phone_num = "";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass);
if($koneksi){
    echo "koneksi sukses";
} else {  
    echo "koneksi gagal";
}  

?>