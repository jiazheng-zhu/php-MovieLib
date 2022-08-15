<?php


namespace App\Controllers;


use App\Core\App;

class DirectorController
{
    public $config =[
        'table'=>"director",
        'label'=>['Id','Name','LastName'],
        'fields'=>['id','name','lastname'],
        "attribute"=>['id','name','lastname'],
    ];



    public function index() //list all the books
    {
        $config =$this->config;
        $fields = $config['fields'];
        $table['data']= App::get('database')->selectAll($config['table']);
        $data =array_merge($config,$table);

        return view($config['table'].'/index', compact('data'));
    }

    public function show() // show slingle book
    {
        $config =$this->config;
        $fields = $config['fields'];
        $table['data'] = App::get('database')->selectOne($config['table'],[],['id'=>$_GET['id']]);
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