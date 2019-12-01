<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.svg" alt="alternative"></a> 
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->
    <?php 
        $users = 1;
        $administrators = 2;

        $korisnik = 2;
    ?>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo $index; ?>#header">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo $index; ?>#features">FEATURES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo $index; ?>#preview">PREVIEW</a>
            </li>

            <!-- Dropdown Menu -->          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="<?php echo $index; ?>#details" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">DETAILS</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="terms-conditions.html.php"><span class="item-text">TERMS CONDITIONS</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="privacy-policy.html.php"><span class="item-text">PRIVACY POLICY</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo $index; ?>#contact">CONTACT</a>
            </li>
            <?php
                if($korisnik & $administrators){
            ?>
                <li class="nav-item">
                    <a class="nav-link page-scroll" style="color:red" href="admin.html.php">ADMINISTRATOR</a>
                </li>
            <?php
                }
            ?>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> 