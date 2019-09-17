<?php

namespace App\Model\DataStorage;

use mysqli;

class MysqlStorage implements StorageInterface
{
    private $db_entity;

    function __construct()
    {
        new DB_entity(new mysqli('localhots', 'root', '', 'feedback_db'), 'feedback');
    }


    public function get()
    {

    }

    public function del(int $id)
    {

    }

    public function edit(int $id, array $array)
    {

    }

    public function add(array $array)
    {

    }

}