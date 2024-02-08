<?php
require_once 'config.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'add':
        $controller = new FunnyLineController();
        $controller->add();
        break;
    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller = new FunnyLineController();
        $controller->delete($id);
        break;
    default:
        $controller = new FunnyLineController();
        $controller->index();
        break;
}
?>
