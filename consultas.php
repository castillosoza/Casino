<?
    include('../Modelo/consultasmod.php') ;   
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Modulo de consulta</title>
        <link href="../css/ccs.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/font-awesome-4.2.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="../assets/fancy-buttons/fancy-buttons.css">
    </head>
    <body>
        <form action="../Modelo/consultasmod.php" method="post">
            <center><table>
                <tr><td>
            <select name='consulta'>
                <option selected disabled>-- Seleccione una Consulta --</option>
                <option value="1">Cantidad total de productos disponibles.</option>
                <option value="2">Cantidad de Productos de la Categoría Bebestibles.</option>
                <option value="3">Productos cuyo Stock sea < 5 .</option>
                <option value="4">Productos cuyo precio sea > 500 .</option>
                </select>
                  </td><td><input type="submit" name="btnenviar" value="Consultar" /></td></tr>
            </table></center>
        </form>
        <?php echo $_SESSION['html'];$_SESSION['html']="";?>
        <br/>
        <a href="../index.html" class=" fancy-button rounded small nephritis bell fixed">Regresar<span class="icon"><i class="fa fa fa-reply"></i></span></a>
    </body>
</html>
