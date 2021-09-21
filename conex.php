<?php

	
		$Servidor="localhost";
		$UserDB="root";
		$ClaveDB="";
		$BaseDatos="reservatours_db_20174777";
			
        $Conectar = mysqli_connect($Servidor,$UserDB,$ClaveDB,$BaseDatos)
        or dice ("error en la conexion");
		
        $name = trim($_POST['name']);
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $insertar="INSERT INTO contactanos VALUES ('$name','$email','$message')";

        
        $resultado = mysqli_query($Conectar,$insertar)
        or dice ("error");

        mysqli_close($Conectar);
        
?>