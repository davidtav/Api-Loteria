<?php
//autoload de classes do composer
require __DIR__ . '/vendor/autoload.php';

//dependencias do projeto
use App\Caixa\Loteria;

//concurso (verificar validações de segurança....)
$concurso = isset($_GET['concurso']) ? $_GET['concurso'] : null;

$resultado = Loteria::consultaResultado("megasena",$concurso);

// echo "<pre>";
// print_r($resultado);

//header
include __DIR__ . '/includes/header.php';
//corpo da pagina
include isset($resultado['numero']) ? __DIR__ . '/includes/result.php' : __DIR__ . '/includes/error.php';   

//footer
include __DIR__ . '/includes/footer.php';
