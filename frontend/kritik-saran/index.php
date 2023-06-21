<?php

include_once "../../backend/Session.php";
include_once "../../backend/Authentication.php";

$auth = new Authentication();

if($auth->roleCheck('admin')){
    header('Location: admin.php');
}else if($auth->roleCheck('user')){
    header('Location: user.php');
}

?>