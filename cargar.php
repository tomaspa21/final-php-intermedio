<?php

session_start();
    include("header.php"); 
    $nro1 = rand(0, 9);
    $nro2 = rand(0, 9);
    $nro3 = rand(0, 9);
    $letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k', 'x');
    $simbolo = array('%', '$', '/', '@', '#');
    $mezcla_letra = rand(0, 6);
    $mezcla_simbolo = rand(0, 4);
    $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;
    ?>
    <section class= "contenedor_carga">
            <h3> Ingreso de Pedido </h3>
            <form action="cargar_componente.php" method="post" class= "formulario">
               <input type="text" name="nombre" placeholder="Nombre" required>
               <label for="principal"> Seleccione su Plato Principal </label>
               <input list="principals" name="principals" id="principal">
               <datalist id="principals">
                  <option value="Bife de Chorizo">
                  <option value="Ravioles">
                  <option value="Langostinos al Ajillo">
                  <option value="Milanesa con Papas Fritas">
                  <option value="Pizza a la Napolitana">
                </datalist>
                <label for="postre"> Seleccione su Postre </label>
                <input list="postres" name="postres" id="postre">
                <datalist id="postres">
                  <option value="Frutillas con Crema">
                  <option value="Tiramisu">
                  <option value="Volcan de Chocolate">
                  <option value="Helado">
                  <option value="Tres Leches">
                </datalist>
               <select name="estado" id="">
                  <option value="En Proceso"> En Proceso </option>
                  <option value="Listo Para Entrega"> Listo Para Entregar </option>
               </select>                        
               <img src="captcha.php" alt="captcha">
               <input type="text" name="captcha" placeholder="Ingresa Captcha">
               <input type="submit" value="Enviar Pedido">
            </form>    
    </section>
    <?php 
    if (isset ($_GET['error_codigo'])){
            echo "<h3> Codigo de Verificacion Incorrecto </h3>";
    } 
    if (isset ($_GET['ok'])){
        echo "<h3> Pedido Cargado con Exito </h3>";
    } 

?>
</body>
</html>
