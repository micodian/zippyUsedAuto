<?php
require('../model/database.php');
require('../model/vehicles_db.php');
require('../model/make_db.php');
require('../model/class_db.php');
require('../model/type_db.php');
require('../model/admin_db.php');



$username= filter_input(INPUT_POST, 'username',FILTER_SANITIZE_STRING);
$password= filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);
$confirm_password= filter_input(INPUT_POST, 'confirm_password',FILTER_SANITIZE_STRING);
$make_id=filter_input(INPUT_POST, 'make_id',FILTER_VALIDATE_INT);
if(!$make_id){
    //echo 'in makes get';
    $make_id = filter_input(INPUT_GET, 'make_id',FILTER_VALIDATE_INT);
}
$vehicle_id=filter_input(INPUT_POST, 'vehicle_id',FILTER_VALIDATE_INT);
if(!$vehicle_id){
    //echo 'in makes get';
    $vehicle_id = filter_input(INPUT_GET, 'vehicle_id',FILTER_VALIDATE_INT);
}
$type_id=filter_input(INPUT_POST, 'type_id',FILTER_VALIDATE_INT);
if(!$type_id){
    //echo 'in type get';
    $type_id = filter_input(INPUT_GET, 'type_id',FILTER_VALIDATE_INT);
}
$class_id=filter_input(INPUT_POST, 'class_id',FILTER_VALIDATE_INT);
if(!$class_id){
    //echo 'in class get';
    $class_id = filter_input(INPUT_GET, 'class_id',FILTER_VALIDATE_INT);
    //echo $class_id;
}
$sort= filter_input(INPUT_POST, 'sort',FILTER_SANITIZE_STRING);
if(!$sort){
    $sort=filter_input(INPUT_GET, 'sort',FILTER_SANITIZE_STRING);
}
$year=filter_input(INPUT_POST, 'year',FILTER_VALIDATE_INT);
if(!$year){
    
    $year = filter_input(INPUT_GET, 'year',FILTER_VALIDATE_INT);
}
$price=filter_input(INPUT_POST, 'price',FILTER_VALIDATE_INT);
if(!$price){
  
    $price = filter_input(INPUT_GET, 'price',FILTER_VALIDATE_INT);
}
$vehicleName=filter_input(INPUT_POST, 'vehicleName',FILTER_SANITIZE_STRING);
if(!$vehicleName){
    
    $vehicleName = filter_input(INPUT_GET, 'vehicleName',FILTER_SANITIZE_STRING);
   
}
$type=filter_input(INPUT_POST, 'type',FILTER_SANITIZE_STRING);
if(!$type){
    
    $type = filter_input(INPUT_GET, 'type',FILTER_SANITIZE_STRING);
   
}
$class=filter_input(INPUT_POST, 'class',FILTER_SANITIZE_STRING);
if(!$class){
    
    $class = filter_input(INPUT_GET, 'class',FILTER_SANITIZE_STRING);
   
}

$make=filter_input(INPUT_POST, 'make',FILTER_SANITIZE_STRING);
if(!$make){
    
    $make = filter_input(INPUT_GET, 'make',FILTER_SANITIZE_STRING);
   
}


//show all items
$action = filter_input(INPUT_POST, 'action',FILTER_SANITIZE_STRING);
if(!$action){
    $action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!$action){
        $action='show_vehicle_list';
    }
}


if($action == 'show_vehicle_list'){
    if($type_id){
        $vehicles=get_vehicles_by_type($type_id,$sort);
       
    }
    else if($make_id){
        $vehicles=get_vehicles_by_make($make_id,$sort); 
        
    }
    else if($class_id){
        $vehicles=get_vehicles_by_class($class_id,$sort); 
    }
    else{
        $vehicles=get_vehicles($sort); 
    }
    $types=get_types();
    $makes= get_makes();
    $classes=get_classes();
    include('view/vehicle_list.php');
}

else if($action=='show_add-vehicle'|| $action=='delete_vehicle' || $action=='add_vehicle' ){
    $types=get_types();
    $makes= get_makes();
    $classes=get_classes();
    include('controllers/vehicles.php');
}
else if($action == 'add_type'|| $action=='delete_type' || $action=='edit_types'){
    $types=get_types();
    include('controllers/types.php');
 }
else if($action=='add_make' || $action=='delete_make'|| $action=='edit_makes'){
    $makes=get_makes();
    include('controllers/makes.php');
}
elseif ($action=='delete_class'|| $action=='add_class' || $action=='edit_classes') {
    $classes=get_classes();
    include('controllers/classes.php');
}





?>