<?php
define('DB_HOST', 'mysql'); 
define('DB_USER', 'estagio_user'); 
define('DB_PASS', 'senha_segura'); 
define('DB_NAME', 'estagio_ifsp_db');

function getDbConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8", DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        error_log("Erro de Conexão com o Banco de Dados: " . $e->getMessage());
        die("Erro ao conectar ao banco de dados. Tente novamente mais tarde.");
    }
}
?>
