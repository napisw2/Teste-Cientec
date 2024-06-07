<?php

class Database {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbname = "sistema_nis";
    private static $conn;

    public static function getConnection() {
        if (!self::$conn) {
            self::$conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
            if (self::$conn->connect_error) {
                die("Falha na conexão: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}

?>
