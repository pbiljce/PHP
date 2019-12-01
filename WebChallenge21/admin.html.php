<!DOCTYPE html>
<html lang="en">
<!-- Head: Start -->
    <?php 
        $title = "Privacy Policy - Leno - Mobile App HTML Landing Page Template";
        require 'includes/head.html.php'; 
    ?>
<!-- Head: End -->

<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader: Start -->
    <?php require 'includes/preloader.html.php'; ?>
    <!-- Preloader: End -->    

    <!-- Navigation: Start -->
        <?php 
            $index = "index.php";
            require 'includes/navigation.html.php'; 
        ?>
    <!-- Navigation: End -->

    <!-- Admin panel - Start -->
    <div id="prijava" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Admin panel</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">                 
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="uname" required>
                            <label class="label-control" for="uname">Username</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="pass" required>
                            <label class="label-control" for="pass">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- Admin panel - End -->

    <!-- Footer: Start -->
        <?php require 'includes/footer.html.php' ?>
    <!-- Footer: End -->

    <!-- Copyright: Start -->
        <?php require 'includes/copyright.html.php' ?>
    <!-- Copyright: End -->
	
    <!-- Scripts: Start -->
        <?php require 'includes/scripts.html.php' ?>
    <!-- Scripts: End --> 
    
</body>
</html>