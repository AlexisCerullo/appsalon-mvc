<h1 class="nombre-pagina">Nuevo Servicio</h1>
<div class="descripcion-pagina">Llena todos los campos para añadir un nuevo servicio</div>

<?php 
    include_once __DIR__ . '/../templates/barra.php';
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php'; ?>

    <input type="submit" class="boton" value="Guardar Servicio">
</form>
