<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <title>PHP Motors Homepage</title>

</head>
<body>
    <div id="wrapper"> 
    <header>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/header.php'; ?>
    </header>
    
    <nav>
        <?php echo $navList; ?>
    </nav>


    <main>
        <header>
            <h1>Welcome to PHP Motors!</h1>
            <div id="aboutCar">
                <h3>DMC Delorean</h3>
                
                <p>3 Cup holders</p>
                <p>Superman doors</p>  
                <p>Fuzzy dice!</p>
                <img src="/phpmotors/images/delorean.jpg" alt="Delorean">
                <button type="button">Own Today</button>
            
            </div>
        </header>
        <div id="base">
            <div id="col1">
                <h3>Delorean Upgrades</h3>
                    <div id="minigrid">
                    <div class="upgrades">
                        <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux capacitor">
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="upgrades">
                        <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flames">
                        <a href="#">Flame Decals</a>

                    </div>
                    <div class="upgrades">
                        <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper sticker">
                        <a href="#">Bumper Sticker</a>

                    </div>
                    <div class="upgrades">
                        <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Cap">
                        <a href="#">Hub Caps</a>

                    </div>
                </div>
            </div>
            <div id="col2">
                <h3>DMC Delorean Reviews</h3>
                <ul>
                    <li>"So fast it's almost like traveling in time." (4/5)</li>
                    <li>"Coolest ride on the road." (4/5)</li>
                    <li>"I'm feeling Marty McFly!" (5/5)</li>
                    <li>"The most futuristic ride of our day." (4.5/5)</li>
                    <li>"80s livin and I love it!" (5/5)</li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php'; ?>
    </footer>
    </div>
</body>
</html>