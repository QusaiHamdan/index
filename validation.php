<?php

$email = $_GET['email'];
$password = $_GET['password'];

$CFlag = "0";

if(empty($email)){
    $CFlag = "Please_Enter_User_Name_:) ";
}else{
    if(empty($password)){
        $CFlag = "Please_Enter_Your_password_:)";
}
}
if($CFlag == "0"){
    $CFlag = "welcome ".$email; 
    header('Location: task1.php?result= '.$CFlag);
    exit;
}else{
    header('Location: index.php?result='.$CFlag);
    exit;
}


?>