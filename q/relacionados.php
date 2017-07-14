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
        $f = file('inc/referencia', FILE_IGNORE_NEW_LINES);
        $ref = array();
        foreach ($f as $v) {

            $v = json_decode($v);

            echo $v[0] . ' | ' . $v[1] . '<br>';
            $ref = array_merge($ref, explode(',', $v[1]));
        }
        
        print_r(array_unique($ref));
        ?>
    </body>
</html>
