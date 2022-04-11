<?php
require_once("../model/db_connection.php");
require_once("../model/test.php");

$data = "
    <thead>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
";

$test = new test();
$list = $test->showTests();//extraemos los datos de la bdd y lo guardamos en $list

foreach($list as $row){//recorremos el array para ir mostrando los datos extraidos
    $data .= "
        <tr>
            <td>$row[a]</td>
            <td>$row[b]</td>
            <td><a onclick='getElement($row[a])' class='btn btn-outline-success me-2'>Editar</a>
                <a onclick='getElementToDelete($row[a])' class='btn btn-outline-danger ms-2'>Eliminar</a>
            </td>
        </tr>";
}

$data .= "</tbody>";
echo $data;
?>