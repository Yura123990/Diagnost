<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://defindviral.virtlabse.com');}
include('../../header2.php');
?>
<?php
    if (!(isset($_POST['sb']))):?>
                                <h2 class='art-postheader'>Оцінка якості життя</h2>
                <div class='art-postcontent art-postcontent-0 clearfix'><p>
                        <h2>
                        <?php
                        echo $_SESSION['firstname'].' '.$_SESSION['lastname']. ' для визначення якості життя заповніть поля анкети';
                        ?>
                    </h2>
                    <h1>Анкета для визначення якості життя.</h1>
                    <h2>Оцініть, будь ласка, наскільки Ви згодні з кожним із наведених нижче тверджень.<br></h2>
                    <form action='quality_of_life.php' method='post'>
                        <table>
                            <tr>
                                <td>1.
Загалом ви оцінили б стан Вашого здоров'я як </td>
                                <td><select name='sl1'>
                                         <option value=1>Чудове</option>
                                         <option value=2>Дуже добре</option>
                                        <option value=3>Гарне</option>
                                        <option value=4>Посереднє </option>
                                        <option value=5>Поганий</option>
                                       
                               </select></td>
                            </tr>
                            <tr>
                                <td>2. Як би ви оцінили своє здоров'я зараз порівняно з тим, що було рік тому?</td>
                                <td><select name='sl2'>
                                        <option value=1>Значно краще, ніж рік тому</option>
                                         <option value=2>Дещо краще, ніж рік тому</option>
                                        <option value=3>Приблизно так, як рік тому</option>
                                        <option value=4>Дещо гірше, ніж рік тому </option>
                                        <option value=5>Набагато гірше, ніж рік тому</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>3.
Стурбовані думки крутяться у мене в голові. </td>
                                <td><select name='sl3'>
                                        <option value=1>Чудове</option>
                                         <option value=2>Дуже добре</option>
                                        <option value=3>Гарне</option>
                                        <option value=4>Посереднє </option>
                                        <option value=5>Поганий</option>
                                    </select></td>
                            </tr>
                            <tr>
                               <td>4.
Тяжкі фізичні навантаження, такі як біг, підняття тяжкості, заняття силовими видами спорту</td>
                                <td><select name='sl4'>
                                        <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>5.
Помірні фізичні навантаження, такі як пересунути стіл, попрацювати з пилососом, збирати гриби чи ягоди. </td>
                                <td><select name='sl5'>
                                      <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>6.
Підняти або нести сумку з продуктами.</td>
                                <td><select name='sl6'>
                                       <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>7.
Підходити пішки сходами на кілька прольотів.</td>
                                <td><select name='sl7'>
                                        <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            
                            <tr>
                                <td>8.
Підходити пішки сходами на один проліт.</td>
                                <td><select name='sl8'>
                                        <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>9.
Нахилитися, стати навколішки, сісти навпочіпки.</td>
                                <td><select name='sl9'>
                                       <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>10.
Пройти відстань більше одного кілометра.</td>
                                <td><select name='sl10'>
                                        <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>11.
Пройти відстань у кілька кварталів.</td>
                                <td><select name='sl11'>
                                       <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>12.
Пройти відстань в один квартал.</td>
                                <td><select name='sl12'>
                            <tr>
                                <td>13.
Самостійно вимитися, одягнутися.</td>
                                <td><select name='sl13'>
                                        <option value=1>Так, значно обмежує</option>
                                         <option value=2>Так, трохи обмежує</option>
                                        <option value=3>Ні, зовсім не обмежує</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>14.
 Чи було за останні 4 тижні, що Ваш фізичний стан викликав труднощі у Вашій роботі або іншій повсякденній діяльності, внаслідок чого.</td>
                                <td><select name='sl14'>
                                        <option value=1>Так</option>
                                         <option value=2>Ні</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>15.
 Чи бувало за останні 4 тижні, що Ваш емоційний стан викликав труднощі у Вашій роботі або іншій повсякденній діяльності.</td>
                                <td><select name='sl15'>
                                        <option value=1>Так</option>
                                         <option value=2>Ні</option>
                                        
                                    </select></td>
                            </tr>
                            <tr>
                                <td>16.
Наскільки Ваш фізичний чи емоційний стан протягом останніх 4 тижнів заважав Вам проводити час із сім'єю, друзями, сусідами чи в колективі?</td>
                                <td><select name='sl16'>
                                        <option value=1>Зовсім не заважало</option>
                                        <option value=2>Трохи</option>
                                        <option value=3>Помірно</option>
                                        <option value=4>Сильно</option>
                                         <option value=5>Дуже сильно</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>17.
Наскільки сильний фізичний біль Ви відчували за останні 4 тижні?</td>
                                <td><select name='sl17'>
                                        <option value=1>Дуже слабку</option>
                                        <option value=2>Слабую</option>
                                        <option value=3>Помірно</option>
                                        <option value=4>Сильну</option>
                                         <option value=5>Дуже сильна</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>18.
 Якою мірою біль протягом останніх 4 тижнів заважав Вам займатися Вашою нормальною роботою, включаючи роботу поза домом та по дому? </td>
                                <td><select name='sl18'>
                                        <option value=1>Зовсім не заважало</option>
                                        <option value=2>Трохи</option>
                                        <option value=3>Помірно</option>
                                        <option value=4>Сильно</option>
                                         <option value=5>Дуже сильно</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>19. Ви відчували себе бадьорим(ою)?</td>
                                <td><select name='sl19'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>20.
Ви сильно нервували?</td>
                                <td><select name='sl20'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                           <tr>
                                <td>21.
Ви відчували себе таким пригніченим, що ніщо не могло Вас підбадьорити? </td>
                                <td><select name='sl21'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>22.
Ви відчували себе спокійним і умиротвореним?</td>
                                <td><select name='sl22'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>23.
Ви відчували себе повним(их) сил та енергії?</td>
                                <td><select name='sl23'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>24.
Ви відчували себе впалим духом і сумним? </td>
                                <td><select name='sl24'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>25.
Ви відчували себе змученим(ий)?</td>
                                <td><select name='sl25'>
                                        <option value=1>Все час</option>
                                        <option value=2>Велику частину часу</option>
                                        <option value=3>Часто</option>
                                        <option value=4>Іноді</option>
                                         <option value=5>Рідко</option>
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
                        $emo=array('sl1','sl2','sl3','sl4','sl5','sl6','sl7','sl8',);
                        $emo1=array('sl9','sl10','sl11','sl12','sl13', 'sl14', 'sl15','sl16');
                         $emo2=array('sl17','sl18','sl19','sl20', 'sl21','sl22', 'sl23','sl24', 'sl25');
                        
                        $sum_psyho=0;
                        $sum_emoc=0;
                        $sum_fiz=0;
                       

                        //var_dump($emo);
                        
                        foreach ($emo as $st){
                            $sum_psyho+=$_POST[$st];
                        }
                        foreach ($emo1 as $st){
                            $sum_fiz+=$_POST[$st];
                        }
                        foreach ($emo2 as $st){
                            $sum_emo+=$_POST[$st];
                        }
                        //echo $sum_trev;
                       // echo"<hr>";
                        //echo $sum_depr;
                        
                       $psyho="<h2>Ваш рівень психологічного стану дорівнює <span style='color: #0c4128'>$sum_psyho</span></h2>";
                        $fiz="<h2>Ваш рівень фізичного стану дорівнює <span style='color: #0c4128'>$sum_fiz</span></h2>";
                        $emoc="<h2>Ваш рівень психологічного стану дорівнює <span style='color: #0c4128'>$sum_emo</span></h2>";
                        
                        echo"$psyho";
                        echo"$fiz";
                        echo"$emoc";
                        $_SESSION['psyho']=$psyho;
                        $_SESSION['fiz']=$fiz;
                        $_SESSION['emoc']=$emoc;
                    }


                    ?>
    </div>

<?php
include('../../footer.php');
?>