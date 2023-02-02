<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class="art-postheader">Оцінка ризику цукрового діабету</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                    
                    <p>Анкета для оцінки ризику цукрового діабету</p><br></p>
                    <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для оцінки ризику цукрового діабету заповніть поля анкети";
                        ?>
                    </h2>
                    <h1>Анкета для оцінки ризику цукрового діабету.</h1>
                    <h2>Оцініть, будь ласка, наскільки Ви погоджуєтеся з кожним із наведених нижче тверджень.<br></h2>
                    <form action="diabetes.php" method="post">
                        <table>
                            <tr>
                                <td>1.	Вік</td>
                                <td><select name="sl1">
                                        <option value=0>менш 45 років</option>
                                        <option value=2>45–54 роки</option>
                                        <option value=3>55–64 роки</option>
                                        <option value=4>более 65 років</option>
                               </select></td>
                            </tr>
                            <tr>
                                <td>2. Індекс маси тела</td>
                                <td><select name="sl2">
                                        <option value=0>менш 25 кг/м2</option>
                                        <option value=1>25–30 кг/м2</option>
                                        <option value=2>більше 30 кг/м2</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>3.	Окружність талії (на рівні пупка). Чоловіки жінки. </td>
                                <td><select name="sl3">
                                        <option value=0>менше 94 см / менше 80 см</option>
                                        <option value=3>94–102 см / 80–88см</option>
                                         <option value=3>більше 102 см / більше 88 см</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>4.	Наявність фізичної активності щонайменше 30 хв. на день (3 години на тиждень)</td>
                                <td><select name="sl4">
                                        <option value=0>Так</option>
                                        <option value=1>Ні</option>
                                       
                                    </select></td>
                            </tr>
                            <tr>
                                <td>5.	Як часто Ви їсте овочі? </td>
                                <td><select name="sl5">
                                       <option value=0>Кожен день</option>
                                        <option value=1>Не кожен день</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>6.	Чи доводилося Вам приймати антигіпертензивні препарати регулярно?</td>
                                <td><select name="sl6">
                                       <option value=0>Ні</option>
                                        <option value=2>Так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>7.	Чи знаходили у Вас підвищення глюкози крові (при профогляді, під час хвороби, при вагітності)?</td>
                                <td><select name="sl7">
                                        <option value=0>Ні</option>
                                        <option value=5>Так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>8.	Чи був цукровий діабет у когось із Вашої родини?</td>
                                <td><select name="sl8">
                                        <option value=0>Ні</option>
                                        <option value=3>Був: у дідуся/бабусі, тітки/дядька, двоюрідного брата/сестри</option>
                                        <option value=5>Був: у мого батька, брата/сестри, моєї дитини</option>
                                        
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" name="sb" value='1'>Надіслати на діагностику</button>

                    </form>
                    <?php endif?>
                    <?php
                    //echo $_POST['sb'];
                    if (isset($_POST['sb'])) {
                        //unset($_POST['sb']);
                        $emo=array('sl1','sl3','sl4','sl5','sl6','sl7','sl8');
                        
                        $sum_emo=0;
                        

                        //var_dump($emo);
                        echo"<h2>Загальний ризик (ризик розвитку діабету протягом найближчих 10 років)</h2>";
                        
                        foreach ($emo as $st){
                            $sum_emo+=$_POST[$st];
                        }
                        
                        if($sum_emo<7){$diabet="<h2>Низкий: <span style='color: #0c4128'> приблизно у одного з 100 буде діабет</span></h2>";}
                        if(($sum_emo>=7)&&($sum_emo<=11)){$diabet="<h2>Трохи підвищено: <span style='color: #146c43'>приблизно у одного з 25 буде діабет</span></h2>";}
                        if(($sum_emo>11)&&($sum_emo<=14)){$diabet="<h2>Помірний: <span style='color: #B8A147'>приблизно у одного з 6 буде діабет</span></h2>";}
                        if(($sum_emo>14)&&($sum_emo<=20)){$diabet="<h2>Високий: <span style='color: #fd7e14'>приблизно у одного з трьох буде діабет</span></h2>";}
                        if($sum_emo>20){$diabet="<h2>Дуже високий: <span style='color: #E2341D'>приблизно у одного з двох буде діабет</span></h2>";}
                        echo $diabet;
                        $_SESSION['diabet']=$diabet;

                       
                    }


                    ?>
                    </div>



<?php
include('../../footer.php');
?>