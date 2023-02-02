<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>

                                <h2 class="art-postheader">Оцінка нікотиновій залежности</h2>

                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                    <p>
                    <form action="nicotin.php" method="post">

                        <table>
                            <tr>
                                <td>Коли після того як Ви прокинетеся Ви викурюєте першу сигарету?</td>
                                <td><select name="sl1" style="col-2">
                                    <option value="3">Протягом перших 5 хвилин</option>
                                    <option value="2">Протягом перших 6-30 хвилин</option>
                                    <option value="1">Протягом перших 30-60 хвилин</option>
                                    <option value="0">За годину</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Чи складно вам утриматися від куріння в місцях, де куріння заборонено?</td>
                                <td><select name="sl2">
                                    <option value="1">Так</option>
                                    <option value="0">Ні</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Від якої цигарки Ви не можете легко відмовитись?</td>
                                <td><select name="sl3">
                                    <option value="1">Перша цигарка зранку</option>
                                    <option value="0">Всі останні</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Скільки цигарок Ви викурюєте на день?</td>
                                <td><select name="sl4" style="col-2">
                                        <option value="3">10 або менш</option>
                                        <option value="2">11-20</option>
                                        <option value="1">21-30</option>
                                        <option value="0">31 и більш</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Ви курите більш часто в перші години вранці, після того, як прокинетеся, або протягом решти дня?</td>
                                <td><select name="sl5" style="col-2">
                                        <option value="1">Так</option>
                                        <option value="0">Ні</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Чи курите Ви, якщо хворі та змушені перебувати в ліжку цілий день?</td>
                                <td><select name="sl6" style="col-2">
                                        <option value="1">Так</option>
                                        <option value="0">Ні</option>
                                    </select></td>
                            </tr>
                        </table>
                            <button type="submit" class="art-button" name ="sb">Прийняти</button>
                    </form>
                    <?php
                  
                    if(isset($_POST['sb'])){
                        $sum=0;
                        $res='';
                            foreach ($_POST as $key=>$znach){
                                //echo $key.'->'.$znach."<br>";
                                if ($key==='sb') continue;
                                $sum+=$znach;
                            
                            }
                            $_SESSION['nic'] = $sum ;
                        
                            if (($sum>=0)&&($sum<=2)) $res='дуже слабка залежність';
                            if (($sum>2)&&($sum<=4)) $res='слабка залежність';
                            if (($sum>0)&&($sum<=5)) $res='середня залежність';
                            if (($sum>5)&&($sum<=7)) $res='висока залежність';
                            if (($sum>7)&&($sum<=10)) $res='дуже висока залежність';

                            //require('../../../../model/ResultNicotin.php');

                            //$rr=new \model\ResultNicotin();
                            //echo"$rr->result";
                            //var_dump($rr);
                            echo "<h2> $res </h2>";
                            $_SESSION['nicotin']=$res;
                            
                }
                    ?>

    </p>
    </div>

                                



<?php
include('../../footer.php');
?>