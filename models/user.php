<?php
class user {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($username, $password) {

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password, rol)
                VALUES ('$username', '$passwordHash', 'user')";

        return $this->conn->query($sql);
    }

    public function login($username) {

        $sql = "SELECT * FROM users WHERE username='$username'";
        return $this->conn->query($sql);
    }
}
?>
