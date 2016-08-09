<?php
namespace SpecialMode;

use \Message\CommonMessageText as CommonMessageText;

class LoginWolfGame implements \InterfaceSpecialMode
{

    public function __construct()
    {}

    public function algorithm(CommonMessageText $message)
    {
        $PDO = \Database\StaticPdo::DBConnect();
        array( \PDO::ATTR_AUTOCOMMIT=>0 );//关闭自动提交
        $PDO->beginTransaction();//开启事物模式
        $sql = 'SELECT * FROM specialMode WHERE open_id = '.$message->getFromUserName();
        $result = $PDO->exec($sql);
        if( !count($result) )
        {
            return $this->createRespondObj();
        }
    }
    
    protected function createRespondObj()
    {
        
    }
}

