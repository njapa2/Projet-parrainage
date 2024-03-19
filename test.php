<?php
    require "database.php";
    $id = 1;
    if(!empty($_POST))
    {
        $id = checkInput($_POST["id"]);
    }
    $db = Database::connect();
    $statement = $db->query("SELECT COUNT(*) FROM filleul");
    $taille = $statement->fetch();
    $max = $taille[0];
    Database::disconnect();

function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
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
    <link rel="stylesheet" href="css/parrainage.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ACCUEIL : PARRAINAGE</title>
</head>
<body>
<div class="containeur">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                        <span class="title">ENSPD</span>
                    </a>
                </li>
                <li>
                    <a href="admin.html">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Administration</span>
                    </a>
                </li>
                <li>
                    <a href="view.html">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">TOUT VOIR</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">S'enregistrer</span>
                    </a>
                </li>
                <li>
                    <a href="parrainage.php">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">PARRAINER</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<section id="parrainage">
    <div class="main">
    <div class="container">
    <div class="row">
        <!-- <div class="col-md-4" style="background: transparent;"></div> -->
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="slides">
                    <?php 
                        $db = Database::connect();
                        $statement = $db->prepare("SELECT * FROM filleul WHERE id = ? ");
                        $statement->execute(array($id));
                        $filleul = $statement->fetch();
                        $nomFilleul = $filleul["nom"];
                        $prenomFilleul = $filleul["prenom"];
                        $emailFilleul = $filleul["Email"];
                        $imageFilleul = $filleul["image"];
                        $numeroFilleul = $filleul["numero"];
                        $numParrain = $filleul["numero_parrain"];
                        $statements = $db->prepare("SELECT * FROM parrain WHERE id = ?");
                        $statements->execute(array($numParrain));
                        $parrain = $statements->fetch();
                        $nomParrain = $parrain["nom"];
                        $prenomParrain = $parrain["prenom"];
                        $emailParrain = $parrain["Email"];
                        $numeroParrain = $parrain["numero"];
                        $imageParrain = $parrain["image"];
                        Database::disconnect();
                        $headers = "Message adressé à : {$nomFilleul} {$prenomFilleul}";
                        $emailText = "Nom de votre parrain : {$nomParrain} \n Prenom de votre Parrain : {$prenomParrain} \n E-mail de votre parrain : {$emailParrain} \n Numéro de votre parrain : {$numeroParrain} \n";
                        mail($emailFilleul, "Un message concernant le parrainage", $emailText, $headers);
                        $headers = "Message adressé à : {$nomParrain} {$prenomParrain}";
                        $emailText = "Nom d'un de vos filleuls : {$nomFilleul} \n Prenom de ce filleul : {$prenomFilleul} \n E-mail du filleul : {$emailFilleul} \n Numéro du filleul : {$numeroFilleul} \n";
                        mail($emailParrain, "Un message concernant le parrainage", $emailText, $headers);
                    ?>
                    <div class="slide special">
                        <img src="images/images-parrains/<?php echo $imageParrain; ?>" alt="...">
                    </div>
                    <?php
                        for($i = 1; $i <= 30; $i++)
                        {
                            $isSuccess = false;
                            while($isSuccess == false)
                            {
                                $db = Database::connect();
                                $statement = $db->query("SELECT image FROM parrain WHERE id = ROUND(RAND()*((SELECT COUNT(*) FROM parrain)-1))+1");
                                $parrain = $statement->fetch();
                                if($parrain == false)
                                {
                                    $isSuccess = false;
                                }
                                else
                                {
                                    $isSuccess = true;
                                }
                            }
                            $image = $parrain["image"];
                            Database::disconnect();
                            echo '<div class="slide">
                                    <img src="images/images-parrains/'.$image.'" alt="...">
                            </div>';
                        }
                        ?>
                        <div class="slide special">
                            <img src="images/images-parrains/<?php echo $imageParrain; ?>" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 info">
                <div class="form-group">
                    <label for="nom">Nom du parrain : <?php echo $nomParrain; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Prenom du parrain : <?php echo $prenomParrain; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Email du parrain : <?php echo $emailParrain; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Numero du parrain : <?php echo $numeroParrain; ?></label>
                </div>
            </div>
            <div class="col-md-3 info">
                <div class="form-group">
                    <label for="nom">Nom du filleul : <?php echo $nomFilleul; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Prenom du filleul : <?php echo $prenomFilleul; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Email du filleul : <?php echo $emailFilleul; ?></label>
                </div>
                <div class="form-group">
                    <label for="nom">Numero du filleul : <?php echo $numeroFilleul; ?></label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <div class="slides">
                        <div class="slide special">
                            <img src="images/images-filleuls/<?php echo $imageFilleul; ?>" alt="...">
                        </div>
                        <?php
                            for($i = 1; $i <= 30; $i++)
                            {
                                $isSuccess = false;
                                while($isSuccess == false)
                                {
                                    $db = Database::connect();
                                    $statement = $db->query("SELECT image FROM filleul WHERE id = ROUND(RAND()*((SELECT COUNT(*) FROM filleul)-1))+1");
                                    $filleul = $statement->fetch();
                                    if($filleul == false)
                                    {
                                        $isSuccess = false;
                                    }
                                    else
                                    {
                                        $isSuccess = true;
                                    }
                                }
                                $image = $filleul["image"];
                                Database::disconnect();
                                echo '<div class="slide">
                                        <img src="images/images-filleuls/'.$image.'" alt="...">
                                    </div>';
                            }
                        ?>
                        <div class="slide special">
                            <img src="images/images-filleuls/<?php echo $imageFilleul; ?>" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <form action="<?php if ($id < $max) echo 'index.php'; ?>" method="post" id="form-parrainage" class="form">
                    <input type="hidden" name="id" value="<?php echo $id+1; ?>">
                    <?php if ($id < $max) echo '<button type="submit" class="btn btn-default" role="button">PARRAINER</button>' ?>
                    <?php if ($id == $max)
                            {
                                echo '<p>Fin du parrainage des sciences de l ingénieur niveau I</p>'; 
                                echo '<a href="accueil.php" class="btn btn-primary">Retour</a>';
                            }
                    ?>
                </form>
            </div>
        </div>
  </div>
    </div>
</section>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
</body>
</html>