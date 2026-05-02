<?php
include_once dirname(__DIR__) . "/config/Database.php";
include_once dirname(__DIR__) . "/models/Pasien.php";

class PasienController {
    public $model;

    public function __construct() {
        $database    = new Database();
        $db          = $database->connect();
        $this->model = new Pasien($db);
    }
}
?>
