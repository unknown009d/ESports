<?php
include "connect.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$response = json_decode(file_get_contents("php://input"));

$c = 0;
$tid=$response->tid;  
// $tid="AIB".rand(10,1000);  
$t=date("d/m/y");
if(empty($tid)){
    $tid = 0;
}
$uid="N".rand(10,1000)."I";
$name=$response->name;
$gm=$response->games;
$mb=$response->mobile;
$name=$response->name;
$branch=$response->branch;
$sem=$response->sem;
$sql="INSERT INTO `dataentry`(`uid`,`name`, `branch`, `semester`, `game`, `mobile`, `TID`,`payStat`, `date`) 
 VALUES ('$uid','$name','$branch','$sem','$gm','$mb','$tid','pending','$t')";

$_Result=mysqli_query($connection,$sql) or die(mysqli_error($connection));

if($_Result){
    $output=array("des"=>1,"uid"=>$uid,"name"=>$name);
}
else{
    $output= array("des"=>0);
}

echo json_encode($output);


?>

