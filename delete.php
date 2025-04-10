<?php
require_once 'connection.php';

if (!isset($_GET['id'])) {
    exit;
}

$stmt = $connection->prepare("DELETE FROM tbluser WHERE uid = ?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: dashboard.php");