<?php
// Conexión a la base de datos
require_once '../config/database.php';

class Database {
    private $pdo;
    private $connection;
    
    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASSWORD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $this->pdo;
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    
    public function getConnection() {
        return $this->connection;
    }
    
    public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    
    public function close() {
        $this->pdo = null;
    }
}
?>