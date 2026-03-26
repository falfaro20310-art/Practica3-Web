<?php
class Reservation {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($user_id, $name, $date, $people, $comments) {

        $sql = "INSERT INTO reservations 
        (user_id, name, reservation_date, people, comments)
        VALUES ('$user_id', '$name', '$date', '$people', '$comments')";

        return $this->conn->query($sql);
    }

    public function getByUser($user_id) {

        $sql = "SELECT * FROM reservations WHERE user_id='$user_id'";
        return $this->conn->query($sql);
    }
}
?>
