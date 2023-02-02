<?php
session_start();
	if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
$pathUsr=dirname(dirname(dirname(dirname(__DIR__)))).'/model/dataUser.php';
//echo $pathUsr;
require($pathUsr);
use model\dataUser;

?>
                                <h2 class="art-postheader">Viral diseases</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>Questionnaire for determining diseases: Flu, ARI, Coronavirus</p>
                    <?php
                    if (!(isset($_POST['sb']))):?>
                <h2>
                    <?php 
                    echo $_SESSION['firstname']."  ".$_SESSION['lastname']. ", fill in the fields of the questionnaire to diagnose the disease";
                    ?>
                    </h2>


                    <h1>Questionnaire for determining a viral disease.</h1>
                    <h2>For each of these symptoms, enter a value that indicates its level<br></h2>
                   <form action="viral.php" method="post">
                    <table>
                        <tr>
                            <td>Runny nose</td>
                            <td><select name="sl1">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Fever</td>
                            <td><select name="sl2">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Coughing</td>
                            <td><select name="sl3">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Severe body pain</td>
                            <td><select name="sl4">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Headache</td>
                            <td><select name="sl5">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Conjunctivitis</td>
                            <td><select name="sl6">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Swelling of the lymph nodes</td>
                            <td><select name="sl7">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Weakness in the body</td>
                            <td><select name="sl8">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Vomiting</td>
                            <td><select name="sl9">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Sore throat</td>
                            <td><select name="sl10">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Loss of appetite</td>
                            <td><select name="sl11">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Sneezing</td>
                            <td><select name="sl12">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>High temperature</td>
                            <td><select name="sl13">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                         <tr>
                            <td>Diarrhea</td>
                            <td><select name="sl14">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Stomachache</td>
                            <td><select name="sl15">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Loss of smell</td>
                            <td><select name="sl16">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Loss of taste</td>
                            <td><select name="sl17">
                               <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Loss of orientation</td>
                            <td><select name="sl18">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Muscle and joint pain</td>
                            <td><select name="sl19">
                               <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Pain in the chest</td>
                            <td><select name="sl20">
                                <option value=0>none</option>
                                <option value=1>very low</option>
                                <option value=2>low</option>
                                <option value=3>medium</option>
                                <option value=4>high</option>
                                <option value=5>very high</option>
                            </select></td>
                        </tr>
                    </table>
                    <button type="submit" name="sb_user" value='1'>Send for diagnostics</button>
                    
                    </form>
                    <?php endif?>
                    <?php

                    $pathVirusDiagnost=dirname(dirname(dirname(dirname(__DIR__)))).'/model/virusDiagnost.php';

                    require($pathVirusDiagnost);
                    $rr=new \model\virusDiagnost();

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

                       // var_dump($de);
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