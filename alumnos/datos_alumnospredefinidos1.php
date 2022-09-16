<?php
header('Content-Type: application/json');

require_once ("../conexion.php");

$conexion = retornarConexion();

switch ($_GET['accion']) {

    case 'listarPagos':

            $datos = mysqli_query($conexion, "SELECT *  
                                              FROM tbl_member1");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;
   

    case 'listarPagosStudent':       

            $id = $_POST["id"];
            $datos = mysqli_query($conexion, "SELECT *
                                              FROM tbl_member1 WHERE id = '$id' ");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

    case 'editarP' :

            $inscripcion = $_POST["inscripcion"];
            $uniforme = $_POST["uniforme"];
            $libro = $_POST["libro"];
            $graduacion = $_POST["graduacion"];
            $cuota_1 = $_POST["cuota_1"];
            $cuota_2 = $_POST["cuota_2"];
            $cuota_3 = $_POST["cuota_3"];
            $cuota_4 = $_POST["cuota_4"];
            $cuota_5 = $_POST["cuota_5"];
            $cuota_6 = $_POST["cuota_6"];
            $cuota_7 = $_POST["cuota_7"];
            $cuota_8 = $_POST["cuota_8"];
            $fechaIns = $_POST["fechaIns"];
            $fechaUni = $_POST["fechaUni"];
            $fechaBook = $_POST["fechaBook"];
            $fechaGrad = $_POST["fechaGrad"];
            $fecha1 = $_POST["fecha1"];
            $fecha2 = $_POST["fecha2"];
            $fecha3 = $_POST["fecha3"];
            $fecha4 = $_POST["fecha4"];
            $fecha5 = $_POST["fecha5"];
            $fecha6 = $_POST["fecha6"];
            $fecha7 = $_POST["fecha7"];
            $fecha8 = $_POST["fecha8"];
            $id = $_POST["id"];

            $sql= " UPDATE tbl_member1 SET inscripcion ='$inscripcion',uniforme = '$uniforme',libro = '$libro', graduacion = '$graduacion', cuota_1 ='$cuota_1', cuota_2 ='$cuota_2', cuota_3 ='$cuota_3', cuota_4 = '$cuota_4', cuota_5 ='$cuota_5', cuota_6 ='$cuota_6', cuota_7 ='$cuota_7', cuota_8 = '$cuota_8', fechaIns = '$fechaIns', fechaUni = '$fechaUni', fechaBook = '$fechaBook', fechaGrad = '$fechaGrad', fecha1 ='$fecha1', fecha2 ='$fecha2', fecha3 ='$fecha3', fecha4 = '$fecha4', fecha5 = '$fecha5', fecha6 = '$fecha6', fecha7 = '$fecha7', fecha8 = '$fecha8' WHERE id ='$id'";    
            mysqli_query($conexion, $sql);                                                                                                       
            echo json_encode($sql);
            break;

    case 'guardarComentario' :

            $comentarioi = $_POST["comentarioi"];
            $id = $_POST["id"];  
            $sql= " UPDATE tbl_member1 SET comentario = '$comentarioi' WHERE id ='$id'";   
            mysqli_query($conexion, $sql);                                                                                                            
            echo json_encode($sql);
            break;

            case 'guardarComentarioUni' :

                $comentariou = $_POST["comentariou"];
                $id = $_POST["id"];  
                $sql= " UPDATE tbl_member1 SET comentario5 = '$comentariou' WHERE id ='$id'";   
                mysqli_query($conexion, $sql);                                                                                                            
                echo json_encode($sql);
                break;

                case 'guardarComentarioBook' :

                        $comentariol = $_POST["comentariol"];
                        $id = $_POST["id"];  
                        $sql= " UPDATE tbl_member1 SET comentario6 = '$comentariol' WHERE id ='$id'";   
                        mysqli_query($conexion, $sql);                                                                                                            
                        echo json_encode($sql);
                        break;

                        case 'guardarComentarioGrad' :

                                $comentariog = $_POST["comentariog"];
                                $id = $_POST["id"];  
                                $sql= " UPDATE tbl_member1 SET comentario7 = '$comentariog' WHERE id ='$id'";   
                                mysqli_query($conexion, $sql);                                                                                                            
                                echo json_encode($sql);
                                break;

        case 'guardarComentario1' :

                $comentario1 = $_POST["comentario1"];
                $id = $_POST["id"];  
                $sql= " UPDATE tbl_member1 SET comentario1 = '$comentario1' WHERE id ='$id'";   
                mysqli_query($conexion, $sql);                                                                                                            
                echo json_encode($sql);
                break;

            case 'guardarComentario2' :
        
                    $comentario2 = $_POST["comentario2"];
                    $id = $_POST["id"];  
                    $sql= " UPDATE tbl_member1 SET comentario2 = '$comentario2' WHERE id ='$id'";   
                    mysqli_query($conexion, $sql);                                                                                                            
                    echo json_encode($sql);
                    break;
                    

                case 'guardarComentario3' :

                        $comentario3 = $_POST["comentario3"];
                        $id = $_POST["id"];  
                        $sql= " UPDATE tbl_member1 SET comentario3 = '$comentario3' WHERE id ='$id'";   
                        mysqli_query($conexion, $sql);                                                                                                            
                        echo json_encode($sql);
                        break;

                        case 'guardarComentario4' :
                    
                                $comentario4 = $_POST["comentario4"];
                                $id = $_POST["id"];  
                                $sql= " UPDATE tbl_member1 SET comentario4 = '$comentario4' WHERE id ='$id'";   
                                mysqli_query($conexion, $sql);                                                                                                            
                                echo json_encode($sql);
                                break;

                                case 'guardarComentario5' :

                                        $comentario5 = $_POST["comentario5"];
                                        $id = $_POST["id"];  
                                        $sql= " UPDATE tbl_member1 SET comentario8 = '$comentario5' WHERE id ='$id'";   
                                        mysqli_query($conexion, $sql);                                                                                                            
                                        echo json_encode($sql);
                                        break;
                        
                                    case 'guardarComentario6' :
                                
                                            $comentario6 = $_POST["comentario6"];
                                            $id = $_POST["id"];  
                                            $sql= " UPDATE tbl_member1 SET comentario9 = '$comentario6' WHERE id ='$id'";   
                                            mysqli_query($conexion, $sql);                                                                                                            
                                            echo json_encode($sql);
                                            break;
                                            
                        
                                        case 'guardarComentario7' :
                        
                                                $comentario7 = $_POST["comentario7"];
                                                $id = $_POST["id"];  
                                                $sql= " UPDATE tbl_member1 SET comentario10 = '$comentario7' WHERE id ='$id'";   
                                                mysqli_query($conexion, $sql);                                                                                                            
                                                echo json_encode($sql);
                                                break;
                        
                                                case 'guardarComentario8' :
                                            
                                                        $comentario8 = $_POST["comentario8"];
                                                        $id = $_POST["id"];  
                                                        $sql= " UPDATE tbl_member1 SET comentario11 = '$comentario8' WHERE id ='$id'";   
                                                        mysqli_query($conexion, $sql);                                                                                                            
                                                        echo json_encode($sql);
                                                        break;                

    case 'listar':

            $datos = mysqli_query($conexion, "select id,username,eva_1,eva_2,eva_3,eva_4 from tbl_member1");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

    case 'listarStudent':
 
            $id = $_POST["id"];
            $datos = mysqli_query($conexion, "SELECT id,username,eva_1,eva_2,eva_3,eva_4 
                                              FROM tbl_member1 WHERE id = '$id'");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

    case 'buscarComentario':

            $id = $_POST["id"];
            $datos = mysqli_query($conexion, "SELECT comentario,comentario1,comentario2,comentario3,comentario4,comentario5,comentario6,comentario7,comentario8,comentario9,comentario10,comentario11 FROM tbl_member1 WHERE id = '$id'");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;

    case 'buscarPago':

            $id = $_POST["id"];
            $datos = mysqli_query($conexion, "SELECT inscripcion,uniforme,libro,graduacion,cuota_1,cuota_2,cuota_3,cuota_4,cuota_5,cuota_6,cuota_7,cuota_8,fechaIns,fechaUni,fechaBook,fechaGrad,fecha1,fecha2,fecha3,fecha4,fecha5,fecha6,fecha7,fecha8  FROM tbl_member1 WHERE id = '$id'");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;
            
        
    case 'buscarNotas':

            $id = $_POST["id"];
            $datos = mysqli_query($conexion, "SELECT eva_1,eva_2,eva_3,eva_4 FROM tbl_member1 WHERE id = '$id'");
            $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);
            break;
                
     
    case 'editar':

            $eva_1 = $_POST["eva_1"];
            $eva_2 = $_POST["eva_2"];
            $eva_3 = $_POST["eva_3"];
            $eva_4 = $_POST["eva_4"];
            $id = $_POST["id"];
            $sql= " UPDATE tbl_member1 SET eva_1 ='$eva_1', eva_2 ='$eva_2', eva_3 ='$eva_3', eva_4 = '$eva_4' WHERE id ='$id'";  
            mysqli_query($conexion, $sql);                                                                                          
            echo json_encode($sql);
            break;

    case 'cambiarPass':

            $id = $_POST["id"];    
            if(count($_POST)>0) {
            $hashedPassword = password_hash($_POST["new_Password"], PASSWORD_DEFAULT);
            $result = mysqli_query($conexion,"SELECT * from tbl_member1 WHERE id = '$id'");
            $row=mysqli_fetch_array($result);
            if($_POST["new_Password"] == $_POST["confirm_Password"]) {
            $sql= mysqli_query($conexion,"UPDATE tbl_member1 SET password ='" . $hashedPassword . "' WHERE id = '$id'");
            }
            echo json_encode($sql);
            break;
                }

    case 'borrar':

            $respuesta = mysqli_query($conexion, "delete from tbl_member1 where id=$_POST[id]");
            echo json_encode($respuesta);
            break;
        
}
