<?php

$titulo = $_POST["titulo"];

$questao = $_POST["questao"];

$obs = $_POST["obs"];

$resposta = $_POST["resposta"];

$f = file('questoes');

foreach ($f as $v) {

    $str = json_decode($v, true);

    if ($str[0] == $titulo) {
        echo '<h2> questão ' . $titulo . ' já existe <h2>';
        exit;
    }
}

$fo = fopen('questoes', 'a');

fwrite($fo, PHP_EOL);


$a[] = $titulo;
$a[] = $questao;

$fpc = file('inc/palavra_chave', FILE_IGNORE_NEW_LINES);

foreach ($fpc as $v) {
    $pos = stripos($questao, $v);
    echo $v . $pos . '<br>';
    if ($pos !== false) {
        $palavras_encontradas[] = $v;
    }
}

if (count($palavras_encontradas) > 0) {

    $chave[] = $titulo;
    $chave[] = implode(", ", $palavras_encontradas);

    $fopc = fopen('inc/referencia', 'a');
    fwrite($fopc, json_encode($chave) . PHP_EOL);
    fclose($fopc);
}

$a[] = $obs;
$a[] = $resposta;

$a[] = preg_replace("(\D)", '', substr($titulo, 0, 3));


$str = json_encode($a);

fwrite($fo, $str);

fclose($fo);


header('Location: index.php');

exit;
