    <?php include('head.php'); ?>

    <title>Popular Items</title>
    
    </head>
    <body>
        
    <!-- BODY for INDEx page starts HERE -->

        <?php include('navbar.php'); ?>
        
        <!-- CAROUSEL -->
        <div id="demo" class="carousel slide container" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/toshis_karai-ramen.jpg" alt="Karai Romen" width="1100" height="500" class="d-block w-100"> 
            <div class="carousel-caption">
                <h3>Karai Romin</h3>
                <p></p>
            </div>   
            </div>
            <div class="carousel-item">
                <img src="img/toshis_tokyo-wing.jpg" alt="Tokyo Wings" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Tokyo Wings</h3>
                <p></p>
            </div>   
            </div>
            <div class="carousel-item">
                <img src="img/toshis_vege-ramen.jpg" alt="Vegi Romen" width="1100" height="500">
            <div class="carousel-caption">
                <h3>Vegi Romen</h3>
                <p></p>
            </div>   
            </div>
        </div>

        <!-- PREV OR NEXT -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
            </div>
        </div>
    
        <?php include('yelp.php'); ?>
        <?php include('locations.php') ?>
    
    <!-- FOOTER goes HERE -->
    <?php include('footer.php'); ?>
    
        