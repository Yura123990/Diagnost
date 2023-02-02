<?php

namespace model;
$path_db=dirname(__DIR__)."/App/Db.php";
require ($path_db);



class dataExpert
{
    private $login1='';
    private $passw1='';
    private $pablish;

    public function __construct(){
        $this->login1=$_SESSION['login'];
        $this->passw1=$_SESSION['password'];

      }

    public function setSimptomExpert($arr){
        //var_dump($arr);

          $query="INSERT INTO u13865_diagnost.exp_dani (`id_exp`, `id_disease`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `sympt6`, `sympt7`, `sympt8`, `sympt9`, `sympt10`, `sympt11`, `sympt12`, `sympt13`, `sympt14`, `sympt15`, `sympt16`, `sympt17`, `sympt18`, `sympt19`, `sympt20`)";
        
          $query.=" VALUES ($arr[21], $arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5], $arr[6], $arr[7], $arr[8], $arr[9], $arr[10], $arr[11], $arr[12], $arr[13], $arr[14], $arr[15], $arr[16], $arr[17], $arr[18], $arr[19], $arr[20])";
         
          $db=new \App\Db();
        
            $res=$db->executing($query);

            $query= "SELECT * FROM u13865_diagnost.exp_simptom_dise";
            
            $res=$db->finding($query);

            foreach ($res as $key => $arr){
                $log=$this->login1;
                $pas=$this->passw1;

                
                if (($arr[login]===$log)&&($arr[password]===md5($pas))){
                 
                    $result=$db->finding($query);
                }

            }
                   //var_dump($result);die();
           return $db->finding($query);
        }
        
        public function setAvgExpert(){
            
        $db=new \App\Db();
       // var_dump($db);
        
            
            $query="SELECT AVG(exp_dani.sympt1) AS aes1, AVG(exp_dani.sympt2) AS aes2, AVG(exp_dani.sympt3) AS aes3, AVG(exp_dani.sympt4) AS aes4, AVG(exp_dani.sympt5) AS aes5, AVG(exp_dani.sympt6) AS aes6, AVG(exp_dani.sympt7) AS aes7, AVG(exp_dani.sympt8) AS aes8, AVG(exp_dani.sympt9) AS aes9, ";
            $query.="AVG(exp_dani.sympt10) AS aes10, AVG(exp_dani.sympt11) AS aes11, AVG(exp_dani.sympt12) AS aes12, AVG(exp_dani.sympt13) AS aes13, AVG(exp_dani.sympt14) AS aes14, AVG(exp_dani.sympt15) AS aes15, AVG(exp_dani.sympt17) AS aes16, AVG(exp_dani.sympt16) AS aes17,  AVG(exp_dani.sympt18) AS aes18, ";
            $query.="AVG(exp_dani.sympt19) AS aes19, AVG(exp_dani.sympt20) AS aes20 FROM exp_dani GROUP BY exp_dani.id_exp";
            
            $res=$db->executing($query);
           
           //var_dump($res);
           
           // echo $query;

            /*foreach ($res as $key => $arr){
                $log=$this->login1;
                $pas=$this->passw1;

                
                if (($arr[login]===$log)&&($arr[password]===md5($pas))){
                 
                    $result=$db->finding($query);
                }

            }*/
                  
          return $db->finding($query);
          //return $db->executing($query);
          
        }
    }


