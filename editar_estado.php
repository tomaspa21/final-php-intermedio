<?php

include("conexion.php");

$id_cliente = $_GET ['id'];

mysqli_query($conexion_db, "UPDATE pedidos SET pd_estado = 'Listo para Entregar' WHERE id_pedido = $id_cliente");
header("Location: ver.php");

?>