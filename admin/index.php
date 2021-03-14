<?php
require('../model/database.php');
require('../model/vehicles_db.php');
require('../model/make_db.php');
require('../model/class_db.php');
require('../model/type_db.php');

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
    //echo 'begin';
    //echo 'after get vehicles';
    if($type_id){
      
        $vehicles=get_vehicles_by_type($type_id,$sort);
       
    }
    else if($make_id){
        //echo 'entered make index';
        
        $vehicles=get_vehicles_by_make($make_id,$sort); 
        
    }
    else if($class_id){
        //echo 'in class index';
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
else if($action=='edit_makes'){
    $makes=get_makes();
    include('view/make_list.php');
}
else if($action=='edit_types'){
    $types=get_types();
    include('view/type_list.php');
}
else if($action=='edit_classes'){
    $classes=get_classes();
    include('view/class_list.php');
}
else if($action=='add_vehicle'){
    $types=get_types();
    $makes= get_makes();
    $classes=get_classes();
    include('view/add_vehicle_form.php');
}
else if($action=='show_add-vehicle'){
    add_vehicle($year,$price,$vehicleName,$type_id,$class_id,$make_id);
    //include('view/add_vehicle_form.php');
    header('Location: .?action=add_vehicle');
    //redirect('controllers/vehicles.php');
    //header("Location: controllers/vehicles.php?action=add_vehicle&price=".$price."&year=".$year."&vehicleName=".$vehicleName."&make_id=".$make_id."&class_id=".$class_id."&type_id=".$type_id);
    
}
else if($action == 'add_type'){
    add_type($type);
   header('Location: .?action=edit_types');
}
else if($action=='add_class'){
    add_class($class);
    header('Location: .?action=edit_classes');
}else if($action=='add_make'){
    add_make($make);
    header('Location: .?action=edit_makes');
}elseif ($action=='delete_type') {
    delete_type($type_id);
    header('Location: .?action=edit_types');
}
elseif ($action=='delete_class') {
    delete_class($class_id);
    header('Location: .?action=edit_classes');
}
elseif ($action=='delete_make') {
    delete_make($make_id);
    header('Location: .?action=edit_makes');
}
else if($action=='delete_vehicle'){
    delete_vehicle($vehicle_id);
    header('Location: .?action=show_vehicle_list');
}




?>