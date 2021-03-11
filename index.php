<?php
require('model/database.php');
require('model/vehicles_db.php');
require('model/make_db.php');
require('model/class_db.php');
require('model/type_db.php');

$make_id=filter_input(INPUT_GET, 'make_id',FILTER_VALIDATE_INT);
$type_id=filter_input(INPUT_GET, 'type_id',FILTER_VALIDATE_INT);
$class_id=filter_input(INPUT_GET, 'class_id',FILTER_VALIDATE_INT);


//show all items
$action = filter_input(INPUT_POST, 'action');
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

// if($action == 'show_vehicle_list'){
//     echo 'begin';
//     $vehicles= get_vehicles();
//     echo 'after get vehicles';
//     $makes= get_makes();
//     echo 'after makes';
//     include('view/vehicle_list.php');
// }

switch($action){
    case "list_makes":
        $makes= get_makes();
        include('view/vehicle_list.php');
        break;
    default:
        $vehicles=get_vehicles();
        $makes=get_makes();
        $make_name=get_make_name($make_id);
        $classes=get_classes();
        $types=get_types();
        include('view/vehicle_list.php');
}

?>