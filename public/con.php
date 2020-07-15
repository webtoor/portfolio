<?php

//$db_host     = 'localhost';
//$db_name     = 'devd1484_api_complaint';
//$db_user     = 'devd1484_complain';
//$db_password = 'Rahasia88';


/* $db_host     = 'localhost';
$db_name     = 'api_walhi';
$db_user     = 'userwalhi';
$db_password = 'rumahkaca1920';
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name); */


$db_host     = 'localhost';
$db_name     = 'u7684897_api_bitponic';
$db_user     = 'u7684897_toor';
$db_password = 'Rahasia';
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$conn){
  echo "gagal". mysqli_connect_error();
}else {
  echo "berhasil";
}
 ?>
