<?php
include "connect.php";
$sql="SELECT * FROM `dataentry` ORDER BY `count` DESC LIMIT 6";
$ans=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$riw=mysqli_num_rows($ans);
$output = [];
$c=0;
if($riw>0){
    while($row=mysqli_fetch_assoc($ans)){
        // $output[$c]["name"]= $row["name"];
        $output[$c] = $row;
        $c++;
    }
}
echo json_encode($output);
// $enty;
// $cunt=0;
// $entry_ar=[];
// while($row=mysqli_fetch_assoc($ans)){
//     if($cunt!=$enty){
//         $entry_ar[$cunt]=$row["count"];
//         $cunt++;
//     }
//     else{
//         break;
//     }  
// }
// $data=[];
// for($i=0;$i<sizeof($entry_ar);$i++){
//     $data[$i]=fount($entry_ar[$i]);
// }

// //print_r($data);
// echo json_encode($data);

// function fount($sl){
//     global $connection;
//     $query="SELECT * FROM `dataentry` where `count`='$sl'";
//     $aens=mysqli_query($connection,$query);
//     while($riw=mysqli_fetch_assoc($aens)){
//          $arry=array("name"=>$riw["name"],"count"=>$riw["count"],"mobile"=>$riw["mobile"],"game"=>$riw["game"],"branch"=>$riw["branch"],"semester"=>$riw["semester"],"payment status"=>$riw["payStat"]);
//     }
//     return $arry;
// }
?>