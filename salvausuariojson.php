<?php
//$nome = $_GET['nome'];
//var_dump($_GET);

include 'conexao.php';

if($_GET['tecnico'] == "true"){
    $xuxa = 1;}
else{
    $xuxa = 0;
}

$comandoSQL = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `tecnico`) VALUES (NULL, '{$_GET['nome']}', '{$_GET['email']}', '{$_GET['senha']}', '{$xuxa}')";

// PDOStatement|false
$resultado = $conexao->query($comandoSQL);

$vetor = array();

if($resultado) {
    $vetor['resultado'] = "Usuário {$_GET['nome']} cadastrado.";
} else {
    $vetor['erro'] = "Erro ao cadastrar usuário.";
}

echo json_encode($vetor);

?>