<?php

namespace model;
$path_db=dirname(__DIR__)."/App/Db.php";
//echo $path_db;
require ($path_db);



class dataUser
{
    private $login1='';
    private $passw1='';
    private $pablish;

    public function __construct(){
        $this->login1=$_SESSION['login'];
        $this->passw1=$_SESSION['password'];
//        echo $_SESSION['login'];
//        echo $this->passw1;
//        echo"<hr>";
      }

    public function setSimptomUser($arr){
       // var_dump($arr);

        $query="INSERT INTO u13865_diagnost.usr_dani (`id_usr`, `id_disease`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `sympt6`, `sympt7`, `sympt8`, `sympt9`, `sympt10`, `sympt11`, `sympt12`, `sympt13`, `sympt14`, `sympt15`, `sympt16`, `sympt17`, `sympt18`, `sympt19`, `sympt20`)";
         $query.=" VALUES ($arr[21], $arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5], $arr[6], $arr[7], $arr[8], $arr[9], $arr[10], $arr[11], $arr[12], $arr[13], $arr[14], $arr[15], $arr[16], $arr[17], $arr[18], $arr[19], $arr[20])";

          $db=new \App\Db();
        
            $res=$db->executing($query);

            $query= "SELECT * FROM u13865_diagnost.exp_simptom_dise";
            
            $res=$db->finding($query);

            foreach ($res as $key => $arr){
                $log=$this->login1;
                $pas=$this->passw1;

                //echo "$key". "=>"."$arr[login] - ". "$arr[password]"."=>".$pas."<br>";
                if (($arr[login]===$log)&&($arr[password]===md5($pas))){
                  //echo"$key $arr <br>";
                    $result=$db->finding($query);
                }

            }
           ;
            //var_dump($result);die();
           return $db->finding($query);


        }
    }


