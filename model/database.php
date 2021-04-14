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


    private static $dbparts;
    


    private function __construct(){
        // $this->setDbparts();
        // self::$host =self::$dbparts['host']? self::$dbparts['host']: 'localhost';
        // self::$dbname =ltrim(self::$dbparts['path'],'/')? ltrim(self::$dbparts['path'],'/'): 'zippyusedautos';
        // self::$username =self::$dbparts['user']?self::$dbparts['user']: 'root';
        // self::$password =self::$dbparts['pass']? self::$dbparts['pass']: '';
        // self::$dsn ='mysql:host=' .self::$host.';dbname=' . self::$dbname;
    }
    public static function getDB(){
        self::setDbparts();
        self::$host = self::$dbparts['host'];
        self::$username = self::$dbparts['user'];
        self::$password = self::$dbparts['pass'];
        self::$dbname = ltrim(self::$dbparts['path'],'/'); 
        self::$dsn = "mysql:host=self::$host;dbname=self::$dbname";
        if(!isset(self::$db)){
            try {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
                echo 'connection good';
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('view/error.php');
                exit();
            }
        }
        return self::$db;
    }

    public static function setDbparts(){
        $url = getenv('JAWSDB_URL');
        self::$dbparts = parse_url($url);
        echo 'in dbparts';
        //return self::$dbparts;
    }
}
//$database = new Database();
   




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