<?php
header('Content-Type: application/json');
session_start();

if (isset($_SESSION['user_id'])) {
    echo json_encode(['logged_in' => true, 'role' => $_SESSION['role']]);
} else {
    echo json_encode(['logged_in' => false]);
}
