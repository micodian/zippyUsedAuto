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





?>