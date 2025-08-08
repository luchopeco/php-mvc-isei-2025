<h1 class="text-h1">Personas</h1>
<a href="<?= BASE_URL ?>/personas/crear">Agregar nueva</a>
<ul>
<?php foreach ($personas as $p): ?>
    <li>
        <?= $p['nombre'] ?> (<?= $p['email'] ?>) - 
        <a href="<?= BASE_URL ?>/personas/editar/<?= $p['id'] ?>">Editar</a> | 
        <a href="<?= BASE_URL ?>/personas/eliminar/<?= $p['id'] ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
