<?php 

class Dbh {
  private $host = "db4free.net";
  private $user = "hustlersroot";
  private $pwd = "hustlersroot";
  private $dbName = "hustlersdb";

  public function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}