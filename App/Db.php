<?php
namespace App;

include('config.php');

class Db

{
    protected $dbh;

    public function __construct()
    {
        $dsn='mysql:host=localhost; dbname=diagnost; charset=utf8';
        //$dsn='\''.'mysql:host='.DB_HOST.'; dbname='.DB_NAME.'; charset=utf8'.'\'';
        //echo $dsn;
        $user=DB_USER;
        $password=DB_PASSWORD;
        $this->dbh=new \PDO($dsn, $user, $password);
      }

    public function executing($sql){
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute();
        return $res;
    }
    public function quering($sql){
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute();
        if($res!==false){
            return $sth->fetchAll();
        }
        return [];
    }
 
 public function finding($sql){
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute();
        if($res!==false){
           return $sth->fetchAll(\PDO::FETCH_ASSOC);
        }
       return [];
    }

}