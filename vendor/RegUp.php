<?php
namespace vendor;
session_start();

 $path_db=dirname(__DIR__)."/App/Db.php";
require ($path_db);


 class RegUp{
    private $lastname='';
    private $firstname='';
    private $birthday;
    private $email;
    private $telephone;
    private $passport;
    private $avatar;
    private $login;
    private $password;
    private $password_confirm;

    
     public function __construct(){
         $this->lastname=$_POST['lastname'];
         $this->firstname=$_POST['firstname'];
         $this->email=$_POST['email'];
         $this->birthday=$_POST['birthday'];
         $this->telephone=$_POST['telephone'];
         $this->passport=$_POST['passport'];
         if(isset($_FILES['avatar'])) {$this->avatar=$_FILES['avatar'];}
         $this->login=$_POST['login'];
         $this->password=$_POST['password'];
         $this->password_confirm=$_POST['password_confirm'];
    }

     /**
      * @return mixed
      */
     public function getPassword(): string
     {
         return $this->password;
     }

     /**
      * @return mixed
      */
     public function getPasswordConfirm(): string
     {
         return $this->password_confirm;
     }

     public function addUser(){
      
         $lastname = $this->lastname;
         $firstname=$this->firstname;
         $email=$this->email;
         $birthday=date($this->birthday);
         $telephone=$this->telephone;
         $passport=$this->passport;
         $avatar=$_SESSION['img_path']; 
         $login=$this->login;
         $password=$this->password;
         $password_confirm=$this->password_confirm;

        $password=md5($password);
        
    
         $query="INSERT INTO diagnost.user (`login`, `password`, `firstname`, `lastname`, `email`, `birthday`, `telephone`, `passport`, `personcode`, `id_role`, `avatar`)";
         $query.=" VALUES ('$login', '$password', '$firstname', '$lastname',  '$email', '$birthday', '$telephone', '$passport',  '1', 1, '$avatar') ";
         
      		// echo $query; die();
       
       	$db=new \App\Db();
       var_dump($db);
          
        return $db->quering($query);
     }

}
?>
