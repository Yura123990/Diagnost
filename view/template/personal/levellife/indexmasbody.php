<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class='art-postheader'>Індекс маси тіла</h2>
                                                
                <div class='art-postcontent art-postcontent-0 clearfix'><p>
                    
                    <p>Анкета для визначення індексу маси тіла</p><br></p>
                    <h2>
                        <?php
                        echo $_SESSION['firstname'].' '.$_SESSION['lastname']. ' для визначення індексу маси тіла заповніть поля анкети';
                        ?>
                    </h2>
                    <h1>Анкета для розрахунку індексу маси тіла.</h1>
                    <h2>Введіть особисті дані<br></h2>
                    <form action='indexmasbody.php' method='post'>
                        <table>
                            <tr>
                                <td>1.Маса тіла</td>
                                <td><input type='text' name='t1' placeholder='введіть значення ваги в кг'></td>
                            </tr>
                            <tr>
                                <td>2.Ваше зростання</td>
                                <td><input type='text' name='t2' placeholder='введіть ваше зростання в см'></td>
                            </tr>
                            
                        </table>
                        <button type='submit' name='sb' value='1'>Надіслати на діагностику</button>

                    </form>
                    <?php endif?>
                    <?php
                   // echo $_POST['sb']; 
                   // echo $_POST['t1'];
                   if (isset($_POST['sb'])) {
                        $imt=(int)($_POST['t1']/$_POST['t2']/$_POST['t2']*10000);
                      echo'<h2>Індекс маси тіла -->$imt</h2>';
                        /* foreach ($emo as $st){
                            $sum_emo+=$_POST[$st];
                        }*/
                        
                      if($imt<7){$indexmas='<h2>Низький: <span style='color: #0c4128'> приблизно у одного зі 100 буде діабет</span></h2>';}
                        if($imt<=18.5){$indexmas='<h2> У Вас знижений індекс: <span style='color: #146c43'>зверніться до лікаря це може бути проблемою</span></h2>';}
                        if (( $imt>=18.5)&&($imt<=27)){$indexmas='<h2>Нормальний: <span style='color: #B8A147'>дотримуйтесь свого стилю життя, Ви поза групою ризику</ span></h2>';}
                        if(($imt>27)&&($imt<=30)){$indexmas='<h2>Високий: <span style='color: #fd7e14'>у поєднанні з абдомінальним ожирінням, спадковою схильністю до цукрового діабету ( ЦД) 2 типу та наявністю факторів <br> ризику серцево-судинних ускладнень (дисліпідемія, АГ, ЦД 2 типу)</span></h2>';}
                        if($imt>30){$indexmas='<h2>Дуже високий: <span style='color: #E2341D'>підвищена схильність до ожиріння</span></h2>';}
                        echo $indexmas;
                        $_SESSION['indexmas']=$indexmas;
                        ;}
?>
                       
                  
                        
                        
                       
                    
                    </div>



<?php
include('../../footer.php');
?>