<?php
class FunnyLineController {
    private $model;

    public function __construct() {
        $this->model = new FunnyLine();
    }

    public function index() {
        $lines = $this->model->getAllLines();
        include 'views/index.php';
    }

    public function add() {
        if (isset($_POST['line'])) {
            $line = $_POST['line'];
            $this->model->addLine($line);
        }
        header('Location: index.php');
    }

    public function delete($id) {
        $this->model->deleteLine($id);
        header('Location: index.php');
    }
}
?>
