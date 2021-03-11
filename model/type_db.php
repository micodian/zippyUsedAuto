<?php  

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



?>