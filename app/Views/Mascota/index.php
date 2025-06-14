<h1>Mascotas</h1>
<ul>
<?php foreach ($listMascotas as $m): ?>
    <li>
        <?= $m->Raza ?> - <?= $m->Nombre ?>
        <a href="<?= BASE_URL ?>/mascota/editar/<?= $m->Id; ?>">Editar</a>
    </li>
<?php endforeach; ?>
</ul>
