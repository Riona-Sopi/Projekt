<?php
$base_path = $_SERVER['DOCUMENT_ROOT'];
include $base_path . '/config/db.php';
include $base_path . '/config/import_class.php';
$contactForms = new ContactForm();

$errors         = array();
$data           = array();
$general_error_msg = $error_store_vars = $q_error = '';

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{ 
if (isset($_POST['Name']) && !empty($_POST['Name'])) {
    $vars['name'] = $_POST['Name'];
}else {
    $general_error_msg .= "Ju lutem shkruani emrin!";
    goto end;}
if (isset($_POST['Address']) && !empty($_POST['Address'])) {
    $vars['address'] = $_POST['Address'];
}else {
    $general_error_msg .= "Ju lutem shkruani emrin!";
    goto end;}
if (isset($_POST['Email']) && !empty($_POST['Email'])) {
    $vars['email'] = $_POST['Email'];
}else {
    $general_error_msg .= "Ju lutem shkruani emrin!";
    goto end;}
if (isset($_POST['Phone']) && !empty($_POST['Phone'])) {
    $vars['phone'] = $_POST['Phone'];
}else {
    $general_error_msg .= "Ju lutem shkruani emrin!";
    goto end;}
if (isset($_POST['Message']) && !empty($_POST['Message'])) {
    $vars['message'] = $_POST['Message'];
}else {
    $general_error_msg .= "Ju lutem shkruani emrin!";
    goto end;}

if (!$contactForms->getContactFormByEmail($vars['email'])) {
    $contactForms->addContactForm($vars['name'], $vars['address'], $vars['email'], $vars['phone'], $vars['message']);
    goto end;
} else {
    $general_error_msg .= "Ky email ekziston ";
        goto error;
}

error:
$general_error_msg = ($error_store_vars != '') ? $global_class_obj->error_store($error_store_vars) : $general_error_msg;

end:
if ($general_error_msg != '') {
  $errors['msg']   = '' . $general_error_msg . '';
}

if (!empty($errors)) {
  $data['success'] = false;
  $data['errors']  = $errors;
} else {
  $data['success'] = true;
  $data['msg'] = 'Anketa juaj eshte shtuar me sukses.';
}
echo json_encode($data);
} 
else { 
    echo "You're not authorized to make this request"; 
    } 


    