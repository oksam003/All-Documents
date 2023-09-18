<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/small.css">
    <link rel="stylesheet" media="screen" href="/phpmotors/css/large.css">

    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <title>PHP Motors Login</title>

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
        <div class="sign-in">
          <h1>Sign In</h1>
            <?php 
              if (isset($message)) {
               echo $message;
             }
           ?> 

            <form action="/phpmotors/accounts/" method="post">
              <label>Email</label><br>
              <input required type="email" name="clientEmail" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> ><br>
              <label>Password</label><br>
              <span>(Must be at least 8 characters and have 1 uppercase letter number and special character.)</span><br>
              <input required type="password" name="clientPassword" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br>
              <button type="submit">Sign In</button>
              <input type="hidden" name="action" value="loginuser">

            </form>
            <a href="/phpmotors/accounts/index.php/?action=registration">Not a member yet?</a>

        </div>
        
       
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/common/footer.php'; ?>
    </footer>
    </div>
</body>
</html>