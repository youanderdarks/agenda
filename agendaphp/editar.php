
<?php 
     include 'inc/funciones/funciones.php';
     include 'inc/layout/header.php'; 

     $id = filter_var($_GET['id'] ?? '', FILTER_VALIDATE_INT);

if(!$id) {
     header('Location: index.php');
     exit;
}

$resultado = obtenerContacto($id);

if(!$resultado || $resultado->num_rows === 0) {
     header('Location: index.php');
     exit;
}

$contacto = $resultado->fetch_assoc();
?>


<div class="contenedor-barra">
     <div class="contenedor barra">
          <a href="index.php" class="btn volver">Volver</a>
          <h1>Editar Contacto</h1>
     </div>
</div>

<div class="bg-amarillo contenedor sombra">
     <form id="contacto" action="#">
          <legend>Edite el Contacto</span> </legend>

          <?php include 'inc/layout/formulario.php'; ?>
     </form>
</div>


<?php include 'inc/layout/footer.php'; ?>
