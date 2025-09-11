<h1 class="text-h1">Personas</h1>
<a href="<?= BASE_URL ?>/personas/crear">Agregar nueva</a>
<ul>
<?php foreach ($personas as $p): ?>
    <li>
        <?= $p->Nombre ?> (<?= $p->Email ?>) - 
        <a href="<?= BASE_URL ?>/personas/editar/<?= $p->Id ?>">Editar</a> | 
        <a href="<?= BASE_URL ?>/personas/eliminar/<?= $p->Id ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
