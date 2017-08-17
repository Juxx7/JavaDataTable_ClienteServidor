<?php
    include("../conexion.php");
     
    $ciudad=$_POST['city'];
    $count=$_POST['country_id'];
    $actu=$_POST['last_update'];
    $opc=$_POST['modif'];
    $id=$_POST['iduser'];
    
    if($opc=='modificar'){
         $query="UPDATE city SET city_id='$id', city='$ciudad', country_id='$count', last_update='$actu' WHERE city_id='$id'";

            $resultado= $conexion->query($query);
        
       
        
    }else{
         
        
        $query="INSERT INTO city(`city`, `country_id`, `last_update`) VALUES('$ciudad','$count','$actu')";
            $resultado= $conexion->query($query);
        
        
    }
        
        
       
   
?>