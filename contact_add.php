<?php
include "./includes/class-autoload.inc.php";
$contactForms = new ContactForm();

$errors         = array();
$data           = array(); 
$result;
  if(isset($_POST['Name']) && !empty($_POST['Name'])){
    $vars['name']=$_POST['Name'];
  }
  if(isset($_POST['Address']) && !empty($_POST['Address'])){
    $vars['address']=$_POST['Address'];
  }
  if(isset($_POST['Email']) && !empty($_POST['Email'])){
    $vars['email']=$_POST['Email'];
  }
  if(isset($_POST['Phone']) && !empty($_POST['Phone'])){
    $vars['phone']=$_POST['Phone'];
  }
  if(isset($_POST['Message']) && !empty($_POST['Message'])){
    $vars['message']=$_POST['Message'];
  }
 $checkForEmail=$contactForms->getContactFormByEmail($vars['email']);
  if(!isSet($checkForEmail) && empty($checkForEmail)){
    $contactForms-> addContactForm($vars['name'],$vars['address'],$vars['email'],$vars['phone'],$vars['message']);
    $result=true;
  } 
  else {
    $result=false;
  }
  
  // $result= $contactForms->getAllContactForms();

  // echo json_encode($result);
  echo $result;