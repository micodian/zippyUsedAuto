<?php include 'header.php'?>
    <!-- Radio button div -->
    <div class="div-container">
        
                
                
        </div>

        <!-- drop-down container -->
        <div class="dropDown-container">
        <form action="." method="get">
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
                <select name="class_id" id="" class="dropDown_selector text-primary">
                    <option value="">View All Classes</option>
                    <?php foreach ($classes as $class) : ?>
                        <?php if($class_id == $class['class_id']) {?>
                            <option value="<?= $type['class_id']?>" selected>
                    <?php }else { ?>
                        <option value="<?= $type['class_id']?>">
                    <?php } ?>
                            <?= $class['class'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                
            </div>
            <div class="btn-class btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="sortBy" id="sortBy_price" value="price" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="sortBy_price">Sort By Price</label>

                    <input type="radio" class="btn-check" name="sortBy" id="sortBy_year" value="year" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="sortBy_year">Sort By Year</label>  
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> 
            </div>
          
            </form>
            <!-- Table container -->
        <div class="container">
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
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                    
                </table>
            </div>    
        </div>

<?php include 'footer.php'?>