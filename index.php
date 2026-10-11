<?php
// index.php
require_once __DIR__ . '/config/functions.php';

if (isset($_SESSION['user_id'], $_SESSION['role'])) {
    match ($_SESSION['role']) {
        'admin'       => header("Location: admin/dashboard.php"),
        'headteacher' => header("Location: headteacher/dashboard.php"),
        default       => header("Location: auth/login.php")
    };
    exit;
}
header("Location: auth/login.php");
exit;