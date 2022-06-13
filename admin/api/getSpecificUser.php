<?php
include "connect.php";
$id="N443I";
$sql="SELECT * FROM `dataentry` where `uid`='$id'";
$ans=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$riw=mysqli_fetch_assoc($ans);
$data=array("name"=>$riw["name"],"email"=>$riw["email"],"mobile"=>$riw["mobile"],"game"=>$riw["game"],"branch"=>$riw["branch"],"semester"=>$riw["semester"],"payment status"=>$riw["payStat"]);
echo json_encode($data);




?>