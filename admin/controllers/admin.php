<?php 

switch($action){
    case 'login':
        if(AdminDB::is_valid_admin_login($username, $password)){
            $_SESSION['is_valid_admin']= true;
            header('Location: .?action=show_vehicle_list');
        }else{
            //show login message
            $login_message= 'Incorrect credentials/Please Login';
            include('view/login.php');
        }
        break;

    case 'show_login':
        include('view/login.php');
        break;
        
    case 'register':
        
        if($username && $password && $confirm_password){
            include('util/valid_register.php');
            $errors=ValidRegister::valid_registration($username, $password, $confirm_password);
            if (username_exists($username)) {
                array_push($errors, "The username you entered is already taken.");
            }
            if(count($errors)){
                include('view/register.php');
            }else{
                AdminDB::add_admin($username, $password);
                $_SESSION['is_valid_admin']= true;
                
                header('Location: .?action=show_vehicle_list');
            }
        }
        
        
        break;
        
    case 'show_register':
        include('view/register.php');
        break;
        
    case 'logout':
        $_SESSION = array();
        session_destroy();
        //login message 
        $login_message='you have been logged out';
        include('view/login.php');
        break;    
}



?>