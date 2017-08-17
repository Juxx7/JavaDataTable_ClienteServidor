<?php
    include("../conexion.php");

    $direc=$_POST['address'];
    $direc2=$_POST['address2'];
    $distrito=$_POST['district'];
    $idcity=$_POST['city_id'];
    $cp=$_POST['postal_code'];
    $tel=$_POST['phone'];
    $actu=$_POST['last_update'];
    $opc=$_POST['modif'];
    $id=$_POST['iduser'];

  if($opc=='modificar'){
         $query="UPDATE address SET address_id='$id', address='$direc', address2='$direc2', district='$distrito', city_id='$idcity', postal_code='$cp', phone='$tel', last_update='$actu' WHERE address_id='$id'";
            $resultado= $conexion->query($query);
    }else{
        $query="INSERT INTO address(`address`, `address2`, `district`, `city_id`, `postal_code`, `phone`, `last_update`) VALUES('$direc', '$direc2', '$distrito', '$idcity', '$cp', '$tel', '$actu')";
$resultado= $conexion->query($query);
    }
      

?>