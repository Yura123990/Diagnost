<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');

?>
                                <h2 class="art-postheader">Гастроентерологічні захворювання</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>Анкета для визначення гастроентерологічних захворювань: хвороби стравоходу, шлунка, кишечника, печінки, жовчного міхура, підшлункової залози</p>
<?php
if (!(isset($_POST['sb']))):?>
                    <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для діагностики захворювання заповніть поля анкети";
                        ?>
                    </h2>
                    <h1>Анкета щодо визначення гастроентерологічного захворювання.</h1>
                    <h2>Для кожного із зазначених симптомів введіть значення, яке вказує його рівень<br></h2>
                    <form action="gastroenterological.php" method="post">
                        <table>
                            <tr>
                                <td>Нудота</td>
                                <td><select name="sl1">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Печія, відрижка кислим</td>
                                <td><select name="sl2">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Кислий або металевий присмак у роті</td>
                                <td><select name="sl3">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Сильні болі у тілі</td>
                                <td><select name="sl4">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Зниження апетиту</td>
                                <td><select name="sl5">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Нудота, блювота</td>
                                <td><select name="sl6">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Бурчання, здуття живота</td>
                                <td><select name="sl7">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Слабкість у тілі</td>
                                <td><select name="sl8">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Слібкій стилець</td>
                                <td><select name="sl9">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Гіркота в роті</td>
                                <td><select name="sl10">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Почуття печіння та болю за грудиною</td>
                                <td><select name="sl11">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Часта гикавка</td>
                                <td><select name="sl12">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Відріжка</td>
                                <td><select name="sl13">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Втрата ваги</td>
                                <td><select name="sl14">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Непостійний стілець</td>
                                <td><select name="sl15">
                                        <option value=0>нет</option>
                                        <option value=1>очень низкий</option>
                                        <option value=2>низкий</option>
                                        <option value=3>средний</option>
                                        <option value=4>высокий</option>
                                        <option value=5>очень высокий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Висипання на шкірі</td>
                                <td><select name="sl16">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Сухий кашель</td>
                                <td><select name="sl17">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Неприємний запах із рота</td>
                                <td><select name="sl18">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль в животі</td>
                                <td><select name="sl19">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль у кишечнику</td>
                                <td><select name="sl20">
                                        <option value=0>немає</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середний</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" name="sb" value='1'>Надіслати на діагностику</button>

                    </form>
<?php endif?>
                    <?php
                    require('../../../../model/gastroDiagnost.php');
                    $rr=new \model\gastroDiagnost();
                    // var_dump($rr);
                    echo $rr->diagnoz();

                    ?>
                </div>



<?php
	include('../../footer.php');
?>