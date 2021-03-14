<?php 

//get all vehicles by sort
function get_vehicles($sort){
    global $db;
    if($sort=='price'){
    $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                 ORDER BY price DESC
                
                                         ';
    $statement = $db->prepare($query);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    else{
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                 ORDER BY year DESC
                
                                         ';
    $statement = $db->prepare($query);
   
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    return $vehicles;
   
}

//get vehicle-make by sort
function get_vehicles_by_make($make_id,$sort){
    global $db;
    if($sort=='price'){
        $query = 'SELECT * FROM vehicles
        INNER JOIN makes ON
           vehicles.make_id=makes.make_id
        INNER JOIN types ON
            vehicles.type_id=types.type_id
        INNER JOIN classes ON
            vehicles.class_id=classes.class_id       
         WHERE vehicles.make_id=:make_id
           ORDER BY price DESC
       
                                ';
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id',$make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor(); 
    }
    else{
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                     WHERE vehicles.make_id=:make_id
                     ORDER BY year DESC
                                         ';
    $statement = $db->prepare($query);
    $statement->bindValue(':make_id',$make_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
   
    return $vehicles;
   
}


//get vehicle-type by sort
function get_vehicles_by_type($type_id,$sort){
    global $db;
    if($sort=='price'){
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                  WHERE vehicles.type_id=:type_id
                  ORDER BY price DESC
                                         ';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id',$type_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    else{
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                     WHERE vehicles.type_id=:type_id
                  ORDER BY year DESC
                
                                         ';
    $statement = $db->prepare($query);
    $statement->bindValue(':type_id',$type_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    
    return $vehicles;
   
}

//return class based on sort
function get_vehicles_by_class($class_id,$sort){
    global $db;
    if($sort=='price'){
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                  WHERE vehicles.class_id=:class_id
                    ORDER BY price DESC
                                         ';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id',$class_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    else{
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                     WHERE vehicles.class_id=:class_id
                    ORDER BY year DESC
                
                                         ';
    $statement = $db->prepare($query);
    $statement->bindValue(':class_id',$class_id);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    
    return $vehicles;
   
}

function add_vehicle($year,$price,$vehicleName,$type_id,$class_id,$make_id){
    global $db;
    //count to flag item deleted to be returned 
  
        $query = 'INSERT INTO vehicles
                 (vehicleName, price,year,type_id,class_id,make_id)
              VALUES
                 (:vehicleName, :price, :year,:type_id,:class_id,:make_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleName', $vehicleName);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $statement->closeCursor(); 
    
     
}




?>