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
        $a = $_GET["a"];

        $str = json_decode($a, true);

        echo '<h4>' . $str[0] . '</h4>';

        echo '<p>';

        echo $str[1] . '<br>';

        echo '</p>';

        echo '<hr>';
        
        echo '<p>';
        
        echo $str[2];

        echo '<br>' . $str[3];

        echo '</p>';
        ?>
    </body>
</html>
