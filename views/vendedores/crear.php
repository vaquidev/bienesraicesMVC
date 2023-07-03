<main class="contenedor seccion">
    <h1 class="subtitulo">Nuevo Vendedor/a</h1>      
    <a class="boton boton-rojo" href="/admin">Admin</a>

<?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
<?php endforeach; ?>


    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Registrar Vendedores" class="boton-formu boton-verde">
    </form>

</main>