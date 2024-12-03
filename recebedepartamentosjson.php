
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere Departamento</title>
    <script>
function envia() {
    var endereco = 'salvadepartamentojson.php';

    endereco += '?nome=' + document.getElementById('nome').value;

    
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(){
        var objeto = JSON.parse(xhttp.responseText);

        if(objeto.resultado) {
        document.getElementById('saida').innerHTML = objeto.resultado;
        } else {
        document.getElementById('saida').innerHTML = 'Erro: ' + objeto.erro;
        }

        document.getElementById('nome').value = '';
   }
    
    xhttp.open("GET", endereco);
    xhttp.send();
}
    </script>
</head>
<body>

<form action="salvadepartamentojson.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome">

    <input type="button" value='Inserir' onclick='envia()'>
</form>
<p id="saida"></p>
</body>
</html>  