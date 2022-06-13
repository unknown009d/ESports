<?php
include "connect.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$data = json_decode(file_get_contents("php://input"));
$inpGame=$data->game;
$sql="SELECT * FROM `dataentry` WHERE `payStat`='paid'";
$res=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$cpoi=0;

while($row=mysqli_fetch_assoc($res)){
    $string= $row["game"];
    $str=explode(",",$string);
   
    for($i=0;$i<sizeof($str);$i++){
        if(str_contains($str[$i],$inpGame)){
            $pots[$cpoi]=array("name"=>$row["name"],"uid"=>$row["uid"],"branch"=>$row["branch"],"semester"=>$row["semester"],"mobile"=>$row["mobile"]);
            $cpoi++;
        }
    }

}

echo json_encode($pots); 
?>