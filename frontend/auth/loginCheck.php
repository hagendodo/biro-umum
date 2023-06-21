<?php

include_once "../../backend/Session.php";

$session = new Session();
if(!$session->isLogin()){
    header('Location: /biro-umum/frontend/auth/login.php');
}
