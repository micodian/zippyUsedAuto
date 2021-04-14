<?php

class Database{
    // private static $dsn= 'mysql:host=localhost;dbname=zippyusedautos';
    // private static $username= 'root';
    // private static $password='';
    // private static $db;
    private static $dbname;
    private static $host;
    private static $username;
    private static $password;
    private static $dsn;
    private static $db;


    private function __construct(){
        self::$host =getenv('SQL_HOST')? getenv('SQL_HOST'): 'localhost';
        self::$dbname =getenv('SQL_DB')? getenv('SQL_DB'): 'zippyusedautos';
        self::$username =getenv('SQL_USER')? getenv('SQL_USER'): 'root';
        self::$password =getenv('SQL_PW')? getenv('SQL_PW'): '';
        self::$dsn ='mysql:host=' .self::$host.';dbname=' . self::$dbname;
    }
    public static function getDB(){
        if(!isset(self::$db)){
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
$database = new Database();
    // $url = getenv('JAWSDB_URL');
    // $dbparts = parse_url($url);

    // $hostname = $dbparts['host'];
    // $username = $dbparts['user'];
    // $password = $dbparts['pass'];
    // $database = ltrim($dbparts['path'],'/');






   





    // try {
    //     $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    //     // set the PDO error mode to exception
    //     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     //echo "Connected successfully";
    //     }
    // catch(PDOException $e)
    //     {
    //     echo "Connection failed: " . $e->getMessage();
    //     }

    
?>