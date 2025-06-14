<?php
namespace App\Models;

class MascotaModel{
    public $Id;
    public $Raza;
    public $Nombre;

    public function obtenerTodos() {

        $m1 = new MascotaModel();
        $m1->Id = 1;
        $m1->Raza = 'Perro';
        $m1->Nombre = 'Kuska';

        $m2 = new MascotaModel();
        $m2->Id = 2;
        $m2->Raza = 'Siames';
        $m2->Nombre = 'Garfield';  
        $listMascotas = [$m1, $m2];
        return $listMascotas;
    }

    public function obtenerPorId($id) {
        $m1 = new MascotaModel();
        $m1->Id = $id;
        $m1->Raza = 'Perro';
        $m1->Nombre = 'Pepe';
        return $m1;
    }

    public function actualizar($id, $data) {
        $m = new MascotaModel();
        $m->Id = $id;
        $m->Nombre = $data['nombre'];
        $m->Raza = $data['raza'];
        return $m;
    }
}