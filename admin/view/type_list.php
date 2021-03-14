<?php include 'header.php'?>
    <h2>Vehicle Type List</h2>
    <!-- nav area -->
    <div class="container">
            <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=".?action=show_vehicle_list">Full Vehicle List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=".?action=add_vehicle">Add Vehicle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=".?action=edit_makes">View/Edit Vehicle Makes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=".?action=edit_classes">View/Edit Vehicle Classes</a>
        </li>
        </ul>
    </div>
   
                
            <!-- Table container -->
        <div class="table-body container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="table-active">
                        <th scope="col">Name</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($types as $type) : ?>
                        <tr class="table-active">
                        <th scope="row"><?php echo $type['type'];?></th>
                       
                        
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="type_id" value="<?php echo $type['type_id'] ?>">
                                <input type="button" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                            
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>    
        </div>
        
        <div class="container-fluid">
            <form action="." method="post">
                <input type="hidden" name="action" value="add_type">
                <label>Name</label>
                <input type="text" name="type" required>
                <label>&nbsp;</label>
                <input type="submit" value="Add Type">
            </form>
        </div>
       

<?php include 'footer.php'?>