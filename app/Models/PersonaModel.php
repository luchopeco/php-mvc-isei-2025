<?php
namespace App\Models;

class PersonaModel {
    private static $personas = [
        1 => ['id' => 1, 'nombre' => 'Juan', 'email' => 'juan@mail.com'],
        2 => ['id' => 2, 'nombre' => 'Ana', 'email' => 'ana@mail.com']
    ];

    public function obtenerTodos() {
        return self::$personas;
    }

    public function obtenerPorId($id) {
        return self::$personas[$id] ?? null;
    }

    public function agregar($data) {
        $id = max(array_keys(self::$personas)) + 1;
        self::$personas[$id] = ['id' => $id, 'nombre' => $data['nombre'], 'email' => $data['email']];
    }

    public function actualizar($id, $data) {
        if (isset(self::$personas[$id])) {
            self::$personas[$id]['nombre'] = $data['nombre'];
            self::$personas[$id]['email'] = $data['email'];
        }
    }

    public function eliminar($id) {
        unset(self::$personas[$id]);
    }
}
