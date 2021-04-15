<?php

class Database{
    // private static $dsn= 'mysql:host=localhost;dbname=zippyusedautos';
    // private static $username= 'root';
    // private static $password='';
    

    
    private static $db;


    
    


    private function __construct(){
        
    }
    public static function getDB(){
        
        if(!isset(self::$db)){
            if(getenv('JAWSDB_URL',$local_only=false))
            {


                    try {
                        $url = getenv('JAWSDB_URL');
                        $dbparts = parse_url($url);

                        $hostname = $dbparts['host'];
                        $username = $dbparts['user'];
                        $password = $dbparts['pass'];
                        $database = ltrim($dbparts['path'],'/');
                        self::$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
                        // set the PDO error mode to exception
                        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        //echo "Connected successfully";
                        }
                    catch(PDOException $e)
                        {
                        echo "Connection failed: " . $e->getMessage();
                        }

                    }            
            else{       
                try {
                    $dsn= 'mysql:host=localhost;dbname=zippyusedautos';
                    $username= 'root';
                    $password='';
                    self::$db = new PDO($dsn,$username,$password);
                    //echo 'connection good';
                } catch (PDOException $e) {
                    $error =$e->getMessage();
                    include('view/error.php');
                    exit();
                }
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