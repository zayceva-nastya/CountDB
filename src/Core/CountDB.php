<?php
namespace Core;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\DB;
use Core\Config;
use TexLab\MyDB\Runner;

class CountDB
{
    protected $table;
    public function __construct()
    {
        $this->table = new Runner(DB::Link([
            'host' => Config::MYSQL_HOST,
            'username' => Config::MYSQL_USER_NAME,
            'password' => Config::MYSQL_PASSWORD,
            'dbname' => Config::MYSQL_DATABASE
        ]));
    }

    public function countRows()
    {
       return $this->table->runSQL("SELECT COUNT(*) FROM `text`")[0]['COUNT(*)'];
    }
}