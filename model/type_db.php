<?php  
class TypeDB{
    public static function get_types(){
        $db= Database::getDB();
        $query = 'SELECT * FROM types
                       ORDER BY type_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $types = $statement->fetchAll();
        $statement->closeCursor();
        return $types;
    }
    public static function add_type($type){
        $db= Database::getDB();
        $query = 'INSERT INTO types
                 (type)
              VALUES
                 (:type)';
        $statement = $db->prepare($query);
        $statement->bindValue(':type', $type);
        $statement->execute();
        $statement->closeCursor();
    }
    public static function delete_type($type_id){
        $db= Database::getDB();
        $query = 'DELETE FROM types
              WHERE type_id = :type_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $success = $statement->execute();
        $statement->closeCursor();
    }
}
?>