<?php
header('Content-Type: application/json');

require_once ("../conexion.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {
    case 'listar':
        $datos = mysqli_query($conexion, "select codigo as id,
                                                 titulo as title,
                                                 descripcion,
                                                 inicio as start,
                                                 fin as end,
                                                 colortexto as textColor,
                                                 colorfondo as backgroundColor 
                                            from eventos3");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'agregar':
        $respuesta = mysqli_query($conexion, "insert into eventos3(titulo,descripcion,inicio,fin,colortexto,colorfondo) values 
                                                ('$_POST[titulo]','$_POST[descripcion]','$_POST[inicio]','$_POST[fin]','$_POST[colortexto]','$_POST[colorfondo]')");
        echo json_encode($respuesta);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "update eventos3 set titulo='$_POST[titulo]',
                                                                 descripcion='$_POST[descripcion]',
                                                                 inicio='$_POST[inicio]',
                                                                 fin='$_POST[fin]',
                                                                 colortexto='$_POST[colortexto]',
                                                                 colorfondo='$_POST[colorfondo]'
                                                            where codigo=$_POST[codigo]");
        echo json_encode($respuesta);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "delete from eventos3 where codigo=$_POST[codigo]");
        echo json_encode($respuesta);
        break;
}
