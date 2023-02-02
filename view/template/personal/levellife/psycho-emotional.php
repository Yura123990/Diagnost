<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class="art-postheader">Діагностика психоемоційної напруги</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><p>Анкета для визначення психоемоційного стану людини</p>
                    <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для діагностики психо-емоційного стану заповніть поля анкети";
                        ?>
                    </h2>
                    <h1>Анкета з визначення психоемоційного стану людини.</h1>
                    <h2>Для кожного із зазначених висловів виберіть твердження Так чи Ні<br></h2>
                    <form action="psycho-emotional.php" method="post">
                        <table>
                            <tr>
                                <td>1.	Я працездатна людина</td>
                                <td><select name="sl1">
                                        <option value=1>так</option>
                                        <option value=0>ні</option>
                               </select></td>
                            </tr>
                            <tr>
                                <td>2.	Я завжди виконую свої обіцянки, не зважаючи на те, зручно мені це чи ні</td>
                                <td><select name="sl2">
                                        <option value=0>так</option>
                                        <option value=1>ні</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>3.	Зазвичай руки та ноги у мене теплі. </td>
                                <td><select name="sl3">
                                        <option value=1>так</option>
                                        <option value=0>ні</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>4.	У мене рідко болить голова</td>
                                <td><select name="sl4">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>5.	Я впевнений у своїх силах. </td>
                                <td><select name="sl5">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>6.	Очікування мене нервує.</td>
                                <td><select name="sl6">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>7.	Іноді мені здається, що я ні на що не придатний.</td>
                                <td><select name="sl7">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>8.	Зазвичай почуваюся здоровою і цілком задоволеною життям людиною.</td>
                                <td><select name="sl8">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>9.	Мені важко зосередитись на повсякденній роботі.</td>
                                <td><select name="sl9">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>10.	У дитинстві я завжди негайно та покірно виконував те, що мені доручали.</td>
                                <td><select name="sl10">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>11.	У мене бувають розлади шлунка 2-3 рази на місяць.</td>
                                <td><select name="sl11">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>12.	Я часто відчуваю внутрішню напругу та тривогу. </td>
                                <td><select name="sl12">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>13.	Думаю, що я більш нервовий, ніж інші люди. </td>
                                <td><select name="sl13">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>14.	Я сором'язлива людина. </td>
                                <td><select name="sl14">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>15.	Іноді буває, що я говорю про речі, в яких не знаюся. </td>
                                <td><select name="sl15">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>16.	Я часто червонію, якщо хвилююся.</td>
                                <td><select name="sl16">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>17.	Я часто засмучуюсь через дрібниці. </td>
                                <td><select name="sl17">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>18.У мене бывают болі в серці, пов'язані з хвилею. </td>
                                <td><select name="sl18">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>19.	Похмура погода майже завжди погіршує мій настрій. </td>
                                <td><select name="sl19">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>20.	Не всі люди, яких я знаю, мені подобаються. </td>
                                <td><select name="sl20">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>21.	Я не можу заснути, якщо мене щось турбує. </td>
                                <td><select name="sl21">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>22.	Зазвичай я спокійний, і мене важко вивести з себе. </td>
                                <td><select name="sl22">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>23.	У мене буваю нічні кошмари. </td>
                                <td><select name="sl23">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>24.	Я схильний приймати все близько до серця. </td>
                                <td><select name="sl24">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>25.	Якщо я нервуюсь, то сильно потію. /td>
                                <td><select name="sl25">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>26.	У мене чуйний, неспокійний сон. </td>
                                <td><select name="sl26">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>27.	В іграх я волію швидше вигравати, ніж програвати. </td>
                                <td><select name="sl27">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>28.	Я більш чутливий, ніж більшість інших людей. </td>
                                <td><select name="sl28">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>29.	У мене немає відчуття відпочинку після сну. </td>
                                <td><select name="sl29">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>30.Буває, що нескромні жарти та гостроти викликають у мене сміх. </td>
                                <td><select name="sl30">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>31.	Я постійно стурбований своїми службовими справами чи фінансами. </td>
                                <td><select name="sl31">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>32.	Я насторожено ставлюся до деяких людей, хоча знаю, що вони не можуть завдати мені шкоди. </td>
                                <td><select name="sl32">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>33.	Іноді здається, що мої проблеми нерозв'язні. </td>
                                <td><select name="sl33">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>34.	Я легко приходжу в замішання. </td>
                                <td><select name="sl34">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>35.	Я волію ухилятися від конфліктів та скрутних положень.</td>
                                <td><select name="sl35">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>36.	У мене бувають напади нудоти, не пов'язані з їдою.</td>
                                <td><select name="sl36">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>37.	Я швидко освоююсь у новій обстановці. </td>
                                <td><select name="sl37">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>38.	Іноді я почуваюся марною і самотньою людиною. </td>
                                <td><select name="sl38">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>39.	Іноді мені хочеться вилаятися. </td>
                                <td><select name="sl39">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>40.	Мене майже завжди турбують можливі невдачі, якщо беруся за нову справу.</td>
                                <td><select name="sl40">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>41.	Я майже завжди відчуваю голод, коли хвилююся. </td>
                                <td><select name="sl41">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>42.	У мене набагато менше страхів та побоювань, ніж у інших людей. </td>
                                <td><select name="sl42">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>43.	Буває, що я відкладаю на завтра те, що можна зробити сьогодні.</td>
                                <td><select name="sl43">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>44.	Моя робота потребує підвищеної зосередженості. </td>
                                <td><select name="sl44">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>45.	Я дуже чутливий до змін погоди. </td>
                                <td><select name="sl45">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>46.	Часто дрібні побутові проблеми викликають роздратування. </td>
                                <td><select name="sl46">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>47.	Я легко знайомлюся з новими людьми. </td>
                                <td><select name="sl47">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>48.	Критичні зауваження мене легко ранять і кривдять.</td>
                                <td><select name="sl48">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>49.	Я постійно турбуюся за здоров'я та благополуччя близьких для мене людей.</td>
                                <td><select name="sl49">
                                        <option value=0>ні</option>
                                        <option value=1>так</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>50.	У мене хороша пам'ять. </td>
                                <td><select name="sl50">
                                        <option value=1>ні</option>
                                        <option value=0>так</option>
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
                        $emo=array('sl1','sl3','sl4','sl5','sl6','sl7','sl8','sl9','sl11','sl12','sl13','sl14','sl16','sl17','sl18','sl19','sl21','sl22','sl23','sl24','sl25','sl26', 'sl28', 'sl29','sl32','sl33','sl34','sl36','sl38','sl40','sl41','sl42','sl43','sl44','sl46', 'sl47','sl48','sl49','sl50');
                        $emo_lie=array('sl2','sl10','sl15','sl20','sl27','sl30','sl35','sl39');
                        $sum_emo=0;
                        $sum_emo_lie=0;

                        //var_dump($emo);
                        if($sum_emo_lie>=3){echo"<h2>Рівень брехливості <span style='color: #E2341D'>ВИСОКІЙ</span></h2>";}
                        foreach ($emo as $st){
                            $sum_emo+=$_POST[$st];
                        }
                        foreach ($emo_lie as $st){
                            $sum_emo_lie+=$_POST[$st];
                        }
                        if(($sum_emo>=1)&&($sum_emo<=8)){$emo="<h2>Рівень тривожності <span style='color: #0c4128'>низкій</span></h2>";}
                        if(($sum_emo>=9)&&($sum_emo<=16)){$emo="<h2>Рівень тривожності <span style='color: #146c43'>середній, з тенденцією до низького</span></h2>";}
                        if(($sum_emo>=17)&&($sum_emo<=24)){$emo="<h2>Урівень тривожності <span style='color: #B8A147'>середній</span></h2>";}
                        if(($sum_emo>=25)&&($sum_emo<=32)){$emo="<h2>Уровень тревожности <span style='color: #fd7e14'>средний, с тенденцией до високого</span></h2>";}
                        if(($sum_emo>=33)&&($sum_emo<=40)){$emo="<h2>Уровень тревожности <span style='color: #E2341D'>високій</span></h2>";}
                        echo $emo;
                       

                        $nevr=$_POST['sl6']+$_POST['sl6']+$_POST['sl7']+$_POST['sl9']+$_POST['sl12']+$_POST['sl13']+$_POST['sl17']+$_POST['sl18']+$_POST['sl19']+$_POST['sl21']+$_POST['sl23']+$_POST['sl26']+$_POST['sl28']+$_POST['sl29']+$_POST['sl31']+$_POST['sl32']+$_POST['sl38']+$_POST['sl40']+$_POST['sl41']+$_POST['sl45']+$_POST['sl46'];
                        if($nevr>=10){$nevroz="<h2>Високий рівень  <span style='color: #E2341D'>НЕВРОЗУ</span></h2>";}
                        echo $nevroz;
                         $_SESSION['emo']=$emo;
                        $_SESSION['nevroz']=$nevroz;
                        //echo"emo_lie=".$sum_emo_lie;


                    }


                    ?>
    </div>

<?php
include('../../footer.php');
?>