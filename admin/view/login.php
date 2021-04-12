<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="view/css/main.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>ZippyAuto</title>
    <link rel="stylesheet" href="../css/new.css">
</head>
<?php

if($login_message){
  echo $login_message;
}else{
  echo 'Please provide your credentials.';
}

?>
<form action="." method="POST">
  <input type="hidden" name="action" value="login">
  <div class="form-group">
    <label for="Username">Username:</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="Username">
  </div>
  <div class="form-group">
    <label for="Password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>