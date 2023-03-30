<?php

/**
 * CRUD modal en PHP y MySQL
 * 
 * Este archivo realiza la conexión a MySQL
 * @author MRoblesDev
 * @version 1.0
 * https://github.com/mroblesdev
 * 
 */

$conn = new mysqli("127.0.0.1", "root", "", "cinema");

if ($conn->connect_error) {
    die("Error de conexión" . $conn->connect_error);
}
