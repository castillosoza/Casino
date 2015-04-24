<?php
    session_start();
    include('../Controlador/controlador.php');
    $id=$_POST['consulta'];
    
    if($id==1){
        $sql="select count(ID_PRODUCTO) as count from producto where pro_stock > 0 ";
        $result=query_SQL($sql);        
        $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;
                  
            foreach($datos as $fi){
                $c=$fi['count'];
                $_SESSION['html']="<center>Cantidad de Productos Disponibles : $c </center>";
            }
        echo "<script type='text/javascript'>window.location='../Vista/Consultas.php';</script>";
    }
    if($id==2){
        $sql="select count(ID_PRODUCTO) as count from producto,categoria where producto.id_categoria=categoria.id_categoria and categoria.cat_nombre = 'BEBESTIBLES'";
        $result=query_SQL($sql);        
        $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;
         
            foreach($datos as $fi){
                $c=$fi['count'];
                $_SESSION['html']="$_SESSION[html]<center>Cantidad de Productos en categoria Bebestibles : $c </center>";
            }
        echo "<script type='text/javascript'>window.location='../Vista/Consultas.php';</script>";
    }
    if($id==3){
        $sql="select pro_nombre as nom,pro_stock as stock from producto where pro_stock < 5";
        $result=query_SQL($sql);        
        $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;
         $_SESSION['html']="Productos con stock menor a 5 <br/><center><table style='boder : double'><tr style='border:double'><th style='border:double'>Nombre</th><th style='border:double'>Stock</th></tr>";          
            foreach($datos as $fi){
                $n=$fi['nom'];
                $s=$fi['stock'];
                $_SESSION['html']="$_SESSION[html]<tr style='boder : double'><td style='border:double'>$n</td><td style='border:double'>$s</td></tr>";
            }
        $_SESSION['html']="$_SESSION[html]+</table></center>";
        echo "<script type='text/javascript'>window.location='../Vista/Consultas.php';</script>";
    }
    if($id==4){
        $sql="select pro_nombre as nom,pro_precioventa as stock from producto where pro_precioventa > 500";
        $result=query_SQL($sql);        
        $datos=array();
           while($fis=mysql_fetch_array($result))
                $datos[count($datos)]=$fis;
         $_SESSION['html']="Productos con precio mayor a 500 <br/><center><table style='boder : double'><tr style='border:double'><th style='border:double'>Nombre</th><th style='border:double'>Precio</th></tr>";          
            foreach($datos as $fi){
                $n=$fi['nom'];
                $s=$fi['stock'];
                $_SESSION['html']="$_SESSION[html]<tr style='boder : double'><td style='border:double'>$n</td><td style='border:double'>$s</td></tr>";
            }
        $_SESSION['html']="$_SESSION[html]+</table></center>";
        echo "<script type='text/javascript'>window.location='../Vista/Consultas.php';</script>";
    }
    
?>


