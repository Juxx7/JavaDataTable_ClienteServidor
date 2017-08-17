<?php
    include("../conexion.php");
     
    $nombre=$_POST['name'];
    $actu=$_POST['last_update'];
    $opc=$_POST['modif'];
    $id=$_POST['iduser'];
    
    if($opc=='modificar'){
         $query="UPDATE category SET category_id='$id', name='$nombre', last_update='$actu' WHERE category_id='$id'";

            $resultado= $conexion->query($query);
    }else{
         
        
        $query="INSERT INTO category(name, last_update) VALUES('$nombre','$actu')";
            $resultado= $conexion->query($query);
    }
        
        
       
   
?>