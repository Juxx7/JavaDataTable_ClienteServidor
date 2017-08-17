<?php
    include("../conexion.php");
     
    $pais=$_POST['count'];
    $actu=$_POST['last_update'];
    $opc=$_POST['modif'];
    $id=$_POST['iduser'];
    
    if($opc=='modificar'){
         $query="UPDATE country SET country_id='$id', country='$pais', last_update='$actu' WHERE country_id='$id'";

            $resultado= $conexion->query($query);
       
    }else{
         
        
        $query="INSERT INTO country(`country`, `last_update`) VALUES('$pais','$actu')";
            $resultado= $conexion->query($query);
    }
        
       
       
   
?>