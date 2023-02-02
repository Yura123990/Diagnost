<?php 
session_start();
	include('../header1.php');
?>
                                <h2 class="art-postheader">Статистика</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                   <?php 
                   $trev=$_SESSION['trev'];
                   $depr=$_SESSION['depr'];
                   $psyho= $_SESSION['psyho'];
                    $fiz=    $_SESSION['fiz'];
                   $emoc  =   $_SESSION['emoc'];
                   $diabet=$_SESSION['diabet'];
                   $indexmas=$_SESSION['indexmas'];
                   $nicotin=$_SESSION['nicotin'];
                   $emo=$_SESSION['emo'];
                   $nevroz=$_SESSION['nevroz'];
                   $stress=$_SESSION['stress'];
                  // var_dump($_SESSION['trev']);
                   echo $trev;
                   echo $depr;
                   echo $psyho;
                   echo $fiz;
                   echo $emoc;
                   echo $emo;
                   echo $nevroz;
                   echo $stress;
                   echo "Риск діабету: ".$diabet;
                   echo "Індекс маси тіла: ".$indexmas;
                   echo "Нікотинова залежність: ".$nicotin;
                  
                    ?><br></p></div>
                                
                

<?php
	include('../footer.php');
?>