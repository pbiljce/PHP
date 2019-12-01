<div id="features" class="tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>FEATURES</h2>
                <div class="p-heading p-large">Leno was designed based on input from personal development coaches and popular trainers so it offers all</div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">

            <!-- Tabs Links -->
            <ul class="nav nav-tabs" id="lenoTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog"></i>CONFIGURING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>TRACKING</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>MONITORING</a>
                </li>
            </ul>
            <!-- end of tabs links -->

            <!-- Tabs Content-->
            <div class="tab-content" id="lenoTabsContent">
                
                <!-- Configuring: Start -->
                    <?php require 'featuresConfiguring.html.php'; ?>
                <!-- Configuring: End --> 

                <!-- Tracking: Start -->
                    <?php require 'featuresTracking.html.php'; ?>
                <!-- Tracking: End --> 

                <!-- Monitoring: Start -->
                <?php require 'featuresMonitoring.html.php'; ?>
                <!-- Monitoring: End --> 

            </div> <!-- end of tab-content -->
            <!-- end of tabs content -->

        </div> <!-- end of row --> 
    </div> <!-- end of container --> 
</div> <!-- end of tabs -->