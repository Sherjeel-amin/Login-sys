<?php
require_once '/opt/lampp/htdocs/Login-sys/Config/dbconn.php';

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "root", "", "userinfo");
        $this->db->getConnection();
    }

    public function addUser($username, $password, $email) {
        $query = $this->db->conn->prepare("INSERT INTO `user` (username, password, email) VALUES (?, ?, ?)");
        $query->bind_param("sss", $username, $password, $email);
        $result = $query->execute();
        return $result;
    }

    public function getUserEmail($email){
        $query = $this->db->conn->prepare("SELECT * FROM `user` WHERE email = ?");
        $query->bind_param("s",$email);
        $query->execute();
        $result = $query->get_result()->fetch_assoc();
        return $result;
    }

    public function getUser($username,$email) {
        $query = $this->db->conn->prepare("SELECT username,email FROM `user` WHERE username = ? AND email = ?");
        $query->bind_param("ss", $username,$email);
        $query->execute();
        $result = $query->get_result()->fetch_assoc();
        return $result;
    }

    public function updateUser($newUsername, $newEmail) {
        $query = $this->db->conn->prepare("UPDATE `user` SET username = ?, email = ? WHERE id = ?");
        $query->bind_param("ssi", $newUsername, $newEmail);
        $result = $query->execute();
        return $result;
    }

    public function deleteUser($id) {
        $query = $this->db->conn->prepare("DELETE FROM `user` WHERE id = ?");
        $query->bind_param("i", $id);
        $success = $query->execute();
        return $success;
    }

    public function __destruct() {
        $this->db->closeConnection();
    }
}


?>
