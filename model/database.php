<?php

class Database{
    private static $dsn= 'mysql:host=localhost;dbname=zippyusedautos';
    private static $username= 'root';
    private static $password='';
    private static $db;
    // private static $url = getenv('JAWSDB_URL');
    // private static $dbparts = parse_url($url);
    // private static $hostname = self::$dbparts['host'];
    // private static $username = self::$dbparts['user'];
    // private static $password = self::$dbparts['pass'];
    // private static $database = ltrim(self::$dbparts['path'],'/');


    private function __construct(){}
    public static function getDB(){
        if(!isset(self::$db)){
            // try {
            //     self::$db = new PDO("mysql:host=self::$hostname;dbname=self::$database", self::$username, self::$password);
            //     // set the PDO error mode to exception
            //     self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //     //echo "Connected successfully";
            //     }
            // catch(PDOException $e)
            //     {
            //     echo "Connection failed: " . $e->getMessage();
            //     }


            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('view/error.php');
                exit();
            }
        }
        return self::$db;
    }
}
    // $url = getenv('JAWSDB_URL');
    // $dbparts = parse_url($url);

    // $hostname = $dbparts['host'];
    // $username = $dbparts['user'];
    // $password = $dbparts['pass'];
    // $database = ltrim($dbparts['path'],'/');






   





    try {
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

    
?>