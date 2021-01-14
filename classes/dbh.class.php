<?php 

class Dbh {
  private $dbUrl = parse_url(getenv("CLEARDB_DATABASE_URL"));
  private $host = $url["host"];
  private $user = $url["user"];
  private $pwd = $url["pass"];
  private $dbName = substr($url["path"], 1);

  public function connect() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
    $pdo = new PDO($dsn, $this->user, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}

