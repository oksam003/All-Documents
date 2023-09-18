<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Management | PHP Motors</title>
    <link href="/phpmotors/css/small.css" type="text/css" rel="stylesheet" media="screen">
    <link href="/phpmotors/css/large.css" type="text/css" rel="stylesheet" media="screen">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="wrapper">
    
    <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/header.php'; ?>
    </header>
    <nav>
        <?php echo $navList; ?>
    </nav>

    <h1>Vehicle Management</h1>

    <ul>
        <li><a href='/phpmotors/vehicles/index.php?action=classification'>Add Classification</a></li>
        <li><a href='/phpmotors/vehicles/index.php?action=vehicle'>Add Vehicle</a></li>
    </ul>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>