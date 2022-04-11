<?php
require_once("../model/db_connection.php");
require_once("../model/test.php");

$test = new test();
$validarA = "/[0-9]+/";
$validarB = "/[a-zA-Z0-9\s]+/";
$countErrors = 0;
$errors = [];

if(isset($_POST['elementA']) && isset($_POST['elementB'])){
    if(preg_match($validarA,$_POST['elementA']) != 1){
        $countErrors += 1;
        $errors[] = "El valor de A debe ser numérico";
    }else{
        $test->setA($_POST['elementA']);
    }
    if(preg_match($validarB,$_POST['elementB']) != 1){
        $countErrors += 1;
        $errors[] = "El valor de B debe ser alfanumérico";
    }else{
        $test->setB($_POST['elementB']);
    }

    if($countErrors == 0){
        if($test->addTest()){
            echo json_encode(array("ResultCode"=>1));
        }
    }else{
        echo json_encode(array("ResultCode" => 2,"Errores"=>$errors));
    }
}else{
    echo json_encode(array("ResultCode"=>3,"Errores"=>"No se recibió ningún dato."));
}
?>
