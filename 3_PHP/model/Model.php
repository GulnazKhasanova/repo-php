<?php


namespace app\model;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
 

    abstract public function getTablename();

    public function __set($name, $value){
        $this->$name = $value;
    }

    public function __get($name){
        return $this->$name;
    }


    public function getOne($id){
        $tablename = $this->getTablename();
        $sql = "SELECT * FROM {$tablename} WHERE id = :id";
    return Db::getInstance()->queryOneObj($sql, ['id' => $id], static::class);
    }

    public function getAll(){
        $tablename = $this->getTablename();
        $sql = "SELECT * FROM {$tablename}";
        return Db::getInstance()->queryAll($sql);
    }

    public function del(){
       $tablename = $this->getTablename();
       $sql = "DELETE from {$tablename} where id = {$this->id}";
       return Db::getInstance()->execute($sql);
    }


    public function insert(){
        $error= "";
        $err=[
            'OK' => 'Файл загружен',
            'ERROR'=> 'Файл не загружен'
        ];
        if (!empty($_POST))
        {
            $path = "/my_php/job5/". $_FILES['myfile']['name'];
            if(move_uploaded_file($_FILES['tmp_name']['name'],$path)){

                header('location: /my_php/composer_proj/new_prod.php?error=OK');
                die();
            } else {

                header('location: /my_php/composer_proj/new_prod.php?error=ERROR');
                die();
            }

        }
        $error = $err[$_GET['error']];

        $params = [];
        $columns = [];
        $values = "";


        foreach($this as $key => $value){
            if ($key == 'id'){
                $params[":{$key}"] = $value;
                $columns[] = "$key";
            }
            $columns = implode(", ", $columns);
            $values = implode(",", array_keys($params));
        }

        $sql = "INSERT INTO {$this->getTableName()} ($columns) VALUES ($values)";
        Db::getInstance()->execute($sql, $params);

        $this->id = Db::getInstance()->getLastinsertId();

        return $this;
    }

}