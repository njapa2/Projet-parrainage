<?php
    require "../database.php";
    $filiere = "SCI-ING SDIA : Sciences des données et intelligence artificielle";
    $db = Database::connect();
    $statement = $db->query("SELECT COUNT(*) FROM filleul_sdia");
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../jquery.min.js"></script>
    <link rel="stylesheet" href="../css/parrainage.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ACCUEIL : PARRAINAGE</title>
</head>
<body>
<section id="parrainage">
<div class="container">
    <div class="text-center">
        <h1 style="color: #2a2185;">ENSPD Parrainage 2023/2024 </h1>
        <h2 style="color: green;">Filière <?php echo $filiere; ?></h2>
    </div>
    <div class="row">
        <div class="col-md-12 statut"><p>Parrain Filleul</p></div>
        <?php
            for($i = 1; $i <= $max ; $i++)
            {
                echo '<div class="col-sm-6 col-special">';
                echo '      <div class="thumbnail">';
                echo '          <div class="slides">';
                                    $db = Database::connect();
                                    $statement = $db->prepare("SELECT * FROM filleul_sdia WHERE id = ? ");
                                    $statement->execute(array($i));
                                    $filleul = $statement->fetch();
                                    $nomFilleul = $filleul["nom"];
                                    $prenomFilleul = $filleul["prenom"];
                                    $emailFilleul = $filleul["Email"];
                                    $imageFilleul = $filleul["image"];
                                    $numeroFilleul = $filleul["numero"];
                                    $numParrain = $filleul["numero_parrain"];
                                    $statements = $db->prepare("SELECT * FROM parrain_sdia WHERE id = ?");
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
                                echo '<div class="slide special">
                                            <img src="../images/images-parrains/'.$imageParrain.'" alt="...">
                                            <div class="inf">'.$nomParrain.' '.$prenomParrain.'</div>
                                        </div>';
                                        for($j = 1; $j <= 30; $j++)
                                        {
                                            $isSuccess = false;
                                            while($isSuccess == false)
                                            {
                                                $db = Database::connect();
                                                $statement = $db->query("SELECT image FROM parrain_sdia WHERE id = ROUND(RAND()*((SELECT COUNT(*) FROM parrain_sdia)-1))+1");
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
                                                    <img src="../images/images-parrains/'.$image.'" alt="...">
                                            </div>';
                                        }
                                        echo '<div class="slide special">
                                                <img src="../images/images-parrains/'.$imageParrain.'" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                // echo '<div class="col-md-3 info">
                                //         <div class="form-group">
                                //             <label for="nom">Nom du parrain : '.$nomParrain.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Prenom du parrain :  '.$prenomParrain.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Email du parrain : '.$emailParrain.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Numero du parrain : '.$numeroParrain.'</label>
                                //         </div>
                                //     </div>
                                //     <div class="col-md-3 info">
                                //         <div class="form-group">
                                //             <label for="nom">Nom du filleul : '.$nomFilleul.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Prenom du filleul :  '.$prenomFilleul.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Email du filleul : '.$emailFilleul.'</label>
                                //         </div>
                                //         <div class="form-group">
                                //             <label for="nom">Numero du filleul : '.$numeroFilleul.'</label>
                                //         </div>
                                //     </div>';
                                echo '<div class="col-sm-6">
                                        <div class="thumbnail">
                                            <div class="slides">
                                                <div class="slide special">
                                                    <img src="../images/images-filleuls/'.$imageFilleul.'" alt="...">
                                                    <div class="inf2">'.$nomFilleul.' '.$prenomFilleul.'</div>
                                                </div>';
                                                for($j = 1; $j <= 30; $j++)
                                                {
                                                    $isSuccess = false;
                                                    while($isSuccess == false)
                                                    {
                                                        $db = Database::connect();
                                                        $statement = $db->query("SELECT image FROM filleul_sdia WHERE id = ROUND(RAND()*((SELECT COUNT(*) FROM filleul_sdia)-1))+1");
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
                                                            <img src="../images/images-filleuls/'.$image.'" alt="...">
                                                        </div>';
                                                }
                                    echo '<div class="slide special">
                                            <img src="../images/images-filleuls/'.$imageFilleul.'" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                                            
            }
        ?>
        <div class="col-md-12">
            <a href="../parrainage.php" class="btn btn-primary">Retour aux filiéres</a>
        </div>
    </div>
</div>
</section>
   <script src="../js/script.js"></script>
   <script type="module"p src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htts://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../jquery.min.js"></script>
</body>
</html>