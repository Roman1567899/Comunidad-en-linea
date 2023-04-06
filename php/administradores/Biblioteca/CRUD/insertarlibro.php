<?php

require("php/conexion.php");
// $validator = array('success' => false, 'messages' => array());

if(!empty($_FILES["archivo"]["name"])){

    $fileName = basename($_FILES["archivo"]["name"]);
    $targetFilePath = 'imagenes/'.$fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
        if(copy($_FILES["archivo"]["tmp_name"], $targetFilePath)){
            $uploadedFile = $fileName;

            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editorial = $_POST["editorial"];
            $descripcion = $_POST["descripcion"];

            $sql = "INSERT INTO biblioteca(titulolibro, autorlibro, editoriallibro, descripcionlibro, imagenlibro) VALUES('$titulo', '$autor', '$editorial', '$descripcion', '$fileName')";
        
            $resultado = pg_query($conexion, $sql);
            if($resultado)
            {
                echo "1";
            }
            else
            {
                
                echo "2";
            }

        } 
        else {
            echo "3";
        }
    } 
    else {
      
        echo "4";
    }

}
// require_once('php/conexion.php');

// 	$validator = array('success' => false, 'messages' => array());

// 	if(!empty($_FILES["archivo"]["name"])){

// 		$fileName = basename($_FILES["archivo"]["name"]);
// 		$targetFilePath = 'imagenes/'.$fileName;
// 		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

// 		$allowTypes = array('jpg', 'png', 'jpeg');
// 		if (in_array($fileType, $allowTypes)) {
// 			if(copy($_FILES["archivo"]["tmp_name"], $targetFilePath)){
// 				$uploadedFile = $fileName;

//                 $titulo = $_POST["titulo"];
//                 $autor = $_POST["autor"];
//                 $editorial = $_POST["editorial"];
//                 $descripcion = $_POST["descripcion"];

// 				$sql = 'INSERT INTO biblioteca(idlibro,titulolibro, autorlibro, editoriallibro, descripcionlibro, imagenlibro) VALUES (:dni, :nombre, :apellido, :fnac, :foto)';
// 				$stmt = $conexion->prepare($sql);
// 				$stmt->bindValue(':titulo', $dni, PDO::PARAM_STR);
// 				$stmt->bindValue(':autor', $nombre, PDO::PARAM_STR);
// 				$stmt->bindValue(':editorial', $apellido, PDO::PARAM_STR);
// 				$stmt->bindValue(':descripcion', $fnac, PDO::PARAM_STR);
// 				$stmt->bindValue(':foto', $fileName, PDO::PARAM_STR);
				
// 				if ($stmt->execute()) {
// 					$validator['success'] = true;
// 					$validator['messages'] = "DATOS GUARDADOS";
// 				} else {
// 					$validator['messages'] = "ERROR AL GUARDAR DATOS";
// 				}

// 			} else {
// 				$validator['messages'] = 'NO SE COPIO LA IMAGEN';
// 			}
// 		} else {
// 			$validator['messages'] = 'SOLO SE PERMITE FORMATOS JPG, PNG Y JPEG.';
// 		}

// 	}
//     exit()
?>