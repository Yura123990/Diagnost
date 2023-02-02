<?php
namespace model;

class gastroDiagnost
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
                echo "<h3> Попередній діагноз: <span style='color:darkred; background-color: #1A2629'>хвороба стравоходу</span> </h3>";
            }
            if (($funct >= 19) && ($funct < 24)) {
                echo "<h3> Попередній діагноз: <span style='color:red; background-color: #1A2629'>хвороба шлунка</span> </h3>";
            }
            if (($funct >= 14) && ($funct < 19)) {
                echo "<h3> Попередній діагноз: <span style='color:#fd7e14; background-color: #1A2629'>хвороба печінки</span> </h3>";
            }
            if (($funct >= 10) && ($funct < 14)) {
                echo "<h3> Попередній діагноз: <span style='color:#f5d844; background-color: #4f5050'>проблеми з підшлунковою залозою</span> </h3>";
            }
            if (($funct < 15)) {
                echo "<h3> Попередній діагноз: <span style='color:#bbff00; background-color: #5c636a'>проблеми з кишківником</span> </h3>";
            }
        }
    }
}