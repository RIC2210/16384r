<?php
error_reporting(E_ALL || ~E_NOTICE);
header("Content-type:text/html;charset=utf-8");
include_once("dataserver.php");
$user=$_POST['user'];
if($user==$user1){
echo 'true';
}else{
echo 'false';
}
