<?php  

class MakeDB{
    public static function get_makes(){
        $db= Database::getDB();
        $query = 'SELECT * FROM makes
                       ORDER BY make_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $makes = $statement->fetchAll();
        $statement->closeCursor();
        return $makes;
    }
    public static function add_make($make){
        $db= Database::getDB();
        $query = 'INSERT INTO makes
                 (make)
              VALUES
                 (:make)';
        $statement = $db->prepare($query);
        $statement->bindValue(':make', $make);
        $statement->execute();
        $statement->closeCursor(); 
    }
    public static function delete_make($make_id){
        $db= Database::getDB();
        $query = 'DELETE FROM makes
              WHERE make_id = :make_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $success = $statement->execute();
        $statement->closeCursor();
    }
}



?>