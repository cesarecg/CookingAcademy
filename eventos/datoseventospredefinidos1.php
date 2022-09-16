<?php
header('Content-Type: application/json');

require_once ("../conexion.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "select codigo,titulo,horainicio,horafin,colortexto,colorfondo from eventospredefinidos1");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "insert into eventospredefinidos1(titulo,horainicio,horafin,colortexto,colorfondo) values 
                                                ('$_POST[titulo]','$_POST[horainicio]','$_POST[horafin]','$_POST[colortexto]','$_POST[colorfondo]')");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "delete from eventospredefinidos1 where codigo=$_POST[codigo]");
        echo json_encode($respuesta);
        break;
}
