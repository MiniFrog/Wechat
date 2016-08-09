<?php
namespace Database;

class StaticPdo extends \InterfaceStaticPdo
{
    
    public static function DBConnect()
    {
        if(static::$PDO != NULL)
        {
            return static::$PDO;    
        }
        try {
            //$dsn 的例子如下
            //$dsn = 'mysql:dbname=testdb;host=127.0.0.1'
            $dsn = 'mysql:dbname='. StaticPdo::DB_NAME .';host='. StaticPdo::DB_HOST;
            static::$PDO = new \PDO($dsn, StaticPdo::DB_USER, StaticPdo::DB_PWD);
            return static::$PDO;
        } catch (\PDOException $e) {
            exit('Connection failed:'.$e->getMessage());
        }
    }

}

