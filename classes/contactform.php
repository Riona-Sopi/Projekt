<?php 

class ContactForm {
  public function getAllContactForms() {
    $sql = "SELECT * FROM contact_form
    ORDER BY id DESC;";
    $stmt = $GLOBALS['db']->prepare($sql);
    $stmt->execute();

    while($result = $stmt->fetchAll()) {
      return $result;
    };
  }

  public function getContactFormByEmail($email){
      $sql = "SELECT * FROM contact_form WHERE email = ?";
      $stmt = $GLOBALS['db']->prepare($sql);
      $stmt-> execute([$email]);
      $result = $stmt -> fetch();
      return $result;
  }

  public function addContactForm($name,$mAddress,$email,$phoneNumber,$mMessage) {
    $sql = "INSERT INTO contact_form(fullname, address, email, phoneNumber, message) VALUES (?, ?, ?, ?, ?)";
    $stmt =$GLOBALS['db']->prepare($sql);
    $stmt->execute([$name, $mAddress,$email,$phoneNumber,$mMessage]);
  }

  public function deleteContactForm($id) {
    $sql = "DELETE FROM contact_form WHERE id = ?";
    $stmt = $GLOBALS['db']->prepare($sql);
    $stmt->execute([$id]);
  }
}