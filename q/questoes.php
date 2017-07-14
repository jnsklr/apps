<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="inc/estilos.css">

    </head>
    <body>
        <?php
        $f = file('questoes');

        echo 'quantidade de questões ' . count($f) . '<hr>';

        foreach ($f as $v) {

            $v = str_replace(array('.', ':'), array('.<br>', ':<br>'), $v);
            $v = str_replace(array('art.<br>', 'Art.<br>'), array('art. ', 'Art. '), $v);

            $v = str_replace(array('CORRET', 'INCORRET', 'ERRAD'),array('<strong>CORRET</strong>', '<strong>INCORRET</strong>', '<strong>ERRAD</strong>'), $v);

            $str = json_decode($v, true);

            echo '<h4>' . $str[0] . '</h4>';

            echo '<p>' . $str[1] . '</p>';

            echo '<a href="questao.php?a=' . urlencode($v) . '" >resposta</a><hr>';
        }
        ?>
    </body>
</html>
