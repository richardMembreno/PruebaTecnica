<?php
require_once("../model/db_connection.php");
require_once("../model/test.php");

$test = new test();
$validarA = "/[0-9]+/";

if(isset($_POST['id'])){
    if(preg_match($validarA,$_POST['id']) != 1){//validamos que tenga el formato correcto
        echo json_encode(array("resultCode"=>"Error"));
    }else{
        $test->setA($_POST['id']);//asignamos el valor de 'A'
        $data = $test->getTest();//obtenemos los datos del elemento
        echo json_encode(array("resultCode"=>"Exito","a"=>$data['a'],"b"=>$data['b']));//enviamos al cliente un json con datos del elemento
    }
}
?>