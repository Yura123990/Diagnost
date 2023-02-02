<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class="art-postheader">Визначення важкості депресії</h2>
                <div class="art-postcontent art-postcontent-0 clearfix"><p>
                        <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для визначення важкості депресії заповніть поля анкети";
                        ?>
                    </h2>
                    <h1>Анкета для визначення важкості депресії.</h1>
                    <h2>Оцініть, будь ласка, наскільки Ви погоджуєтеся з кожним із наведених нижче тверджень.<br></h2>
                    <form action="depression.php" method="post">
                        <table>
                            <tr>
                                <td>1.	Я відчуваю напругу, мені не по собі</td>
                                <td><select name="sl1">
                                         <option value=0>зовсім не відчуваю</option>
                                         <option value=1>час від часу, іноді</option>
                                        <option value=2>часто</option>
                                        <option value=3>постійно</option>
                                       
                               </select></td>
                            </tr>
                            <tr>
                                <td>2. Я відчуваю страх, здається, що щось жахливе може ось-ось статися</td>
                                <td><select name="sl2">
                                        <option value=0>зовсім не відчуваю</option>
                                        <option value=1>іноді, але це мене не турбує</option>
                                        <option value=2>так, це так, але страх не дуже великий</option>
                                        <option value=3>безумовно це так, і страх дуже великий</option>
                                        <option value=0>зовсім не відчуваю</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>3.	Неспокійні думки крутяться у мене в голові. </td>
                                <td><select name="sl3">
                                        <option value=0>тільки іноді</option>
                                        <option value=1>іноді і не так часто</option>
                                        <option value=2>більшу частину часу</option>
                                        <option value=3>постійно</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>4.	Я легко можу присісти та розслабитися</td>
                                <td><select name="sl4">
                                        <option value=0>звичайно, так</option>
                                        <option value=1>напевно, це так</option>
                                        <option value=2>іноді, це так</option>
                                        <option value=3>зовсім не можу</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>5.	Я відчуваю внутрішню напругу або тремтіння. </td>
                                <td><select name="sl5">
                                       <option value=0>зовсім не відчуваю</option>
                                       <option value=1>іноді</option>
                                        <option value=2>часто</option>
                                        <option value=3>дуже часто</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>6.	Я відчуваю непосидючість, мені постійно треба рухатися.</td>
                                <td><select name="sl6">
                                       <option value=0>зовсім не відчуваю</option>
                                       <option value=1>лише певною мірою, це так</option>
                                        <option value=2>напевно, це так</option>
                                        <option value=3>безумовно, це так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>7.	У мене буває раптове відчуття паніки.</td>
                                <td><select name="sl7">
                                        <option value=0>зовсім не відчуваю</option>
                                        <option value=1>не дуже часто</option>
                                        <option value=2>часто</option>
                                        <option value=3>дуже часто</option>
                                        
                                    </select></td>
                            </tr>
                            
                            <tr>
                                <td>8.	Те, що приносило мені велике задоволення, і зараз викликає в мене таке саме почуття.</td>
                                <td><select name="sl8">
                                        <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>9.	Я здатний розсміятися і побачити в тій чи іншій події кумедне.</td>
                                <td><select name="sl9">
                                        <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>10.	Я відчуваю бадьорість.</td>
                                <td><select name="sl10">
                                       <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>11.	Мені здається, що я почав усе робити дуже повільно.</td>
                                <td><select name="sl11">
                                        <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>12. Я не стежу за своєю зовнішністю.</td>
                                <td><select name="sl12">
                                       <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>13.	Я вважаю, що мої справи (заняття, захоплення) можуть принести мені задоволення.</td>
                                <td><select name="sl13">
                                        <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>14.	Я можу отримати задоволення від хорошої книги, радіо або телепрограми.</td>
                                <td><select name="sl14">
                                        <option value=0>безумовно, це так</option>
                                        <option value=1>мабуть, це так</option>
                                        <option value=2>лише дуже малою мірою, це так</option>
                                        <option value=3>це зовсім не так</option>
                                        
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
                        $emo=array('sl1','sl2','sl3','sl4','sl5','sl6','sl7');
                        $emo1=array('sl8','sl9','sl10','sl11','sl12','sl13', 'sl4');
                        
                        $sum_trev=0;
                        $sum_depr=0;
                       

                        //var_dump($emo);
                        
                        foreach ($emo as $st){
                            $sum_trev+=$_POST[$st];
                        }
                        foreach ($emo1 as $st){
                            $sum_depr+=$_POST[$st];
                        }
                        //echo $sum_trev;
                       // echo"<hr>";
                        //echo $sum_depr;
                        
                        if(($sum_trev>0)&&($sum_trev<=7)){$trev="<h2>Ваш рівень тривожності <span style='color: #0c4128'>«норма» (відсутність достовірно виражених симптомів тривоги)</span></h2>"; }
                        if(($sum_trev>7)&&($sum_trev<=10)){$trev="<h2>Рівень <span style='color: #146c43'>субклінічно виражена тривога </span></h2>";}
                        if(($sum_trev>11)){$trev="<h2>Рівень <span style='color: #B8A147'>клінічно виражена тривога </span></h2>";}
                        if(($sum_depr>=0)&&($sum_depr<=7)){$depr="<h2>Ваш рівень депресії <span style='color: #0c4128'>«норма» (відсутність достовірно виражених симптомів депресії)</span></h2>";}
                        if(($sum_depr>7)&&($sum_depr<=10)){$depr="<h2><span style='color: #146c43'>Субклінічно виражена депресія</span></h2>";}
                        if(($sum_depr>11)){$depr="<h2>Рівень <span style='color: #B8A147'>клінічно виражена депресія</span></h2>";}
                        echo"$trev";
                        echo"$depr";
                        $_SESSION['trev']=$trev;
                        
                        $_SESSION['depr']=$depr;
                    }


                    ?>
    </div>

<?php
include('../../footer.php');
?>