<?php
namespace App\Controllers;
use App\Models\PersonaModel;

class PersonaController {
    private $model;

    public function __construct() {
        $this->model = new PersonaModel();
    }

    public function index() {
        $personas = $this->model->obtenerTodos();
        require '../app/Views/Persona/index.php';
    }

    public function crear() {
        require '../app/Views/Persona/crear.php';
    }

    public function guardar() {
        $this->model->agregar($_POST);
        header('Location: ' . BASE_URL . '/persona');
    }

    public function editar($id) {
        $persona = $this->model->obtenerPorId($id);
        require '../app/Views/Persona/editar.php';
    }

    public function actualizar($id) {
        $this->model->actualizar($id, $_POST);
        header('Location: ' . BASE_URL . '/persona');
    }

    public function eliminar($id) {
        $this->model->eliminar($id);
        header('Location: ' . BASE_URL . '/persona');
    }
}
