<?php 

class Products extends Dbh {
  public function getProducts() {
    $sql = "SELECT * FROM products
    ORDER BY products_id DESC;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getProductById($id){
      $sql = "SELECT * FROM products WHERE products_id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt-> execute([$id]);
      $result = $stmt -> fetch();
      return $result;
  }

  public function addProduct($name, $category) {
    $sql = "INSERT INTO products(products_name, products_category) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $category]);
  }

  public function editProduct($id) {
    $sql = "SELECT * FROM products WHERE products_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch();

    return $result;
  }

  public function updateProduct($id, $name, $category) {
    $sql = "UPDATE products SET products_name = ?, products_category = ? WHERE products_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $category, $id]);
  }

  public function deleteProduct($id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
  }
}