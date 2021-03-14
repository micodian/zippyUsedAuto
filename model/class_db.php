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

function get_class_name($class_id){
    if(!$make_id){
        return "All makes";
    }
    global $db;
    $query = 'SELECT * FROM classes
                       WHERE class_id= :class_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id',$class_id);
    $statement->execute();
    $class = $statement->fetch();
    $statement->closeCursor();
    $class_name = $class['class'];
    return $class_name;
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



?>