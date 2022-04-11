<?php
require_once("../model/db_connection.php");
require_once("../model/test.php");

$test = new test();
$validarA = "/[0-9]+/";
$countErrors = 0;
$errors = "";

if(isset($_POST['deleteElementA'])){
    if(preg_match($validarA,$_POST['deleteElementA']) != 1){
        $countErrors += 1;
        $errors = "Formato de elemento A inválido";
    }else{
        $test->setA($_POST['deleteElementA']);
    }

    if($countErrors == 0){
        if($test->deleteTest()){
            echo json_encode(array("ResultCode"=>1));
        }
    }else{
        echo json_encode(array("ResultCode" => 2,"Errores"=>$errors));
    }

}else{
    echo json_encode(array("ResultCode"=>3,"Errores"=>"No se encontró el elemento a eliminar."));
}
?>