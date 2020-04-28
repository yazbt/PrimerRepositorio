<?php 
$serverName="localhost";
$connectionInfo=array("Database"=>"jbt_btp","UID"=>sa,"PWD"=>jbte13,"CharacterSet"=>"UTF8");
$con=sqlsrv_connect($serverName,$connectionInfo);

if($con){
    echo"exito!";
}else{
    echo"error!";
}
?>