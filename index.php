<?php
// php: Linguagem que executa as regras do sistema

require_once 'conexao.php';

$sql =" CREATE TABLE IF NOT EXISTS usuarios (

id INT  AUTO INCREMT PRIMARY KEY,
nome VARCHAR (100) NOT NULL,
email VARCHAR (50)  UNIQUE NOT NULL,
telefone VARCHAR (20) UNIQUE NOT NULL,
ativo BOOLEAN DEFAULT 1,
data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
)";


//PREPARAR O COMANDO SQL
//STMT = STATEMENT
$stmt =$pdo->prepare($sql);

//EXECUTAR O COMANDO
$stmt->execute();

//MENSAGEM DE SUCESSO
echo "SUCESSO AO CRIAR TEBELA OU JÁ EXISTENTE!";
//SALVEIIII
?>
