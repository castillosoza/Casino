<?php    
    include('../Controlador/Controlador.php');
     
    $sql="SELECT  `ID_PRODUCTO` ,  `PRO_NOMBRE` ,  `PRO_PRECIOVENTA` ,  `PRO_STOCK` , MAR_NOMBRE, CAT_NOMBRE
          FROM  `producto` , categoria, marca
          WHERE producto.id_categoria = categoria.id_categoria
          AND producto.id_marca = marca.id_marca";          
     $result=query_SQL($sql);
    
?>
