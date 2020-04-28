<?php requiere 'conexion.php';//generar clase en php de conexion a base de datos
$sql ="INSERT tbl_encuesta_1(fecha,pregunta1) VALUES (now(),'".htmllentities($_POST['LOCAL'])"')";

$res=sqli_query($con,$sql);
if(res){
    $data['msg']="Registro exitoso";
    $data['error']=false;    
}else{
   $data['msg']=sqli_query_error($link);
    $data['error']=true; 
}

echo json_encode($data);
