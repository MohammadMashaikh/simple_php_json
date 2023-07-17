<?php require './users/users.php';

if (!isset($_GET['id'])) {
    include './partials/not_found.php';
    exit;
}

$user_id = $_GET['id'];

deleteUser($user_id);

header('location: ./index.php');
