<?php

$user_name=$userid;
unset($userid);
session_destroy();
$name= session_name();
$expire = strtotime('-1 year');
$params = session_get_cookie_params();
$path = $params['path'];
$domain = $params['domain'];
$secure = $params['secure'];
$httponly = $params['httponly'];
setcookie($name,'',$expire,$path,$domain,$secure,$httponly);



?> 
<?php include 'header.php'; ?>

        <h1>Thank you for signing out,<?php echo $user_name; ?>!</h1>
       
        <a href='.' action='show_vehicle_list'>Back To Vehicle List</a>

<?php include 'footer.php'; ?>