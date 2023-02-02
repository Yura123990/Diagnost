<?php
namespace vendor;

class Connect
{
    protected $dbh;

    public function __construct(){
        $dsn='mysql:host=localhost; dbname=diagnost';
        $user='root';
        $password='';
        
        $this->dbh=new \PDO($dsn,$user,$password);
        mysqli_error($db);
         
    }

   /* public function execute($sql){
        $sth=$this->dbh->prepare($sql);
        //$res=$sth->execute();
        var_dump($res);
        return $res;
    }*/

    public function query($sql){  
        $sth=$this->dbh->prepare($sql);
       // $res=$sth->execute();
        var_dump($sth);
        if(false!==$res){
            return $sth->fetchall(\PDO::FETCH_CLASS, $this);
        }
        return[];
    }
}
