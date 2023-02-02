<?php
namespace vendor;

session_start();

 $path_db=dirname(__DIR__)."/App/Db.php";
require ($path_db);



 class onAvtor
 {
     private $login = '';
     private $passw = '';
     private $pablish;

     public function __construct()
     {
         $this->login = $_SESSION['login'];
         $this->passw = md5($_POST['password']);
         //echo $_SESSION['login'];
        // $_SESSION['password'] = md5($_POST['password']);
       //  echo $_SESSION['password'];
     }
 }
