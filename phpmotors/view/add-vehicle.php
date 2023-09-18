<?php
//redirect if not logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === FALSE) {
    header('Location: /phpmotors');
}

//create the select list
$classificationList = '<select name="classificationId" id="classificationId">';
foreach ($classifications as $classification) {
    $classificationList .= "<option value='$classification[classificationId]'";
    if(isset($classificationId)) {
        if($classification['classificationId'] === $classificationId) {
            $classificatonList .= ' selected ';
        }
    }
    $classificationList .= ">$classification[classificationName]</option>";
}
$classificationList .= "</select>";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Vehicle| PHP Motors</title>
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

    <h1>Add Vehicle</h1>
    <?php
                if (isset($message)) {
                    echo $message;
                }
            ?>

    <h2>*Note all Fields are Required</h2>
    <form method="post" action="/phpmotors/vehicles/index.php">            

            <?php echo $selectList; ?><br><br>
        
            <label>Make</label><br>
            <input required type="text" name="invMake" id="invMake" <?php if(isset($invMake)){echo "value='$invMake'";}  ?> ><br>
            <label>Model</label><br>
            <input required type="text" name="invModel" id="invModel" <?php if(isset($invModel)){echo "value='$invModel'";}  ?> ><br>
            <label>Description</label><br>
            <textarea required name="invDescription" id="invDescription"><?php if(isset($invDescription)){echo $invDescription;}?></textarea><br>
            <label>Image Path</label><br>        
            <input required type="text" name="invImage" value="C:\xampp\htdocs\phpmotors\images\no-image.png" id="invImage" <?php if(isset($invImage)){echo "value='$invImage'";}  ?> ><br>
            <label>Thumbnail Path</label><br>
            <input required type="text" name="invThumbnail" value="C:\xampp\htdocs\phpmotors\images\no-image.png" id="invThumbnail" <?php if(isset($invThumbnail)){echo "value='$invThumbnail'";}  ?> ><br>
            <label>Price</label><br>        
            <input required type="text" name="invPrice" id="invPrice" <?php if(isset($invPrice)){echo "value='$invPrice'";}  ?> ><br>
            <label>Quantity in Stock</label><br>
            <input required type="number" name="invStock" id="invStock" <?php if(isset($invStock)){echo "value='$invStock'";}  ?> ><br>
            <label>Color</label><br>        
            <input required type="text" name="invColor" id="invColor" <?php if(isset($invColor)){echo "value='$invColor'";}  ?> ><br>

        <input type="submit" name="submit" id="regbtn" value="Add Vehicle">
        <input type="hidden" name="action" value="addvehicle">
    </form>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/common/footer.php'; ?>