<?php
include "connect.php";
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$sql="SELECT * FROM `dataentry` WHERE `payStat`='pending'";
$ans=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$riw=mysqli_num_rows($ans);
$output=[];
$c=0;
// echo $riw;
if($riw>0){
    while($row=mysqli_fetch_assoc($ans)){
        // $output[$c]["name"]= $row["name"];
        $output[$c] = $row;
        $c++;
    }
}
echo json_encode($output);
?>