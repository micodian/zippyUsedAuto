<?php include 'header.php' ?>
    <?php if($firstname ): ?>
        <h1>Thank you for registering,<?php echo $firstname; ?></h1>
        <a href='.' action='show_vehicle_list'>Back To Vehicle List</a>
    <?php else: ?>

        <div class="container-fluid">
                <div class="form-group">
            <form action="." method="GET">
                        <input type="hidden" name="action" value="register">
                        <label>Please Enter Your First Name:</label> 
                        <input type="text" class="form-control" name="firstname" placeholder="first Name">
                    
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            </div>
    <?php endif ?>    
<?php include 'footer.php' ?> 