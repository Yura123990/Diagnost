<?php
session_start();
$path=dirname(__DIR__)."/vendor/RegUp.php";
require_once($path);

$reg=new \vendor\RegUp();
//var_dump($reg);
$_SESSION['message']="";

if (($reg->getPassword()) ===($reg->getPasswordConfirm())){
    $_SESSION['img']=time().$_FILES['avatar']['name'];
    $path=dirname(__DIR__).'\\view\\template\\img\\'.$_SESSION['img'];
    
    $_SESSION['img_path']=$path;
  
   // echo $_SESSION['img_path']; 
  
    move_uploaded_file($_FILES['avatar']['name'], "/home/u13865/public_html/diagnost/view/template/img/");
   
     $reg->addUser();
    // echo $reg->addUser();
    
  header('Location: ../index.php');  
   // echo"-------------------------------------";die();
    
    if(!move_uploaded_file($_FILES['avatar']['name'], $path)){ header('Location: ../register.php');}
   } else{
    $_SESSION['message']="Паролі не співпадають"; header('Location: ../register.php');
}


