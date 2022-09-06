<?php
    $timeScriptStart=microtime(true);
    $x = $_POST['x'];
    $y = $_POST['y'];
    $r = $_POST['r'];
    $timeOffset = $_POST['time']*(-1);
    $hit;

    function validateY($y) {
        if (preg_match("/^-?[0-4](\.[0-9]*)?$/",$y)) {
            return true;
        }
        else {
            return false;
        }
    }

    function validateR($r) {
        if (preg_match("/^[1-5]$/",$r)) {
            return true;
        }
        else {
            return false;
        }
    }

    function ifFirstQuerter($x,$y,$r) {
        if ($x >= 0 && $y >= 0 && ($x**2+$y**2 <= $r**2)) return true;
        return false;
    }
    function ifSecondQuerter($x,$y,$r) {
        if ($x <= 0 && $y >= 0 && ($y <= $x + $r)) return true;
        return false;
    }
    function ifThirdQuerter($x,$y,$r) {
        if ($x <= 0 && $y <= 0 && $x >= -$r/2 && $y >= -$r) return true;
        return false;
    }
    if (validateY($y) && validateR($r)) {
    if (ifFirstQuerter($x,$y,$r) || ifSecondQuerter($x,$y,$r) || ifThirdQuerter($x,$y,$r)) $hit="Да";
    else $hit="Нет";
    $date = Date('H:i:s',strtotime($timeOffset.' minutes'));
    $timeScript = number_format(microtime(true) - $timeScriptStart,6).'с';
    $tableArray = $x.' '.$y.' '.$r.' '.$hit.' '.$date.' '.$timeScript;
    if ($_COOKIE['count'] == '') $count = 0;
    else $count = $_COOKIE['count'];
    $count++;
    setcookie("count",$count,time()+300);
    setcookie("table".$count,$tableArray,(time()+300));
    }
    header('Location: table.php')
    ?>
