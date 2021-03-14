<?php  

//echo "     inside make_db";

function get_makes(){
    global $db;
    $query = 'SELECT * FROM makes
                       ORDER BY make_id';
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetchAll();
    $statement->closeCursor();
    return $makes;
}

function get_make_name($make_id){
    if(!$make_id){
        return "All makes";
    }
    global $db;
    $query = 'SELECT * FROM makes
                       WHERE make_id= :make_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_id',$make_id);
    $statement->execute();
    $make = $statement->fetch();
    $statement->closeCursor();
    $make_name = $make['make'];
    return $make_name;
}

function add_make($make){
    global $db;
    //count to flag item deleted to be returned 
  
        $query = 'INSERT INTO makes
                 (make)
              VALUES
                 (:make)';
        $statement = $db->prepare($query);
        $statement->bindValue(':make', $make);
        $statement->execute();
        $statement->closeCursor(); 
    
     
}



?>