<?php

namespace App\Controllers;


use App\Core\App;

class MyFavoriteController
{
    public $config = [
        'table' => "movie",
        'label' => ['Id', 'Movie Name', 'Director', "Year",'Favorite'],
        'fields' => ['movie.id', 'movie.movie_name', 'director.name', 'director.lastname', 'movie.year',"movie.favorite"],
        "attribute" => ['id', 'movie_name', ["name", "lastname"], 'year','favorite'],
    ];


    public function index() //list all the books
    {
        if(getUser()){
            $config = $this->config;
            $fields = $config['fields'];
            $table['data'] = App::get('database')->selectAll($config['table'], "director", $config['fields'], "director_id");
            $data = array_merge($config, $table);
            return view( 'myfavorite/index', compact('data'));
        }else{
            header('Location: /index.php/login/login');
        }



    }


    public function update(){
        $config =$this->config;
        App::get('database')->update($config['table'], $_POST);

        header('Location: /index.php/myfavorite');
    }
}