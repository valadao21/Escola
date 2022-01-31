<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISCOPAG</title>
</head>
<body>
    <?php
    require ("./inc/Config.inc.php");

echo "<hr>";

    $aluno = new Aluno('Alexandre','111.333.999');
    echo $aluno->verMatricula();
    echo "<hr>";

    $turma = new Turma ('Alexandre','111.333.999','sala 3','Juan');
    echo $turma->exibirTurma();
    echo "<hr>";

    $pagamento = new Pagamentos('Alexandre','111.333.999','500');
    echo $pagamento->exibirPagamentos();

    $aluno = new Aluno('Luiz','555.333.999');
    echo $aluno->verMatricula();
    echo "<hr>";

    $turma = new Turma ('Luiz','555.333.999','sala 3','Juan');
    echo $turma->exibirTurma();
    echo "<hr>";

    $pagamento = new Pagamentos('Luiz','555.333.999','500');
    echo $pagamento->exibirPagamentos();

    $aluno = new Aluno('Ana','555.333.444');
    echo $aluno->verMatricula();
    echo "<hr>";

    $turma = new Turma ('Luiz','555.333.444','sala 4','Juan');
    echo $turma->exibirTurma();
    echo "<hr>";

    $pagamento = new Pagamentos('Luiz','555.333.444','400');
    echo $pagamento->exibirPagamentos();
    echo "<hr>";
    
    ?>
</body>
</html>
