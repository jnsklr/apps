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
        $str = 'O
comércio de substâncias entorpecentes sem autorização ou em desacordo
com
determinação
regulamentar,
praticado
por
bombeiro
militar
uniformizado, mediante o uso de sua viatura para o transporte das
substâncias e com uso ostensivo de arma de fogo, permite a majoração da
pena-base do delito de tráfico de um sexto a dois terços.';

        $palavras = array("delito", "fogo", "inquérito", "processo penal");


        foreach ($palavras as $v) {
            $pos = stripos($str, $v);
            if ($pos !== false) {
                $palavras_encontradas[] = $v;
            }
        }
        
        print_r($palavras_encontradas);

        $palavras_encontradas = implode(", ", $palavras_encontradas);
        echo $palavras_encontradas . "?";
        ?>
    </body>
</html>
