<?php


namespace app\model;


class user extends Model
{
    private $id;
    private $login;
    private $password;

    public function __construct($login = null, $password = null){
        $this->login = $login;
        $this->password = $password;
    }

    public function getTablename(){
        return 'user';
    }
}