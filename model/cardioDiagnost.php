<?php
namespace model;
session_start();

class cardioDiagnost
{
    public function __construct()
    {

    }
    public function diagnoz(){
        if (isset($_POST['sb'])) {
            foreach ($_POST as $key => $simpt) {
                switch ($simpt) {
                    case 1:
                        $koef = 1;
                        break;
                    case 2:
                        $koef = 1;
                        break;
                    case 3:
                        $koef = 1.1;
                        break;
                    case 4:
                        $koef = 1.3;
                        break;
                    case 5:
                        $koef = 1.5;
                        break;
                    default :
                        $koef = 0;;
                }
                $_SESSION["$key"] = $simpt;
                $funct += $simpt * $koef;
            }
            $funct -= 1;
            $funct /= 5;
            if ($funct >= 24) {
                echo "<h3> Попередній діагноз: <span style='color:darkred; background-color: #1A2629'>висока верогідність передінфарктного стану</span> </h3>";
            }
            if (($funct >= 19) && ($funct < 24)) {
                echo "<h3> Попередній діагноз: <span style='color:red; background-color: #1A2629'>висока верогідність ішемічної хвороби серця</span> </h3>";
            }
            if (($funct >= 14) && ($funct < 19)) {
                echo "<h3> Попередній діагноз: <span style='color:#fd7e14; background-color: #1A2629'>висока верогідність передінсультного стану</span> </h3>";
            }
            if (($funct >= 10) && ($funct < 14)) {
                echo "<h3> Попередній діагноз: <span style='color:#f5d844; background-color: #4f5050'>висока верогідність стенокадії или пороку сердця</span> </h3>";
            }
            if (($funct < 15)) {
                echo "<h3> Попередній діагноз: <span style='color:#bbff00; background-color: #5c636a'>висока верогідність арітмії</span> </h3>";
            }
        }
    }
}