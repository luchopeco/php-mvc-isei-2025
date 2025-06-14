<h1>Mascota editada</h1>
<ul>
    <li>
        <?= $mascota->Raza ?> - <?= $mascota->Nombre ?>
        <a href="<?= BASE_URL ?>/mascota/editar/<?= $mascota->Id; ?>">Editar</a>
    </li>

</ul>
