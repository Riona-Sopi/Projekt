<?php 

class Dbh {
  private $host = "eu-cdbr-west-03.cleardb.net:3306";
  private $user = "b7bce28de98c09";
  private $pwd = "8f692d8d";
  private $dbName = "heroku_f74c15e0c3b31a6";

  public function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
