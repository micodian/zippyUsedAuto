<?php include 'header.php'?>
<?php 
if(isset($errors)){
  foreach ($errors as $error) {
    echo $error;
  }
}

?>
<form action="." method="POST">
  <input type="hidden" name="action" value="register">
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label >Confirm Password</label>
    <input type="password" class="form-control"  name="confirm_password" placeholder="confirm password">
  </div>
  <button class="btn btn-primary">Register</button>
</form>

<?php include 'footer.php' ?>