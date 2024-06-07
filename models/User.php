<?php

include_once '../database/Database.php';

class User {
    private $name;
    private $nis;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getNIS() {
        return $this->nis;
    }

    public function setNIS($nis) {
        $this->nis = $nis;
    }

    public function generateNIS() {
        return strval(rand(10000000000, 99999999999));  
    }

    public function save() {
        $conn = Database::getConnection();

        $stmt = $conn->prepare("INSERT INTO users (name, nis) VALUES (?, ?)");
        $stmt->bind_param("ss", $this->name, $this->nis);

        $inserted = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $inserted;
    }

    public static function findByNIS($nis) {
        $conn = Database::getConnection();
        
        $name = null;

        $stmt = $conn->prepare("SELECT name FROM users WHERE nis = ?");
        $stmt->bind_param("s", $nis);

        $stmt->execute();
        $stmt->bind_result($name);
        $stmt->fetch();

        $user = null;
        if ($name) {
            $user = new User();
            $user->setName($name);
            $user->setNIS($nis);
        }

        $stmt->close();
        $conn->close();

        return $user;
    }
}

?>
