<?php  
// echo '   in type_db database';

function get_types(){
    global $db;
    $query = 'SELECT * FROM types
                       ORDER BY type_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $types = $statement->fetchAll();
    $statement->closeCursor();
    return $types;
}

function get_type_name($type_id){
    if(!$type_id){
        return "All makes";
    }
    global $db;
    $query = 'SELECT * FROM types
                       WHERE type_id= :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id',$type_id);
    $statement->execute();
    $type = $statement->fetch();
    $statement->closeCursor();
    $make_name = $type['type'];
    return $type_name;
}

function add_type($type){
    global $db;
    //count to flag item deleted to be returned 
  
        $query = 'INSERT INTO types
                 (type)
              VALUES
                 (:type)';
        $statement = $db->prepare($query);
        $statement->bindValue(':type', $type);
        $statement->execute();
        $statement->closeCursor(); 
        // return 1;
     
}
function delete_type($type_id){
    global $db;
    //count to flag item deleted to be returned 
    $query = 'DELETE FROM types
              WHERE type_id = :type_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id', $type_id);
    $success = $statement->execute();
    $statement->closeCursor(); 
}


?>