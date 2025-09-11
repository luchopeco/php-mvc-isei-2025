<h1>Editar Persona</h1>
<form action="<?= BASE_URL ?>/personas/actualizar/<?= $persona->Id; ?>" method="POST">
    Nombre: <input name="nombre" value="<?= $persona->Nombre; ?>"><br>
    Email: <input name="email" value="<?= $persona->Email; ?>"><br>
    <button type="submit">Actualizar</button>
</form>
