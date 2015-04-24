<?php
include('../Modelo/productosmod.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Vista de Productos</title>
        <link href="../css/ccs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/font-awesome-4.2.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="../assets/fancy-buttons/fancy-buttons.css">
    </head>
    <body>
        <h1>Listado De Productos en stock </h1>
        <center><table>
        <tr><th>ID</th><th>Nombnre</th><th>Precio</th><th>Stock</th><th>Marca</th><th>Categoria</th></tr>
        <?php 
           $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;  
            foreach($datos as $fi){     
            $h=$fi['ID_PRODUCTO'];    
            $a=$fi['PRO_NOMBRE'];
            $b=$fi['PRO_PRECIOVENTA'];
            $c=$fi['PRO_STOCK'];
            $d=$fi['MAR_NOMBRE'];
            $e=$fi['CAT_NOMBRE'];            
            echo    "
                    <td><input type='text'  name='txt_id' value='$h' readonly/></td>
                    <td><input type='text'  name='txt_nom' value='$a' readonly/></td>
                    <td><input type='number'  name='txt_precio' value='$b' readonly/></td>
                    <td><input type='number'  name='txt_stock' value='$c' readonly/></td>
                    <td><input type='text'  name='txt_marca' value='$d' readonly/></td>
                    <td><input type='text'  name='txt_categoria' value='$d' readonly/></td></tr>
         ";
         
            }
        

        ?>
        </table></center><br/><br/>
        <a href="../index.html" class=" fancy-button rounded small nephritis bell fixed">Regresar<span class="icon"><i class="fa fa fa-reply"></i></span></a>
    </body>
</html>
