<?php
namespace model;
//session_start();

class virusDiagnost
{
    public $result;
    public function __construct()
    {

    }
    public function diagnoz(){
        $result=0;
        if (isset($_POST['sb_user'])) {
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
                $result=5;
                echo "<h3> Preliminary diagnosis: <span style='color:darkred; background-color: #1A2629'>High probability of coronavirus disease</span> </h3>";
            }
            if (($funct >= 19) && ($funct < 24)) {
                $result=4;
                echo "<h3> Preliminary diagnosis: <span style='color:red; background-color: #1A2629'>High probability of the flu</span> </h3>";
            }
            if (($funct >= 14) && ($funct < 19)) {
                $result=3;
                echo "<h3> Preliminary diagnosis: <span style='color:#fd7e14; background-color: #1A2629'>The most likely is ARVI</span> </h3>";
            }
            if (($funct >= 10) && ($funct < 14)) {
                $result=2;
                echo "<h3> Preliminary diagnosis: <span style='color:#f5d844; background-color: #4f5050'>High probability of catching a cold</span> </h3>";
            }
            if (($funct < 15)) {
                $result=1;
                echo "<h3> Preliminary diagnosis: <span style='color:#bbff00; background-color: #5c636a'>You have no symptoms of an acute viral infection</span> </h3>";
            }
        }
        return $result;
    }
}