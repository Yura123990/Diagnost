<?php
session_start();//echo $_SESSION['role'];die();
if ($_SESSION['role']!=2){ header( "Location: https://diagnost.virtlabse.com");
}
include('header.php');
$pathExp=dirname(dirname(__DIR__)).'/model/dataExpert.php';
//echo $pathExp;
require($pathExp);
use model\dataExpert;
?>
                                <h2 class="art-postheader">Панель експерта</h2>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p>Форма введення коефіцієнтів симптомів захворювань: Грип, ГРЗ, Короновірус</p>
                    <h2>
                        <?php
                        echo $_SESSION['firstname']."  ".$_SESSION['lastname']. " для діагностики захворювання заповніть поля анкети";
                        if ($_SESSION['role']!=='2'){ header( "Location: https://diagnost.virtlabse.com");
                         }
                        echo "<h1 style='color:red'>Шановний експерт,". $_SESSION['firstname']."  ". $_SESSION['lastname']. "  заповніть, будь ласка симптоматику захворювання";
                       //$_POST['sb_exp']=0;
                        ?>
                    </h2>
                    <form action="experts.php" method="post">
                    <h1>Визначення характеристик вірусного захворювання
                        <select name="sl0">
                            <option value=0>короновірус</option>
                            <option value=1>грип</option>
                            <option value =2>ГРВІ</option>
                            <option value =3>загальне застудне захворювання</option>
                        </select></h1>
                    <h2>Для кожного із зазначених симптомів введіть коефіцієнти за ступенем важливості для захворювання<br></h2>

                        <table>
                            <tr>
                                <td>Нежить</td>
                                <td><select name="sl1">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Лихоманка</td>
                                <td><select name="sl2">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Кашель</td>
                                <td><select name="sl3">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Сильні болі у тілі</td>
                                <td><select name="sl4">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Головний біль</td>
                                <td><select name="sl5">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Кон'юктивіт</td>
                                <td><select name="sl6">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Набухання лімфотичних вузлів</td>
                                <td><select name="sl7">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Слабкість у тілі</td>
                                <td><select name="sl8">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Блювота</td>
                                <td><select name="sl9">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль в горлі</td>
                                <td><select name="sl10">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Втрата апетиту</td>
                                <td><select name="sl11">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Чихання</td>
                                <td><select name="sl12">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Висока температура</td>
                                <td><select name="sl13">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Слабкий стілець</td>
                                <td><select name="sl14">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль в животі</td>
                                <td><select name="sl15">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Втрата нюху</td>
                                <td><select name="sl16">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Втрата смаку</td>
                                <td><select name="sl17">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Втрата орієнтації</td>
                                <td><select name="sl18">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль у м'язах та суглобах</td>
                                <td><select name="sl19">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>Біль у грудях</td>
                                <td><select name="sl20">
                                        <option value=0>не важливий</option>
                                        <option value=1>не характерний</option>
                                        <option value=2>можливий</option>
                                        <option value=3>часто зустрічається</option>
                                        <option value=4>характерний</option>
                                        <option value=5>визначальний</option>
                                    </select></td>
                            </tr>
                        </table>
                        <button type="submit" name="sb_exp" value='1'>Ввести до бази</button>

                    </form>
                    <?php
                    if ($_POST['sb_exp']==1){
                        $datExp= new \model\dataExpert();
                         echo"<hr>";
                        for ($i=0; $i<21; $i++){
                            $sl='sl';
                            $sl.=$i;

                            $simpt[$i]=$_POST[$sl];
                        }
                        $simpt[21]=$_SESSION['id_user'];
                        echo "<h2>Показники прийнято</h2>";
                           

                       // var_dump($datExp);
                        $de=$datExp->setSimptomExpert($simpt);
                        //var_dump($de);
                    }

                    /*require('../../../../model/virusDiagnost.php');
                    $rr=new \model\virusDiagnost();
                    // var_dump($rr);
                    echo $rr->diagnoz();*/

                    ?>
                    <button type="button" name="b_exp" value='1' onClick="document.location.href='https://diagnost.virtlabse.com/view/template/avgexp.php'"> База знань</button>
                </div>
                                
                

<?php
	include('footer.php');
?>