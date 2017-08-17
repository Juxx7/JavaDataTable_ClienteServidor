<?php
    include("../conexion.php");

    $nombre=$_POST['first_name'];
    $apellidos=$_POST['last_name'];
    $actu=$_POST['last_update'];
    $opc=$_POST['modif'];
    $id=$_POST['iduser'];

    if($opc=='modificar'){
         $query="UPDATE actor SET actor_id='$id', first_name='$nombre', last_name='$apellidos', last_update='$actu' WHERE actor_id='$id'";
            $resultado= $conexion->query($query);
    }else{
        $query="INSERT INTO actor( `first_name`, `last_name`, `last_update`) VALUES('$nombre','$apellidos','$actu')";
        $resultado= $conexion->query($query);
    }
      

?>