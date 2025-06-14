<?php
namespace App\Controllers;
use App\Models\MascotaModel;

class MascotaController {
    private $model;

    public function __construct() {
        $this->model = new MascotaModel();
    }

    public function index() {
        $listMascotas = $this->model->obtenerTodos();
        require '../app/Views/Mascota/index.php';
    }

    public function editar($id) {
        $mascota = $this->model->obtenerPorId($id);
        require '../app/Views/Mascota/editar.php';
    }

    public function actualizar($id) {
        $mascota = $this->model->actualizar($id, $_POST);
        require '../app/Views/Mascota/detalle.php';
    }
}
