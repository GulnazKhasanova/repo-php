<?php

namespace app\interfaces;

interface IModel
{
    public function getTablename();
    public function getOne($id);
    public function getAll();
    public function del();
    public function insert();
}