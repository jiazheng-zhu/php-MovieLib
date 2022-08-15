<?php

namespace App\Core\Database;

class QueryBuilder
{

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($tablename, $tablename2 = "", $fields = [], $foreignKey = "", $filter = [])
    {

        $sql = "";
        if (!$tablename2) {
            $sql = "SELECT * FROM {$tablename}";
        } else {
            $sql = sprintf("SELECT %s FROM {$tablename} LEFT JOIN {$tablename2} ON {$tablename2}.id = {$tablename}.{$foreignKey}",
                implode(', ', $fields));
        }


        $out = "";

        if (!empty($filter)) {
            $out = " WHERE";
            foreach ($filter as $key => $value) {
                $out .= " {$key} = '{$value}',";
            }

            $out = trim($out, ',');
        }
        // ['id' => 1, 'name' => 'John']
        // " WHERE id = '1', name='John'

        $sql = $sql . $out . " ORDER BY {$tablename}.id DESC";

        $query = $this->pdo->prepare($sql);

        $query->execute();

        return $query->fetchAll(\PDO::FETCH_OBJ);
    }


    public function insert($tablename, $parameters)
    {
        // insert into tasks (task, completed) VALUES (:task, :completed)
        $sql = sprintf("INSERT INTO %s (%s) VALUES(%s)",
            $tablename,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))
        );

        try {
            $query = $this->pdo->prepare($sql);
            $query->execute($parameters);
        } catch (\PDOException $exception) {

            die($exception->getMessage());
        }

    }

    public function update($tablename, $parameters)
    {
        $id = $parameters['id'];

        unset($parameters['id']);

        //"UPDATE books SET title = 'kasjkdlak', year = '2002' WHERE id='5'"

        $out = "";
        foreach ($parameters as $key => $value) {
            $out .= " {$key} = '{$value}',";
        }

        $out = trim($out, ',');

        $sql = sprintf("UPDATE %s SET %s WHERE id = '%s'",
        $tablename, $out, $id);

        $query = $this->pdo->prepare($sql);

        $query->execute();

    }

    public function delete($tablename, $id)
    {
        $sql = "DELETE FROM {$tablename} WHERE id = {$id}";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function selectOne($tablename,$fields=[],$filter = []){

        if(!empty($fields)){
            $sql = "SELECT ".join(",",$fields). " FROM {$tablename}";
        }else{
            $sql ="SELECT  * FROM {$tablename}";
        }
        $out = [];
        if(isset($filter) and !empty($filter)){
            foreach ($filter as  $key=>$value ){
                $out[]= " {$key} = '{$value}'";
            }
        }
         $sql .= " WHERE ".join(" and ",$out);
            $query = $this->pdo->prepare($sql);

            $query->execute();

            return $query->fetchAll(\PDO::FETCH_OBJ);
    }


}
