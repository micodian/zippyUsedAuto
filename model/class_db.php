<?php  

function get_classes(){
    global $db;
    $query = 'SELECT * FROM classes
                       ORDER BY class_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $classes = $statement->fetchAll();
    $statement->closeCursor();
    return $classes;
}


function add_class($class){
    global $db;
    //count to flag item deleted to be returned 
  
        $query = 'INSERT INTO classes
                 (class)
              VALUES
                 (:class)';
        $statement = $db->prepare($query);
        $statement->bindValue(':class', $class);
        $statement->execute();
        $statement->closeCursor(); 
    
     
}

function delete_class($class_id){
    global $db;
    //count to flag item deleted to be returned 
    $query = 'DELETE FROM classes
              WHERE class_id = :class_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id', $class_id);
    $success = $statement->execute();
    $statement->closeCursor(); 
}



?>