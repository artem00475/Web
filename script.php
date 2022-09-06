<?php
    $timeScriptStart=microtime(true);
    $x = $_POST['x'];
    $y = $_POST['y'];
    $r = $_POST['r'];
    $hit;

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
    if (ifFirstQuerter($x,$y,$r) || ifSecondQuerter($x,$y,$r) || ifThirdQuerter($x,$y,$r)) $hit="Да";
    else $hit="Нет";
    $date = Date('H:i:s',strtotime('+3 hours'));
    $timeScript = number_format(microtime(true) - $timeScriptStart,6).'с';
    $tableArray = $x.' '.$y.' '.$r.' '.$hit.' '.$date.' '.$timeScript;
    if ($_COOKIE['count'] == '') $count = 0;
    else $count = $_COOKIE['count'];
    $count++;
    setcookie("count",$count,time()+300);
    setcookie("table".$count,$tableArray,(time()+300));
    header('Location: table.php')
    ?>
