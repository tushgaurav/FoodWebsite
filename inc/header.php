<?php
session_start();

setcookie('name', 'id', time() + 86400);

define("SITE_TITLE", "NIET Hostel Mess");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title><?php echo SITE_TITLE; ?></title>
</head>
<body>

<nav>
    <div class="container">
  <img src="images/logo.svg" alt="">
  <h1>test</h1>
  </div>
</nav>

<div class="container">
