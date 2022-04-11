<?php
class database{
    const DBHOSTNAME = "localhost";
    const DBUSER = "root";
    const DBPASS = "";
    const DBDATABASE = "prueba";
    const CHARSET = "utf8";

    public function create_connection()
    {
        try
        {
            @$connection = new PDO("mysql:host=" . self::DBHOSTNAME . ";dbname=" . self::DBDATABASE . ";charset=" . self::CHARSET, self::DBUSER, self::DBPASS);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connection;
        }
        catch (PDOException $e)
        {
            echo "Error en la conexión: ", $e->getMessage();
        }
    }

    public function close_connection($connection)
    {
        $connection = null;
    }

    public function getRow($query, $values){
        $statement = null;
        $connect = self::create_connection();
        $statement = $connect->prepare($query);
        $statement->execute($values);
        self::close_connection($connect);
        return $statement->fetch();
    }
    
    public function getRows($query, $values){
        $statement = null;
        $connect = self::create_connection();
        $statement =  $connect->prepare($query);
        $statement->execute($values);
        self::close_connection($connect);
        return $statement->fetchAll();
    }

    public function executeRow($query, $values){
        $statement = null;
        $connect = self::create_connection();
        $statement = $connect->prepare($query);
        $state = $statement->execute($values);
        self::close_connection($connect);
        return $state;
    }
}

?>