<?php


namespace App\Controllers;


use App\Core\App;

class MovieController
{
    public $config =[
        'table'=>"movie",
        'label'=>['Id','Movie Name','Director',"Year"],
        'fields'=>['movie.id','movie.movie_name','director.name','director.lastname','movie.year'],
        "attribute"=>['id','movie_name',["name","lastname"],'year'],
    ];



    public function index() //list all the books
    {
        $config =$this->config;
        $fields = $config['fields'];
        $table['data']= App::get('database')->selectAll($config['table'],"director",$config['fields'],"director_id");
        $data =array_merge($config,$table);

        return view($config['table'].'/index', compact('data'));
    }

    public function show() // show slingle book
    {
        $config =$this->config;
        $fields = $config['fields'];
        $table['data'] = App::get('database')->selectAll($config['table'],"director",$config['fields'],"director_id",['movie.id'=>$_GET['id']]);

        $data =array_merge($config,$table);
        return view($config['table'].'/show', compact('data'));
    }

    public function create() //display the form
    {
        $config =$this->config;
        $data =$config;
        $table['director'] = App::get('database')->selectAll("director" );
        $data = array_merge($config,$table);
        return view($config['table'].'/create', compact('data'));
    }

    public function store() //store created book
    {
        $config =$this->config;
        App::get('database')->insert($config['table'], $_POST);

        header('Location: /index.php/'.$config['table']);
    }

    public function edit() //show form for editing
    {

        $config =$this->config;
        $table['data'] = App::get('database')->selectOne($config['table'],[], ['id' => $_GET['id']]);
        $table['director'] = App::get('database')->selectAll("director" );

        $data =array_merge($config,$table);
        return view($config['table'].'/edit', compact("data"));
    }

    public function update() //store edited book
    {
        $config =$this->config;
        App::get('database')->update($config['table'], $_POST);

        header('Location: /index.php/'.$config['table']);
    }

    public function destroy() //delete the book
    {

        $config =$this->config;
        App::get('database')->delete($config['table'], $_GET['id']);

        header('Location: /index.php/'.$config['table']);
    }
}