<?php

namespace database;

use PDO;
use PDOException;

class Database
{
    private string $host = 'localhost';
    private string $db = 'custom_ai';
    private string $username = 'root';
    private string $password = '';
    private static ?PDO $pdo = null;

    public function connect(): PDO
    {
        if (self::$pdo === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4";
                self::$pdo = new PDO($dsn, $this->username, $this->password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Verbindungsfehler: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }

    public static function getInstance(): PDO
    {
        $db = new self();
        return $db->connect();
    }
}
