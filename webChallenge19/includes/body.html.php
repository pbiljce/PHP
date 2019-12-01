<body class="is-preload">
    <div id="wrapper">
        <div id="bg"></div>
        <div id="overlay"></div>
        <div id="main">

            <!-- Header : Start -->
            <?php require 'header.html.php'; ?>
            <!-- Header : End -->

            <!-- Footer : Start -->            
            <?php require 'footer.html.php'; ?>
            <!-- Footer : End -->  
                      
        </div>
    </div>
    <script>
        window.onload = function() { document.body.classList.remove('is-preload'); }
        window.ontouchmove = function() { return false; }
        window.onorientationchange = function() { document.body.scrollTop = 0; }
    </script>
</body>