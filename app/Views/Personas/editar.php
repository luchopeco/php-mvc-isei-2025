<h1>Editar Persona</h1>
<form action="<?= BASE_URL ?>/personas/actualizar/<?= $persona['id'] ?>" method="POST">
    Nombre: <input name="nombre" value="<?= $persona['nombre'] ?>"><br>
    Email: <input name="email" value="<?= $persona['email'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>
