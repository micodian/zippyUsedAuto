<?php 
//echo 'in valid_admin page';
if(!isset($_SESSION['is_valid_admin'])){
    header('Location: .?action=show_login');
}

//echo '  after if stmt';

?>