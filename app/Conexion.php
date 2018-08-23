<?php
/**
 * Created by PhpStorm.
 * User: pacoc
 * Date: 23/08/2018
 * Time: 17:48
 */

class Conexion
{
    private static $conn;

    /**
     * open connect to database
     */
    public function open_db()
    {
        if (!isset(self::$conn)):
            try{
            require_once "config.inc.php";
            self::$conn = new PDO('mysl:host=',DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->exec("SET CHARACTER SET utf8");

            }catch (PDOException $ex){
                die("Message de Error= " .$ex->getMessage());
            }
        endif;
    }

    /*
     * close the connect to database
     */

    public function close_db()
    {
        if (isset(self::$conn)) self::$conn = null;
    }

    /**
     * @return connect
     */
    public static function getConn()
    {
        return self::$conn;
    }

}