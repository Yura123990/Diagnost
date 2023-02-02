<?php
session_start();//echo $_SESSION['role'];die();
if ($_SESSION['role']!=2){ header( "Location: https://diagnost.virtlabse.com");
}
include('header.php');
$pathExp=dirname(dirname(__DIR__)).'/model/dataExpert.php';
//echo $pathExp;
require($pathExp);
use model\dataExpert;
?>
                                <h2 class="art-postheader">Дані обробки експертних оцінок</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>Значення з бази знань симптомів</p>
                    <h2>
                        <?php
                        if ($_SESSION['role']!=='2'){ header( "Location: https://diagnost.virtlabse.com");
                         }; echo"</h2>";
                        
                
                   $datExp= new \model\dataExpert();
                     // var_dump($datExp);
                      
                      
                     $de=$datExp->setAvgExpert();
                       // var_dump($de);
                       echo"<br>";
                       
                    foreach($de as $pokaz){
                        foreach($pokaz as $simpt){
                            echo "$simpt ";
                        }
                        echo "<br>";
                    }    
                   

                    /*require('../../../../model/virusDiagnost.php');
                    $rr=new \model\virusDiagnost();
                    // var_dump($rr);
                    echo $rr->diagnoz();*/

                    ?>
                </div>
                                
                

<?php
	include('footer.php');
?>