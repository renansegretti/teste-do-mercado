<?php
// pegando os dados do input

// para pegar o valor do input codigo
$codigo = $_POST['codigo'];

// para pegar o valor do input tipo
$tipo = $_POST['tipo'];

// para pegar o valor do input nome
$nome = $_POST['nome'];

// para pegar o valor do input quantidade
$quantidade = $_POST['quantidade'];

// para pegar o valor do input preco
$preco = $_POST['preco'];

// para pegar o valor do input radiot
$radiot = $_POST['radiot'];


// vamos imprimir os valores dgitados dos campos na pagina

echo "codigo: $codigo<br />";
echo "tipo: $tipo<br />";
echo "nome: $nome<br />";
echo "quantidade: $quantidade<br />";
echo "preco: $preco<br />";
echo "couv: $radiot<br />";
?>
