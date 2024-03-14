<?php
   $pdo = new PDO("sqlite:estoque.db");
   $queryCriaTabelaCategorias = "CREATE TABLE if not exists Categoria (
	Id	INTEGER NOT NULL,
	nome	TEXT NOT NULL,
	PRIMARY KEY(Id AUTOINCREMENT)
)";

$pdo->query($queryCriaTabelaCategorias);

    $queryCriaTabelaProdutos = "CREATE TABLE if not exists Produtos" (
        Id	INTEGER NOT NULL,
        nome	TEXT NOT NULL,
        descriçao	TEXT,
        categoria_id	INTEGER,
        preco	REAL NOT NULL,
        PRIMARY KEY("Id" AUTOINCREMENT)
    )";
    $pdo->query($queryCriaTabelaProdutos);

    $queryCriaTabelaCategoria = CREATE TABLE Categoria" (
        Id	INTEGER NOT NULL,
        nome	TEXT NOT NULL,
        PRIMARY KEY("Id" AUTOINCREMENT)
        $pdo->query($queryCriaTabelaCategoria);
    )";


$queryCriaTabelaestoque = "CREATE TABLE estoque" (
	Id	INTEGER NOT NULL,
	quantidade	INTEGER NOT NULL,
	produto_id	INTEGER,
	PRIMARY KEY("Id" AUTOINCREMENT)
)"
$pdo->query($queryCriaTabelaestoque);

?>