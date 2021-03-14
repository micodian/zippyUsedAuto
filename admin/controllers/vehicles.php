<?php 
// require('../../model/database.php');
// require('../../model/vehicles_db.php');
// require('../../model/make_db.php');
// require('../../model/class_db.php');
// require('../../model/type_db.php');

// echo '   inside controller/vehicles.php';



// $make_id=filter_input(INPUT_POST, 'make_id',FILTER_VALIDATE_INT);
// if(!$make_id){
   
//     $make_id = filter_input(INPUT_GET, 'make_id',FILTER_VALIDATE_INT);
// }

// $type_id=filter_input(INPUT_POST, 'type_id',FILTER_VALIDATE_INT);
// if(!$type_id){
    
//     $type_id = filter_input(INPUT_GET, 'type_id',FILTER_VALIDATE_INT);
// }

// $class_id=filter_input(INPUT_POST, 'class_id',FILTER_VALIDATE_INT);
// if(!$class_id){
   
//     $class_id = filter_input(INPUT_GET, 'class_id',FILTER_VALIDATE_INT);
    
// }

// $year=filter_input(INPUT_POST, 'year',FILTER_VALIDATE_INT);
// if(!$year){
    
//     $year = filter_input(INPUT_GET, 'year',FILTER_VALIDATE_INT);
// }
// $price=filter_input(INPUT_POST, 'price',FILTER_VALIDATE_INT);
// if(!$price){
  
//     $price = filter_input(INPUT_GET, 'price',FILTER_VALIDATE_INT);
// }
// $vehicleName=filter_input(INPUT_POST, 'vehicleName',FILTER_SANITIZE_STRING);
// if(!$vehicleName){
    
//     $vehicleName = filter_input(INPUT_GET, 'vehicleName',FILTER_SANITIZE_STRING);
   
// }

$action = filter_input(INPUT_POST, 'action',FILTER_SANITIZE_STRING);

if($action=='add_vehicle'){
    echo 'nice';
    add_vehicle($year,$price,$vehicleName,$type_id,$class_id,$make_id);
    include('vehicle_list.php');
}






?>