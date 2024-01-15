<?php
?>

<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
?>
<?php include_once "encabezado.php" ?>
<h1 class="term-a">Muchas gracias por su compra!</h1>
<div class="finish-button">
    <a class="button is-success is-large" href="tienda.php" role="button">Regresar a Tienda</a>
</div>
<?php include_once "pie.php" ?>