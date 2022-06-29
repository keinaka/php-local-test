<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if($_POST["logout"] == 'Logout'){
    $_SESSION["login_name"] = '';
    $is_login = 'false';
}elseif(($_POST["email"] && $_POST["password"]) || $_SESSION["login_name"]){
    $login_name = '';
    if($_POST["email"] && $_POST["password"]){
        $_SESSION["login_name"] = $_POST["email"];
        $login_name = $_POST["email"];
    }else{
        $login_name = urldecode($_SESSION["login_name"]);
    }
    $is_login = 'true';
}else{
    $is_login = 'false';
}
if($is_login == 'true'){
    $header_html = '
        <span>Hello ' . $login_name . '! </span>
        <input type="submit" id="logout" data-trackable="login" name="logout" value="Logout" >
    ';
}else{
    $header_html = '
        <input type="text" placeholder="Email" name="email" id="email" />
        <input type="password" placeholder="Password" name="password" id="password" />
        <input type="submit" id="login" data-trackable="login" name="login" value="Login" >
    ';
}

?>