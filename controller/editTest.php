<?php
require_once("../model/db_connection.php");
require_once("../model/test.php");

$test = new test();
$validarA = "/[0-9]+/";
$validarB = "/[a-zA-Z0-9\s]+/";
$countErrors = 0;
$errors = [];

if(isset($_POST['editElementA']) && isset($_POST['editElementB'])){
    if(preg_match($validarA,$_POST['editElementA']) != 1){
        $countErrors += 1;
        $errors[] = "Formato de elemento A inválido";
    }else{
        $test->setA($_POST['editElementA']);
    }
    if(preg_match($validarB,$_POST['editElementB']) != 1){
        $countErrors += 1;
        $errors[] = "Formato de elemento B inválido";
    }else{
        $test->setB($_POST['editElementB']);
    }

    if($countErrors == 0){
        if($test->updateTest()){
            echo json_encode(array("ResultCode"=>1));
        }
    }else{
        echo json_encode(array("ResultCode" => 2,"Errores"=>$errors));
    }

}else{
    echo json_encode(array("ResultCode"=>3,"Errores"=>"No se recibió ningún dato."));
}
?>