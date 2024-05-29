<?php
/* TODO:Inicia la session (si no esta iniciada) */
session_start();

/* TODO: Definición de la clase Conectar */
class Conectar
{
    /* TODO: Propiedad protegida para almacenar la conexión a la base de datos */
    protected $dbh;

    /* TODO: Método para establecer la conexión a la base de datos */
    public function conexion()
    {
        try {
            /* TODO: Intenta establecer la conexión utilizando PDO */
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=mesadepartes", "root", "");
           //print "Conexión exitosa a la base de datos<br>";
            return $conectar;
        } catch (PDOException $e) {
            /* TODO: En caso de error, imprime un mensaje y termina el script */
            print "Error BD:" . $e->getMessage() . "<br>";
            die();
        }
    }

    /* TODO: Método para establecer el juego de caracteres a UTF-8 */
    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    /* TODO: Método estático que devuelve la ruta base del proyecto */
    public static function ruta()
    {
        return "http://localhost/PERSONAL_MesadePartes/";
    }
}
