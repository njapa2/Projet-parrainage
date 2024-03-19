<?php
    session_start();
    $_SESSION["username"] = "adminenspd";
    $_SESSION["password"] = "parrainer123";
    $username = $password = "";
    $falsePassword = $falseUsername = "";
    $isSuccess = false;
    if(!empty($_POST))
    {
        $username = valide($_POST["username"]);
        $password = valide($_POST["password"]);
        $isSuccess = true;
        if(empty($password))
        {
            $falsePassword = "<p class='error'>Le mot de passe est requis</p>";
        }
        if(empty($username))
        {
            $falseUsername = "<p class='error'>Le nom utilisateur est requis</p>";
        }
        if(!empty($username) && !empty($password))
        {
            if($username == $_SESSION["username"] && $password == $_SESSION["password"])
            {
                header("location: admin.php");
            }
            if($username == $_SESSION["username"] && $password != $_SESSION["password"])
            {
                $falsePassword = '<p class="error">Le mot de passe est incorrect !</p>';
            }
            if($username != $_SESSION["username"] && $password == $_SESSION["password"])
            {
                $falseUsername = "<p class='error'>Le nom d'utilisateur est incorrect !</p>";
            }
            if($username != $_SESSION["username"] && $password != $_SESSION["password"])
            {
                $falseUsername = "<p class='error'>Le nom d'utilisateur est incorrect !</p>";
                $falsePassword = '<p class="error">Le mot de passe est incorrect !</p>';
            } 
        }
    }
    function valide($data)
    {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="css/ident.css">
    <title>Identification</title>
</head>
<body>
    <div class="container">
        <form action="admin_ident.php" class="form" role="form" method = "post">
            <h2>ADMINISTRATION</h2>
            <?php echo $falsePassword; ?>
            <?php echo $falseUsername; ?>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="username" value="<?php echo $username; ?>">
            </div><br>
            <div class="form-group">
                <label for="password">User Password</label>
                <input type="text" id="password" name="password" class="form-control" placeholder="password" value="<?php echo $password; ?>">
            </div><br>
            <div class="form-actions">
                <button type="submit" class="btn">Login</button>
                <a href="index.php" class="btn btn-warning">RETOUR</a>
            </div>
        </form>
    </div>
</body>
</html>