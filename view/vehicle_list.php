<?php include 'header.php'?>
    <!-- Radio button div -->
    <div class="div-container">
                <div class="btn-class btn-group btn-group-sm" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-secondary" for="btnradio1">Sort By Price</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btnradio2">Sort By Year</label>  
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> 
                </div>
                
        </div>

        <!-- drop-down container -->
        <div class="dropDown-container">
                <!-- makes container -->
                <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                View All Makes
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                </div>

                <!-- Types container -->
                <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    View All Types
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                </div>

                <!-- Classes container -->
                <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                View All Classes
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                </div>
            </div>
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