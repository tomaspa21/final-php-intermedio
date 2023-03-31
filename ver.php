<?php include("header_2.php");
include("conexion.php");

$query = "SELECT * FROM pedidos WHERE pd_estado = 'En Proceso'";
$result = mysqli_query($conexion_db, $query);
if(mysqli_num_rows($result) > 0)
 {
  $table = '
   <table border=1>
   <tr>
    <th> pd_nombre </th>
    <th> pd_principal </th>
    <th> pd_postre </th>
    <th> pd_estado </th>
    <th>  </th>
   </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $table .= '
    <tr>
        <td>'.$row["pd_nombre"].'</td>
        <td>'.$row["pd_principal"].'</td>
        <td>'.$row["pd_postre"].'</td>
        <td>'.$row["pd_estado"].'</td>
        <td><a href="editar_estado.php?id='.$row["id_pedido"].'">Actualizar</a></td>
    </tr>
   ';
  }
  $table .= '</table>';
  echo $table;
 }



