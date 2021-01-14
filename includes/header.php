<?php
$base_path = $_SERVER['DOCUMENT_ROOT'];
include "./hustlers-ubt/includes/class-autoload.inc.php";

?>
<!DOCTYPE html>
<?php
$website_title = (isset($website_title) && !empty($website_title)) ? $website_title : 'Title';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- for media quering -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TODO: Rename -->
    <title><?= $website_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="js/form-validation.js"></script>

</head>