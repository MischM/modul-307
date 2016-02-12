<?php
$success = false;
$errors = [];

$name    = $_POST['name']    ?? '';
$email   = $_POST['email']   ?? '';
$phone   = $_POST['phone']   ?? '';
$people  = $_POST['people']  ?? '';
$hotel   = $_POST['hotel']   ?? '';
$program = $_POST['program'] ?? '';
$shuttle = $_POST['shuttle'] ?? '';
$note    = $_POST['note']    ?? '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'controller/form.php';
}

// Schritt 1
include 'templates/app.php';