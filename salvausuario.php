<?php
 include 'conexao.php';


$codigoSQL = "INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES (NULL,:nm, :eml, :sh)";
try {
$comando = $conexao->prepare($codigoSQL);

$resultado = $comando->execute(array('nm' => $_GET['nome'], 'eml' => $_GET['email'], 'sh' => $_GET['senha']));



if($resultado) {
	echo "Usuario cadastrado!";
    } else {
	echo "Erro ao cadastrar o usuario!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>