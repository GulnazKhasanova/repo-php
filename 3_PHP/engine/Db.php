<?php

namespace app\engine;
use app\traits\TSinglton;

class Db
{
private $config = [
    'driver' => 'mysql',
    'host' => "localhost:3306",
    'login' => 'root',
    'password' => '1111',
    'database' => 'gb',
    'charset' => 'utf8'
];
    use TSinglton;

    public function getLastinsertId(){
        return $this->connection->lastInsetrId();
    }

    protected $connection = null; //PDO

    protected function getConnection(){
        if(is_null($this->connection)){
            var_dump('Подключаюсь к Db');
            $this->connection = new \PDO(
                $this->prepareDsnString(),
                $this->config['login'],
                $this->config['password']);
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    protected function prepareDsnString(){
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
        $this->config['driver'],
        $this->config['host'],
        $this->config['database'],
        $this->config['charset']
        );
    }
    protected function query($sql, $params){
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

public function queryOne($sql, $params){
    return $this->query($sql,$params)->fetch();
}


public function queryOneObj($sql, $params, $class){
  $stmt = $this->query($sql, $params);
  $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class);
   return $stmt->fetch();
}

public function queryAll($sql, $params=[]){
    return $this->query($sql,$params)->fetchAll();;
}

public function execute($sql, $params=[]){
    return $this->query($sql)->rowCount();
}

}