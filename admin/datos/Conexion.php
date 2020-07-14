<?php
class Conexion
{
    /**
     * Conexión a la base datos
     * @return PDO
     */
    public static function conectar()
    {
        try {
            $cn = new PDO("mysql:host=localhost;dbname=lambdasys", "root", ""); 
            // $cn = new PDO("mysql:host=localhost;dbname=eliottac_apphouse", "eliottac_admin", "bq7usj786i5z"); 
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}