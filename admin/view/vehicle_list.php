<?php include 'header.php'?>

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
            <a class="nav-link" href=".?action=edit_types">View/Edit Vehicle Types</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=".?action=edit_classes">View/Edit Vehicle Classes</a>
        </li>
        </ul>
    </div>
    <!-- Radio button div -->
    <div class="div-container">
        
                
                
        </div>

        <!-- drop-down container -->
        <div class="dropDown-container">
                <form action="." method="GET" >
                    <input type="hidden" name="action" value="show_vehicle_list">
                        <!-- makes container -->
                    <select name="make_id" class="dropDown_selector text-primary">
                    
                            <option value="">View All Makes</option>
                            <?php foreach ($makes as $make) : ?>
                                <?php if($make_id == $make['make_id']) {?>
                                    <option value="<?= $make['make_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $make['make_id']?>">
                            <?php } ?>
                                    <?= $make['make'] ?>
                                </option>
                            <?php endforeach; ?>
                    </select> 
                
                        <!-- Types container -->
                        <select name="type_id" class="dropDown_selector text-primary">
                            <option value="">View All Types</option>
                            <?php foreach ($types as $type) : ?>
                                <?php if($type_id == $type['type_id']) {?>
                                    <option value="<?= $type['type_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $type['type_id']?>">
                            <?php } ?>
                                    <?= $type['type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <!-- Classes container -->
                        <select name="class_id" class="dropDown_selector text-primary">
                            <option value="">View All Classes</option>
                            <?php foreach ($classes as $class) : ?>
                                <?php if($class_id == $class['class_id']) {?>
                                    <option value="<?= $class['class_id']?>" selected>
                            <?php }else { ?>
                                <option value="<?= $class['class_id']?>">
                            <?php } ?>
                                    <?= $class['class'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    

                     
                    </div>
                    <div class="btn-class btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="sort" id="sort_price" value="price" autocomplete="off" checked>
                            <label class="btn btn-outline-secondary" for="sort_price">Sort By Price</label>

                            <input type="radio" class="btn-check" name="sort" id="sort_year" value="year" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="sort_year">Sort By Year</label>  
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> 
                    </div>
             </form> 
                
            <!-- Table container -->
        <div class="table-body container">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr class="table-active">
                        <th scope="col">Year</th>
                        <th scope="col">Make</th>
                        <th scope="col">Model</th>
                        <th scope="col">Type</th>
                        <th scope="col">Class</th>
                        <th scope="col">Price</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php foreach ($vehicles as $vehicle) : ?>
                        <tr class="table-active">
                        <th scope="row"><?php echo $vehicle['year'];?></th>
                        <td><?php echo $vehicle['make'];?></td>
                        <td><?php echo $vehicle['vehicleName'];?></td>
                        <td><?php echo $vehicle['type'];?></td>
                        <td><?php echo $vehicle['class'];?></td>
                        <td><?php echo $vehicle['price'];?></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="vehicleID" value="<?php echo $vehicle['vehicleID'] ?>">
                                <input type="button" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                            
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>    
        </div>
       

<?php include 'footer.php'?>