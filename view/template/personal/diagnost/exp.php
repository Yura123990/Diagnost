<?php
session_start();
	if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
$pathUsr=dirname(dirname(dirname(dirname(__DIR__)))).'/model/dataUser.php';
//echo $pathUsr;
require($pathUsr);
use model\dataExpert;

?>
                                <h2 class="art-postheader">Вірусні захворювання</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                    <?php

                    $pathVirusDiagnost=dirname(dirname(dirname(dirname(__DIR__)))).'/model/dataExpert.php';
                    echo $pathVirusDiagnost;

                    require($pathVirusDiagnost);
                    $rr=new \model\dataExpert();
                    var_dump($rr);

                    $simpt[0]= $rr->diagnoz();

                    if (isset($_POST['sb_user'])){
                        $datUsr= new \model\dataUser();
                        echo"<hr>";
                        for ($i=1; $i<21; $i++){
                            $sl='sl';
                            $sl.=$i;

                            $simpt[$i]=$_POST[$sl];
                        }
                        $simpt[21]=$_SESSION['id_user'];

                        //echo "$simpt[21]";
                        // var_dump($datExp);

                        $de=$datUsr->setSimptomUser($simpt);
                        $avgexp=$rr->setAvgExpert();

                       var_dump($avgexp);
                    }

                    /*$pathVirusDiagnost=dirname(dirname(dirname(dirname(__DIR__)))).'/model/virusDiagnost.php';

                    require($pathVirusDiagnost);
                    $rr=new \model\virusDiagnost();

                    echo $rr->diagnoz();*/

                    ?>

                </div>
                
                                
                

<?php
	include('../../footer.php');
?>