<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTINS');
header('Access-Control-Allow-Headers: Origin,Content-Type,X-Auth-Token');
$res = json_decode(file_get_contents("php://input"));
$username=$res->username;
$password=$res->password;
if(strcmp($username,"admin")==0){
    if(strcmp($password,"admin123")==0) {
        echo json_encode(["des"=>1]);
    }else{
        echo json_encode(["des"=>0]);
    }
}else{
    echo json_encode(["des"=>0]);
}

?>