<?php
require('model/database.php');
require('model/vehicles_db.php');

//show all items
$action = filter_input(INPUT_POST, 'action');
if($action== NULL){
    $action=filter_input(INPUT_GET,'action');
    if($action==NULL){
        $action='show_vehicle_list';
    }
}

if($action == 'show_vehicle_list'){
    //echo 'begin';
    $vehicles= get_vehicles();
    //echo 'after vehicles';
    include('view/vehicle_list.php');
}



?>