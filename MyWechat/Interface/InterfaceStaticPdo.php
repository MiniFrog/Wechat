<?php

abstract class InterfaceStaticPdo
{
    const DB_HOST = 'localhost';
    
    const DB_NAME = 'Wechat';
    
    const DB_USER = 'YOU';
    
    const DB_PWD = 'al3682733';
    
    protected static $PDO = NULL;
    
    abstract public static function DBConnect();
    //返回到 PDO 的一个实例
}

