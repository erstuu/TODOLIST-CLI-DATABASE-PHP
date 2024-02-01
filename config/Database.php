<?php

namespace Config
{
    class Database 
    {
        static function getConnection(): \PDO 
        {
            $dsn = "mysql:host=localhost;dbname=belajar_php_todolist";
            $username = "root";
            $password = "root";

            return new \PDO($dsn,$username, $password);
        }
    }
}