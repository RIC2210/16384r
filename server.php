<?php
error_reporting(E_ALL || ~E_NOTICE);
header("Content-type:text/html;charset=utf-8");
include_once("dataserver.php");
$user=$_POST['user'];
if($user==$user1){
echo 'true';
}else if($user==$user2){
echo 'true';
}else{
echo 'false';
}

/* Tinggal tambah :
if($user==$user1){
echo 'true';
}else if($user==$user2){
echo 'true';
}else if($user==$user3){
echo 'true';
}else if($user==$user4){
echo 'true';
}else if($user==$user5){
echo 'true';
}else{
echo 'false';
}
*/
 ?>