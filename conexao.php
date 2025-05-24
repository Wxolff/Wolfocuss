<?php
$host = "sql100.infinityfree.com";
$dbname = "if0_38303948_etec";
$username = "if0_38303948";
$password = "Wolfocuss2025";

try {
    $conexao = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Teste opcional para verificar se a conexão foi bem-sucedida
    // echo "Conexão bem-sucedida!";
    
} catch (PDOException $e) {
    // Em produção, evite mostrar a mensagem de erro completa
    die("Erro na conexão com o banco de dados. Por favor, tente novamente mais tarde." . $e->getMessage());
    // Para debug: die("Erro na conexão: " . $e->getMessage());
}

// $conexao - usada para realizar a maioria das operações de dados nas páginas.
// https://www.youtube.com/watch?v=30Of7BFeGHI - vídeo
// https://gist.github.com/zerobugs-oficial/4feecc412a588e396c9cba5e581f788d - github