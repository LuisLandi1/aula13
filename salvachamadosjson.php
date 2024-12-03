<?php
 include 'conexao.php';


$codigoSQL = "INSERT INTO `chamados` (`id`, `departamentos`, `descricao`) VALUES (NULL,:dpt, :dsc)";
try {
$comando = $conexao->prepare($codigoSQL);

$resultado = $comando->execute(array('dpt' => $_GET['departamentos'], 'dsc' => $_GET['descricao']));



if($resultado) {
	echo "cadastrado!";
    } else {
	echo "Erro ao cadastrar!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;
