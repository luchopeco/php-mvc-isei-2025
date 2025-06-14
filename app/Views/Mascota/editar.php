<h1>Editar Mascota de id: <?= $mascota->Id?></h1>
<form action="<?= BASE_URL ?>/mascota/actualizar/<?= $mascota->Id ?>" method="POST">
    Nombre: <input name="nombre" value="<?= $mascota->Nombre; ?>"><br>
    Raza: <input name="raza" value="<?= $mascota->Raza; ?>"><br>
    <button type="submit">Actualizar</button>
</form>
