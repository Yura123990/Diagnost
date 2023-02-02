<?php
session_start();
if ($_SESSION['role']!=1){ header('Location: https://diagnost.virtlabse.com');}
include('../../header2.php');
?>
                                <h2 class="art-postheader">Серцево-судинні захворювання</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>Анкета для визначення захворювань: Серця та судин</p>
<?php
if (!(isset($_POST['sb']))):?>
                    <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для діагностики захворювання заповніть поля анкети";
                        ?>
                    </h2>
                    <h1>Анкета щодо визначення серцево-судинного захворювання.</h1>
                    <h2>Для кожного із зазначених симптомів введіть значення, яке вказує його рівень<br></h2>
                    <form action="cardiovascular.php" method="post">
                        <table>
                            <tr>
                                <td>Кашель, що посилюється у лежачому положенні</td>
                                <td><select name="sl1">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Підвищена стомлюваність, слабкість, тремтіння в руках</td>
                                <td><select name="sl2">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Блідість обличчя, посинення губ, мочок вух, ніг</td>
                                <td><select name="sl3">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Підвищення температури</td>
                                <td><select name="sl4">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Зміна частоти та ритму пульсу</td>
                                <td><select name="sl5">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Стабільно підвищений чи знижений кров'яний тиск</td>
                                <td><select name="sl6">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Набряки в нижніх кінцівках</td>
                                <td><select name="sl7">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Головні болі</td>
                                <td><select name="sl8">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Запаморочення</td>
                                <td><select name="sl9">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Больові відчуття в ногах під час ходьби</td>
                                <td><select name="sl10">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Болі у грудях</td>
                                <td><select name="sl11">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Задуха</td>
                                <td><select name="sl12">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Непритомність без причини</td>
                                <td><select name="sl13">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль у хребті</td>
                                <td><select name="sl14">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Відчуття серця, що вискакує з грудей, перепочинок</td>
                                <td><select name="sl15">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Завмирання ритму</td>
                                <td><select name="sl16">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Набряклість</td>
                                <td><select name="sl17">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Порушення сну, тремтіння в руках або ногах</td>
                                <td><select name="sl18">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Нудота</td>
                                <td><select name="sl19">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Почастішання пульсу, аритмія</td>
                                <td><select name="sl20">
                                        <option value=0>ні</option>
                                        <option value=1>дуже низький</option>
                                        <option value=2>низький</option>
                                        <option value=3>середній</option>
                                        <option value=4>високий</option>
                                        <option value=5>дуже високий</option>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" name="sb" value='1'>Надіслати на діагностику</button>

                    </form>
<?php endif?>
                    <?php
                    require('../../../../model/cardioDiagnost.php');
                    $rr=new \model\cardioDiagnost();
                    // var_dump($rr);
                    echo $rr->diagnoz();

                    ?>
                </div>

<?php
	include('../../footer.php');
?>