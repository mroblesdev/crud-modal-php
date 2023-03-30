<?php

/**
 * CRUD modal en PHP y MySQL
 * 
 * Este archivo elimina el registro y la imagen
 * @author MRoblesDev
 * @version 1.0
 * https://github.com/mroblesdev
 * 
 */

session_start();

require 'config/database.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "DELETE FROM pelicula WHERE id=$id";
if ($conn->query($sql)) {

    $dir = "posters";
    $poster = $dir . '/' . $id . '.jpg';

    if (file_exists($poster)) {
        unlink($poster);
    }

    $_SESSION['color'] = "success";
    $_SESSION['msg'] = "Registro eliminado";
} else {
    $_SESSION['color'] = "danger";
    $_SESSION['msg'] = "Error al eliminar registro";
}

header('Location: index.php');
