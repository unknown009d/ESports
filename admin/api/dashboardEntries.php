<?php

include "connect.php";

$sql="SELECT * FROM `dataentry`";
$sqli="SELECT * FROM `dataentry` where `payStat`='pending'";

$ans=mysqli_query($connection,$sql);
$anss=mysqli_query($connection,$sqli);

$riw=mysqli_num_rows($ans);
$rpw=mysqli_num_rows($anss);

$field=array("totalStudent"=>$riw,"Pending"=>$rpw);

echo json_encode($field);

?>