<?php include("header.php"); ?>

<section class="tienda_contenido">
<section class="tienda">
    <h2> Productos </h2>
</section>
    <h3> Plato Principal </h3>
    <ul>
            <li> <a href="carta.php?producto=bc"> Bife de Chorizo</a></li>
            <li> <a href="carta.php?producto=rv"> Ravioles</a></li>
            <li> <a href="carta.php?producto=lg"> Langostinos al Ajillo</a></li>
            <li> <a href="carta.php?producto=mp"> Milanesas con papas fritas</a></li>
            <li> <a href="carta.php?producto=pz"> Pizza Napolitana</a></li>
    </ul>
    <h3> Postres </h3>
    <ul>
            <li> <a href="carta.php?producto=fc"> Frutillas con Crema</a></li>
            <li> <a href="carta.php?producto=tr"> Tiramisu</a></li>
            <li> <a href="carta.php?producto=vl"> Volcan de Chocolate</a></li>
            <li> <a href="carta.php?producto=hl"> Helado</a></li>
            <li> <a href="carta.php?producto=tl"> Tres Leches</a></li>
    </ul>
    <?php
         
    $nombre= "";
    $ingredientes= "";
    $precio="";
    
if(isset($_GET['producto'])) {
    
    switch($_GET['producto']){
        case 'bc' :
            $nombre= "Bife de Chorizo";
            $ingredientes= "Carne";
            $precio= "Precio: 2500";
            $img= './img/bife.jpeg';
            break;
        case 'rv' :
            $nombre= "Ravioles";
            $ingredientes= "Ravioles";
            $precio= "Precio: 1700";
            $img= './img/ravioles.jpeg';
            break;
        case 'lg' :
            $nombre= "Langostinos al Ajillo";
            $ingredientes= "Langostinos,ajo";
            $precio= "Precio: 2800";
            $img= './img/langostinos.jpeg';
            break;
        case 'mp' :
            $nombre= "Milanesas con Papas";
            $ingredientes= "Carne, apanado, papas";
            $precio= "Precio: 1400";
            $img= './img/milanesa.jpeg';
            break;
        case 'pz' :
            $nombre= "Pizza Napolitana";
            $ingredientes= "Maza, tomate, ajo";
            $precio= "Precio: 1200";
            $img= './img/pizza.jpeg';
            break;
        case 'fc' :
            $nombre= "Frutillas con Crema";
            $ingredientes= "Frutillas, crema";
            $precio= "Precio: 1900";
            $img= './img/frutillas.jpeg';
            break;
        case 'tr' :
            $nombre= "Tiramisu";
            $ingredientes= "Crema de leche, azucar, cafe, vainillas, cacao";
            $precio= "Precio: 2100";
            $img= './img/tiramisu.jpeg';
            break;
        case 'vl' :
            $nombre= "Volcan de Chocolate";
            $ingredientes= "Chocolate, manteca, huevos, azucar, harina, azucar impalpable";
            $precio= "Precio: 2300";
            $img= './img/volcan.jpeg';
            break;
        case 'tr' :
            $nombre= "Tiramisu";
            $ingredientes= "Crema de leche, azucar, cafe, vainillas, cacao";
            $precio= "Precio: 2100";
            $img= './img/tiramisu.jpeg';
            break;
        case 'hl' :
            $nombre= "Helado";
            $ingredientes= "Crema de leche, dulce de leche, leche";
            $precio= "Precio: 1300";
            $img= './img/helado.jpeg';
            break;
        case 'tl' :
            $nombre= "Tres Leches";
            $ingredientes= "Leche condensada, crema de leche, leche,azucar, huevos, harina, sal";
            $precio= "Precio: 1500";
            $img= './img/tres_leches.jpeg';
            break;
        }
    }
    ?>
</section>
<div class="producto_descripcion">
    <h2> <?php echo $nombre; ?> </h2> 
    <h3> <?php echo $ingredientes; ?>  </h3>
    <h4> <?php echo $precio;  ?> </h4>
    <div class="contenedor_img">
        <img src="<?php echo $img ?>" alt="<?php echo $nombre ?>"> 
    </div>      
</div>
</div>  
</body>
</html>