<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style type="text/css">
        .mainTable {
            width: 100%;
            text-align: center;
            border: solid;
            table-layout: fixed;
            border-collapse: collapse;
        }
        a::after {
            content: "→";
        }

        a:hover {
            opacity: .5;
        }

        .hat > td {
            border-bottom: 1px solid gray;
            font-size: large;
            color: brown;
            font-family: monospace;
            background-color: antiquewhite;
        }
        
        body {
            background-color: aquamarine;
        }
        .inputRow td {
            background-color: aliceblue;
            padding-bottom: 1%;
        }
        .inputRow table {
            margin-left: auto;
            margin-right: auto;
        }
        th {
            background-color: aliceblue;
            padding-top: 1%;
        }
    </style>
</head>
<body>
    <table class="mainTable">
        <tr class="hat">
            <td>
                <h3>Тучин Артём<br>Группа P32111 <br>Вариант 815</h3>
            </td>
            <td><a href="lab1.html">Главная</a></td>
        </tr>
        <tr>
            <th colspan="2">Table</th>
        </tr>
        <tr class="inputRow">
            <td colspan="2">
                <table>
                    <tr>
                        <th>X</th>
                        <th>Y</th>
                        <th>R</th>
                        <th>Попадание</th>
                        <th>Текущее время</th>
                        <th>Время выполнения</th>
                    </tr>
                    <?php foreach ($_COOKIE as $key => $row) {
                        if (!preg_match("/table\w/",$key)) continue;
                        echo '<tr>';
                        $array=explode(' ',$row);
                        foreach ($array as $value) {
                            echo '<td>'.$value.'</td>';
                        }
                        echo '</tr>';
                    }
                        ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>