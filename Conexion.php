<?php

	
		$Servidor="localhost";
		$UserDB="root";
		$ClaveDB="";
		$BaseDatos="reservatours_db_20174777";
			
        $Conectar = mysqli_connect($Servidor,$UserDB,$ClaveDB,$BaseDatos)
        or dice ("error en la conexion");

		$email = $_POST['email'];
        $name = ($_POST['name']);
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $insertar="INSERT INTO usuarios VALUES ('$email','$name','$phone','$date''$message')";

        
        $resultado = mysqli_query($Conectar,$insertar)
       

     
?>