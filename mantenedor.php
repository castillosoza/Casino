<?php
include('../Controlador/Controlador.php');
if($_GET['accion']==1){
    if(isset($_POST['txt_nom'])||isset($_POST['txt_act']))
    {
        $id=$_POST['txt_id'];
        $nom=$_POST['txt_nom'];
        $act=$_POST['txt_act'];
        $sql="update marca set MAR_NOMBRE = '$nom' , MAR_ACTIVO = $act where ID_MARCA = $id; ";
        echo $sql; 
        $result=query_SQL($sql);
        echo "<script type='text/javascript'>window.location='../Vista/Mantenedor.php';</script>";
    }
    else
    echo "<script>window.alert('Debe llenar campos');</script>";
}
if($_GET['accion']==2){
        $id=$_GET['id'];        
        $sql="delete from marca where ID_MARCA = $id;"; 
        query_SQL2($sql);
        echo "<script type='text/javascript'>window.location='../Vista/Mantenedor.php';</script>";
}
if($_GET['accion']==3){
    $nom=$_POST['txt_nom'];
    $act=$_POST['txt_activo'];
    $sql="insert into marca (MAR_NOMBRE,MAR_ACTIVO) values ('$nom',$act);";
    query_SQL2($sql);
    echo "<script type='text/javascript'>window.location='../Vista/Mantenedor.php';</script>";
}
$sql="SELECT  * from marca;";          
$result=query_SQL($sql);
?>


