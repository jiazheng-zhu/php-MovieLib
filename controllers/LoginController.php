<?php


namespace App\Controllers;

use App\Core\App;
class LoginController
{

    public function login(){
        if(isset($_POST) and !empty($_POST)){
           $data =  App::get('database')->selectOne("user",[],['username' =>  $_POST['username'],"password"=> $_POST['password']]);
           if($data){
               session_start();
               $_SESSION['userInfo'] =[
                   'id'=>$data[0]->id,
                    'username'=>$data[0]->username,
               ];
               header('Location: /index.php/myfavorite');

           }
        }
        return view('login');
    }



    public function logout(){
        logout();
        header('Location: /index.php/login/login');
    }

}