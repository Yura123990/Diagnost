<?php
namespace vendor;

session_start();

 $path_db=dirname(__DIR__)."/App/Db.php";
 
 require ($path_db);




 class Avtor{
    private $login1='';
    private $passw1='';
    private $pablish;
    
     public function __construct(){
         $this->login1=$_SESSION['login'];
         $this->passw1=md5($_POST['password']);
     }

    
     public function findUser(){
         $query="SELECT * FROM diagnost.user";
         
         $db=new \App\Db();
          
         $res=$db->finding($query);

         
         foreach ($res as $key => $arr){
             $log=$this->login1; 
             $pas=$this->passw1;
                echo "$key". "=>". "$arr[password]"."=>".$pas."<br>"; //die();
               if (($arr['login']===$log)&&($arr['password']===$pas)){
                   $_SESSION['log']=$log; $_SESSION['pas']=$pas;
                   $_SESSION['role']=$arr['id_role'];
                   $_SESSION['firstname']=$arr['firstname']; 
                   $_SESSION['lastname']=$arr['lastname']; 
                   $_SESSION['password']=$pas;
                   $_SESSION['id_user']=$arr['id_user'];
                  
                   //$main_path=dirname(__DIR__).'/view/template/main.php';
                //echo $main_path; die();
               //header('Location: '.$main_path);
               header('Location: /defindviral/view/template/main.php');
                   }   
             
         }
         //echo __DIR__;
         return $db->finding($query);
    

}
}
