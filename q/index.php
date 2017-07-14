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

        <a href="questoes.php" >questoes</a>
        |
         <a href="relacionados.php" >palavras chave</a>
        <hr>
        <form action="salva.php" method="post" >

            titulo
            <br>
            <textarea type="text" name="titulo" rows="3" cols="70" ></textarea>
            <br>

            questao
            <br>
            <textarea type="text" name="questao" rows="8" cols="70" ></textarea>
            <br>

            obs
            <br>
            <textarea type="text" name="obs" rows="8" cols="70" ></textarea>
            <br>

            resposta
            <br>
            <textarea type="text" name="resposta" rows="3" cols="70" ></textarea>
            <br>

            <input type="submit" value="Enviar" />

        </form>

        <?php
        $f = file('questoes');

        echo '<hr>quantidade de questões ' . count($f);
        /*
          foreach ($f as $v) {

          $str = json_decode($v, true);

          echo '<br>';
          echo $str[0] . '<br>';
          echo '<br>';

          echo $str[1] . '<br>';
          }

         */
        ?>
    </body>
</html>
