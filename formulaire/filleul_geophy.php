<?php
    require "../database.php";
    $filiere = "SCI-ING III : Géophysique, eau et environnement";
    
    $db = Database::connect();
    $statement = $db->query("SELECT COUNT(*) FROM filleul_geophy");
    $taille = $statement->fetch();
    $maxFilleul = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_geophy");
    $taille = $statement->fetch();
    $maxParrain = $taille[0];
    $nbre_max_filleul = ($maxFilleul/$maxParrain)+1;
    $nbre_max = (int)$nbre_max_filleul;
    Database::disconnect();

    $matricule = $nom = $prenom = $emailFilleul = $numero = $image = $matriculeError = $nomError = $prenomError = $emailError = $numeroError = $imageError = "";
    $isSuccess = false;
 if(!empty($_POST))
 {
    $matricule = verification($_POST["matricule"]);
    $nom = verification($_POST["nom"]);
    $prenom = verification($_POST["prenom"]);
    $emailFilleul = verification($_POST["emailFilleul"]);
    $numero = verification($_POST["numero"]);
    $image = verification($_FILES["image"]["name"]);
    $imagePath = '../images/images-filleuls/' . basename($image);
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true;
    $isUploadSuccess = false;
    if(empty($matricule))
    {
        $matriculeError = "Le matricule est obligatoire";
        $isSuccess = false;
    }
    if(empty($nom))
    {
        $nomError = "Veuillez entrer votre nom";
        $isSuccess = false;
    }
    if(empty($prenom))
    {
        $prenomError = "Veuillez entrer votre prénom";
        $isSuccess = false;
    }
    if(!unemail($emailFilleul))
    {
        $emailError = "Adresse E-mail invalide ! Veuillez saisir une adresse E-mail valide";
        $isSuccess = false;
    }
    if(!unnumero($numero))
    {
        $numeroError = "Numéro de téléphone invalide ! Veuillez entrer un numéro valide";
        $isSuccess = false;
    }
    if(empty($image))
    {
        $imageError = "Votre photo est aussi obligatoire";
        $isSuccess = false;
    }
    else
        {
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif")
            {
                $imageError = "les fichiers autorisees sont .jpg, .png, .jpeg, .gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath))
            {
                $imageError = "le fichier existe déjà";
                $isUploadSuccess = false;
            }
            if($_FILES["image"]["size"] > 5000000000)
            {
                $imageError = "la taille de votre photo ne doit pas dépasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess)
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
                {
                    $imageError = "il y'a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                }
            }
        }
    if($isSuccess && $isUploadSuccess)
    {
        $parrainFind = false;
        while ($parrainFind == false)
        {
            $numParrain = rand(1,$maxParrain);
            $db = Database::connect();
            $esssaie = $db->prepare("SELECT * FROM parrain_geophy WHERE id = ?");
            $esssaie->execute(array($numParrain));
            $parrain = $esssaie->fetch();
            $nbre_filleul = $parrain["nbre_filleul"];
            $nomParrain = $parrain["nom"];
            $prenomParrain = $parrain["prenom"];
            $emailParrain = $parrain["Email"];
            $numeroParrain = $parrain["numero"];
            $imageParrain = $parrain["image"];
            Database::disconnect();
            if ($nbre_filleul < $nbre_max)
            $parrainFind = true;
            else
            $parrainFind = false;
        }
        $nbre_filleul += 1;
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO filleul_geophy (matricule,nom,prenom,numero_parrain,image,Email,numero) VALUES (? , ?, ?, ?, ?, ?, ?)");
        $statement->execute(array($matricule,$nom,$prenom,$numParrain,$image,$emailFilleul,$numero));
        $nombre_filleul = $db->prepare("UPDATE parrain_geophy SET nbre_filleul = ? WHERE id = ?");
        $nombre_filleul->execute(array($nbre_filleul,$numParrain));
        Database::disconnect();
        $headers = "Message adressé à : {$nom} {$prenom}";
        $emailText = "Vous avez été enregistré pour le parrainage en {$filiere}, Veuillez patienter jusqu'au 5 décembre, date à laquelle vous connaitrez votre parrain";
        mail($emailFilleul, "Message concernant votre enregistrement pour le parrainage", $emailText, $headers);
        $matricule = $nom = $prenom = $image =$emailFilleul = $numero = "";
    }    
 }

 function verification($data)
 {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
 function unemail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}
function unnumero($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
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
  <link rel="stylesheet" href="../css/form.css">
  <title>FILLEUL : PARRAINAGE</title>
</head>
<body>
    <section id="filleul">
        <div class="container">
        <h2 style="font-size: 25px; text-align: center;">S'ENREGISTRER COMME FILLEUL</h2>
        <h3 style="color: blue; font-size: 10px;text-align: center;margin-top: 0px;">________________________________________________________________________________</h3>
        <br><br><br>
        <p style="font-size: 20px;">Filière <?php echo $filiere; ?></p>
            <div class="row">
                  <form class="form" action="<?php echo 'filleul_geophy.php'; ?>" role="form" id="monform" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="matricule">Matricule : </label>
                            <input type="text" id="matricule" name="matricule" class="form-control" placeholder="Le matricule" value="<?php echo $matricule; ?>">
                            <span class="help-inline"><?php echo $matriculeError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom : </label>
                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" value="<?php echo $nom;?>">
                            <span class="help-inline"><?php echo $nomError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom : </label>
                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" value="<?php echo $prenom; ?>">
                            <span class="help-inline"><?php echo $prenomError; ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="emailFilleul">E-mail : </label>
                            <input type="text" id="emailFilleul" name="emailFilleul" class="form-control" placeholder="Votre E-mail" value="<?php echo $emailFilleul;?>">
                            <span class="help-inline"><?php echo $emailError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="numero">Numéro : </label>
                            <input type="text" id="numero" name="numero" class="form-control" placeholder="Votre numéro" value="<?php echo $numero;?>">
                            <span class="help-inline"><?php echo $numeroError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="image">Image : </label>
                            <input type="file" id="image" name="image" class="form-control" placeholder="Votre photo" value="<?php echo $image; ?>">
                            <span class="help-inline"><?php echo $imageError; ?></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?php if($isSuccess && $isUploadSuccess) echo "<p style='color: green;'>Vous avez été enregistré avec succès dans votre filière</p>"; ?>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-add"></span> S'enregistrer</button>
                        <a href="../index.php" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> RETOUR </a>
                    </div>
                   </form>
                </div>
        </div>
    </section>



<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../jquery.min.js"></script>
</body>
</html>