<?php
    include('../Modelo/mantenedormod.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Mantenedor de Marcas</title>
        <link href="../css/ccs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/font-awesome-4.2.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="../assets/fancy-buttons/fancy-buttons.css">
    </head>
    <body>
        <h1>Listado De MARCAS </h1>
        <center><table>
        <tr><th>ID</th><th>Nomnbre</th><th>Activo?</th>
        <?php 
           $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;  
            foreach($datos as $fi){     
            $h=$fi['ID_MARCA'];    
            $a=$fi['MAR_NOMBRE'];
            $b=$fi['MAR_ACTIVO'];
                      
            echo    "
                    <tr><td><input type='text'  name='txt_id' value='$h' readonly required/></td>
                    <td><input type='text'  name='txt_nom' value='$a' required /></td>
                    <td><input type='text'  name='txt_activo' value='$b' /></td>
                    <td><a href='mantenedormodi.php?id=$h&nom=$a&act=$b' class=' fancy-button rounded small nephritis bell fixed'>Modificar<span class='icon'><i class='fa fa-refresh'></i></span></a></td>
                    <td><a href='../Modelo/mantenedormod.php?accion=2&id=$h' class=' fancy-button rounded small nephritis bell fixed'>Eliminar<span class='icon'><i class='fa fa-times'></i></span></a></td></tr>
                    
         ";
         
            }
        

        ?>
                   
        </table></center><br/><br/>
        <form action="../Modelo/mantenedormod.php?accion=3" method="post" name="froming">
            <h2>Ingreso de nueva marca</h2>
         <center><table><tr><td>Nombre</td><td><input type='text'  name='txt_nom' value=''  required/></td></tr>
                        <tr><td>Activo?</td><td><input type='text'  name='txt_activo' value='' /></td></tr><br/>                                          
                        
                    </tr>
             </table></center>
            <input type="submit" name="btnenviar" value="Enviar" />
        </form>
        <br/>
        <br/>
        <a href="../index.html" class=" fancy-button rounded small nephritis bell fixed">Regresar<span class="icon"><i class="fa fa fa-reply"></i></span></a>
    </body>
</html>
