<?php 

$nome = $_POST ['txtNome']; 
$genero = $_POST ['txtGenero']; 
include "clsConexao.php"; 

if ( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO detalhesdefinitivo (nome, genero) VALUES ('$nome', '$genero') ";
    
    Conexao::executar( $query ); 
    header("Location: detalhes.php"); 

}  
