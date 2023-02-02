<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class='art-postheader'>Рівень власного стресу та стресостійкість</h2>
                <div class='art-postcontent art-postcontent-0 clearfix'><p>
                        <h2>
                        <?php
                        echo $_SESSION['firstname'].' '.$_SESSION['lastname']. ' для визначення рівня стресу та стресостійкості заповніть поля анкети';
                        ?>
                    </h2>
                    <h1>Анкета для визначення рівня стресу та стресостійкості.</h1>
                    <h2>Оцініть, будь ласка, наскільки Ви згодні з кожним із наведених нижче тверджень.<br></h2>
                    <form action='stress.php' method='post'>
                        <table>
                            <tr>
                                <td>1.
Мабуть я людина нервова</td>
                                <td><select name='sl1'>
                                        <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                               </select></td>
                            </tr>
                            <tr>
                                <td>2.Я дуже турбуюся про свою роботу</td>
                                <td><select name='sl2'>
                                        <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>3.
Моя повсякденна діяльність викликає велику напругу. </td>
                                <td><select name='sl3'>
                                        <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>4.
Я часто відчуваю нервову напругу</td>
                                <td><select name='sl4'>
                                        <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>5.
 Обіцяючись з людьми, я часто відчуваю нервову напругу. </td>
                                <td><select name='sl5'>
                                       <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>6.
 До кінця дня я зовсім виснажений фізично та психологічно.</td>
                                <td><select name='sl6'>
                                       <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>7.
У моїй сім'ї часто виникають напружені взаємини.</td>
                                <td><select name='sl7'>
                                        <option value=1>Так, згоден</option>
                                        <option value=2>Швидше згоден</option>
                                        <option value=3>Швидше не згоден</option>
                                        <option value=4>Ні, не згоден</option>
                                    </select></td>
                            </tr>
                            
                        </table>
                        <button type='submit' name='sb' value='1'>Надіслати на діагностику</button>

                    </form>
                    <?php endif?>
                    <?php
                    //echo $_POST['sb'];
                    if (isset($_POST['sb'])) {
                        //unset($_POST['sb']);
                        $emo=array('sl1','sl3','sl4','sl5','sl6','sl7');
                        
                        $sum_stress=0;
                       

                        //var_dump($emo);
                        
                        foreach ($emo as $st){
                            $sum_stress+=$_POST[$st];
                        }
                        
                        if(($sum_stress>=1)&&($sum_stress<=2)){$stress="<h2>Ваш рівень стресу <span style='color: #0c4128'>високий</span></h2>" ;}
                        if(($sum_stress>2)&&($sum_stress<=3)){$stress="<h2>Рівень стресу <span style='color: #146c43'>середній, з тенденцією до низького</span></ h2>";}
                        if(($sum_stress>3)&&($sum_stress<=4)){$stress="<h2>Рівень стресу <span style='color: #B8A147'>низький</span></h2>";}
                        if ($sum_stress>4){$stress="<h2>Стресс <span style='color: #B8A147'>Вам не загрожує</span></h2>";}
                        
                        //echo $sum_stress;
                       
                        echo $stress;
                        $_SESSION['stress']=$stress;
                    }


                    ?>
    </div>

<?php
include('../../footer.php');
?>