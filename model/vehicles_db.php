<?php 

//get all vehicles
function get_vehicles(){
    global $db;
    $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                
                
                                         ';
    $statement = $db->prepare($query);
    //$statement->bindValue(':vehicleID',$vehicleID);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles;
   
}

function get_vehicles_by_make($make_id){
    global $db;
    if($make_id){
        $query = 'SELECT * FROM vehicles
        INNER JOIN makes ON
           vehicles.make_id=makes.make_id
        INNER JOIN types ON
            vehicles.type_id=types.type_id
        INNER JOIN classes ON
            vehicles.class_id=classes.class_id       
         WHERE vehicles.make_id=:make_id
       
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
                
                
                                         ';
    $statement = $db->prepare($query);
    //$statement->bindValue(':vehicleID',$vehicleID);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
   
    return $vehicles;
   
}

function get_vehicles_by_type($type_id){
    global $db;
    if($type_id){
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                  WHERE vehicles.type_id=:type_id
                
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
                
                
                                         ';
    $statement = $db->prepare($query);
    //$statement->bindValue(':vehicleID',$vehicleID);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    
    return $vehicles;
   
}

function get_vehicles_by_class($class_id){
    global $db;
    if($class_id){
        $query = 'SELECT * FROM vehicles
                 INNER JOIN makes ON
                    vehicles.make_id=makes.make_id
                 INNER JOIN types ON
                     vehicles.type_id=types.type_id
                 INNER JOIN classes ON
                     vehicles.class_id=classes.class_id       
                  WHERE vehicles.class_id=:class_id
                
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
                
                
                                         ';
    $statement = $db->prepare($query);
    //$statement->bindValue(':vehicleID',$vehicleID);
    $statement->execute();
    $vehicles = $statement->fetchAll();
    $statement->closeCursor();
    }
    
    return $vehicles;
   
}

function get_vehicles_by_price(){
    global $db;
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
    //$statement->bindValue(':vehicleID',$vehicleID);
    $statement->execute();
    $vehicles_sort_price = $statement->fetchAll();
    $statement->closeCursor();
    return $vehicles_sort_price;
   
}




?>