<?php
include "connect.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$res = json_decode(file_get_contents("php://input"));

$id=$res->UID;
$sql="UPDATE `dataentry` SET `payStat`='paid' where `uid`='$id'";
$res=mysqli_query($connection,$sql) or die(mysqli_error($connection));
if($res){
    $output = array("des"=>1);
}else{
    $output = array("des"=>0, "error"=>$res);
}

echo json_encode($output);
?>