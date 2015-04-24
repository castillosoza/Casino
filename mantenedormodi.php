<?php
include('../Modelo/mantenedormod.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Modificacion de Registro</title>
        <link href="../css/ccs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/font-awesome-4.2.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="../assets/fancy-buttons/fancy-buttons.css">
    </head>
    <body>
        <form action="../Modelo/mantenedormod.php?accion=1" method="post">
        <center><table style="border: double">
            <tr><td>id      </td><td><input type="text" value="<?php echo $_GET['id'];?>" name="txt_id" readonly/>"</td></tr>
            <tr><td>Nombre? </td><td><input type="text" value="<?php echo $_GET['nom'];?>" name="txt_nom" required/></td></tr>
            <tr><td>Activo? </td><td><input type="text" value="<?php echo $_GET['act'];?>" name="txt_act" required/></td></tr>            
        </table></center>
            <br/><input type="submit" name="btnenviar" value="Modificar"/><br/>
            <a href="mantenedor.php" class=" fancy-button rounded small nephritis bell fixed">Regresar<span class="icon"><i class="fa fa fa-reply"></i></span></a>
        </form>
    </body>
</html>
