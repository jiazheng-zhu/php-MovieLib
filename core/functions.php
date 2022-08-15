<?php
session_start();
function view($view, $data = []) {
    extract($data);
    require "views/{$view}.view.php";
}




function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
function getUser(){

    if(isset($_SESSION['userInfo'])){
        return $_SESSION["userInfo"];
    }else{
        return false;
    }
}
function getUserId(){
    return isset($_SESSION['userInfo']) ? $_SESSION['userInfo']['id'] : false;
}
function getUserName(){
    return isset($_SESSION['userInfo']) ? $_SESSION['userInfo']['username'] : false;
}
function  logout(){
    unset($_SESSION['userInfo']);
}


