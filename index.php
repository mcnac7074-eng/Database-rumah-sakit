<?php
include_once "controllers/PasienController.php";
$controller = new PasienController();

if (isset($_GET['hapus'])) {
    $controller->model->delete($_GET['hapus']);
    header("Location: index.php");
    exit;
}

include_once "views/list.php";
?>
