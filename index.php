<?php
require('model/database.php');
require('model/vehicles_db.php');
require('model/make_db.php');
require('model/class_db.php');
require('model/type_db.php');

$make_id=filter_input(INPUT_POST, 'make_id',FILTER_VALIDATE_INT);
if(!$make_id){
    echo 'in makes get';
    $make_id = filter_input(INPUT_GET, 'make_id',FILTER_VALIDATE_INT);
}
$type_id=filter_input(INPUT_POST, 'type_id',FILTER_VALIDATE_INT);
if(!$type_id){
    echo 'in type get';
    $type_id = filter_input(INPUT_GET, 'type_id',FILTER_VALIDATE_INT);
}
$class_id=filter_input(INPUT_POST, 'class_id',FILTER_VALIDATE_INT);
if(!$class_id){
    echo 'in class get';
    $class_id = filter_input(INPUT_GET, 'class_id',FILTER_VALIDATE_INT);
}


//show all items
$action = filter_input(INPUT_POST, 'action',FILTER_SANITIZE_STRING);
if(!$action){
    $action=filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
    if(!$action){
        $action='show_vehicle_list';
    }
}
// if($action== NULL){
//     $action=filter_input(INPUT_GET,'action');
//     if($action==NULL){
//         $action='show_vehicle_list';
//     }
// }

if($action == 'show_vehicle_list'){
    //echo 'begin';
    //echo 'after get vehicles';
    if($type_id){
        // $vehicles=get_vehicles_by_make($make_id); 
        $vehicles=get_vehicles_by_type($type_id);
       
    }
    else if($make_id){
        echo 'entered make index';
        //$vehicles=get_vehicles_by_class($class_id);
        $vehicles=get_vehicles_by_make($make_id); 
        
    }
    else if($class_id){
        echo 'in class index';
        $vehicles=get_vehicles_by_class($class_id); 
    }
    else{
        //$vehicles=get_vehicles();
        $vehicles=get_vehicles(); 
    }

    //$vehicles=get_vehicles_by_make($make_id);
    $types=get_types();
    $makes= get_makes();
    $classes=get_classes();
    //$types=get_types();
    //echo 'after makes';
    include('view/vehicle_list.php');
}



?>