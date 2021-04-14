<?php

class Database{
    // private static $dsn= 'mysql:host=localhost;dbname=zippyusedautos';
    // private static $username= 'root';
    // private static $password='';
    // private static $db;

    private static $url;
    private static $dbparts;
    private static $hostname;
    private static $username;
    private static $password ;
    private static $database ;

    // private static $dbname;
    // private static $host;
    // private static $username;
    // private static $password;
    // private static $dsn;
    private static $db;


    
    


    private function __construct(){
        self::$url = getenv('JAWSDB_URL');
        self::$dbparts = parse_url(self::$url);
        self::$hostname = self::$dbparts['host'];
        self::$username = self::$dbparts['user'];
        self::$passsword = self::$dbparts['pass'];
        self::$database = ltrim(self::$dbparts['path'],'/');
        //self::$dsn ='mysql:host='.self::$host.';dbname='.self::$dbname;
    }
    public static function getDB(){
        
        if(!isset(self::$db)){
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

            // try {
            //     self::$db = new PDO(self::$dsn, self::$username, self::$password);
            //     //echo 'connection good';
            // } catch (PDOException $e) {
            //     $error =$e->getMessage();
            //     include('view/error.php');
            //     exit();
            // }
        }
        return self::$db;
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