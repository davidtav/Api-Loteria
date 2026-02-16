
<img class="mb-5"src="img/logo-megasena-1024x202.png" alt="logo da mega sena" width="400" >
<p class="fs-1">
    Concurso:
    <span class="badge bg-success"><?= $resultado['numero'] ?></span>
</p> 
<p class="fs-5">
    Data de apuração:
    <span class="badge bg-success"><?= $resultado['dataApuracao'] ?></span>
</p> 
<p class="fs-5">
    Resultado:
    <!-- verficação com if else ternario, caso o resultado sera true, deve exibir Acumulado, caso false, exibir Premiado -->
    <span class="badge bg-success"><?= ($resultado['acumulado'] ? 'Acumulado' : 'Premiado') ?></span>
</p> 

<p class="fs-3 mt-5 fw-bold"> Dezenas sorteadas:</p> 

<div class=" d-flex justify-content-center">
    <?php foreach($resultado['listaDezenas'] as $dezena): ?>
        <span class="dezena"> 
            <?= $dezena ?>
        </span>
    <?php endforeach; ?>
</div>