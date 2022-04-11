<?php
require_once("db_connection.php");
class test{
    private $a;
    private $b;

    public function setA($value){
        $this->a = $value;
        return true;
    }

    public function getA(){
        return $this->a;
    }

    public function setB($value){
        $this->b = $value;
        return true;
    }

    public function getB(){
        return $this->b;
    }
//Funcion para realizar insercion 
    public function addTest(){
        $sql = "INSERT INTO test(a,b) VALUES (?,?)";
        $params = array($this->a,$this->b);
        return (new database)->executeRow($sql, $params);
    }
//Funcion para obtener un elemento
    public function getTest(){
        $sql = "SELECT * FROM test WHERE a = ?";
        $params = array($this->a);
        return (new database)->getRow($sql, $params);
    }
//Funcion para obtener todos los elementos de la tabla
    public function showTests(){
        $sql = "SELECT a, b FROM test";
        $params = array(null);
        return (new database)->getRows($sql, $params);
    }
//Funcion para actualizar elemento
    public function updateTest(){
        $sql = "UPDATE test SET b = ? WHERE a = ?";
        $params = array($this->b,$this->a);
        return (new database)->executeRow($sql, $params);
    }
//Funcion para eliminar elemento
    public function deleteTest(){
        $sql = "DELETE FROM test WHERE a = ?";
        $params = array($this->a);
        return (new database)->executeRow($sql, $params);
    }

}
?>
