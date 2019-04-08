<?php

class Dao {
  private $host = "localhost";
  private $db = "justinso_paintbybucket";
  private $user = "justinso_jsonnen";
  private $pass = "H3artland";

  public function getConnection () {
    $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
            $this->pass);
    return $conn;
  }


  public function getUser ($userName) {
    $conn = $this->getConnection();
    return $conn->query("SELECT * FROM login WHERE Username = '$userName'",PDO::FETCH_ASSOC);
  }

  public function getPassword ($userName) {
    $conn = $this->getConnection();
    return $conn->query("SELECT Password FROM login WHERE Username = '$userName'",PDO::FETCH_ASSOC);
  }

  public function createLogin ($username, $password) {
    $conn = $this->getConnection();
    $saveQuery = "insert into login (Username, Password) values (:Username, :Password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":Username", $username);
    $q->bindParam(":Password", $password);
    $q->execute();
  }

}
