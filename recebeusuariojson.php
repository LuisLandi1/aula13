<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere Usuario</title>
    <script>
function envia() {
    var endereco = 'salvausuariojson.php';

    endereco += '?nome=' + document.getElementById('nome').value;
    endereco += '&email=' + document.getElementById('email').value;
    endereco += '&senha=' + document.getElementById('senha').value;
    endereco += '&tecnico=' + document.getElementById('tecnico').checked;

    
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(){
       
        var objeto = JSON.parse(xhttp.responseText);

        if(objeto.resultado) {
        document.getElementById('saida').innerHTML = objeto.resultado;
        } else {
        document.getElementById('saida').innerHTML = 'Erro: ' + objeto.erro;
        }

        document.getElementById('nome').value = '';
        document.getElementById('email').value = '';
        document.getElementById('senha').value = '';
        document.getElementById('tecnico').value = '';
   }
    
    xhttp.open("GET", endereco);
    xhttp.send();
}
    </script>
</head>
<body>

<form action="salvausuariojson.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome">

    <label for="email">Email:</label>
    <input type="text" id="email">

    <label for="senha">Senha:</label>
    <input type="password" id="senha">

    <label for="tecnico">Tecnico?</label>
    <input type="checkbox" id="tecnico">

    <input type="button" value='Inserir' onclick='envia()'>
</form>
<p id="saida"></p>
</body>
</html>  