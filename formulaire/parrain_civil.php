<?php
    require "../database.php";
    $filiere = "ING IV GCI : Génie Civil";
    
    $matricule = $nom = $prenom = $emailParrain = $numero = $image = $matriculeError = $nomError = $prenomError = $emailError = $numeroError = $imageError = "";
    $isSuccess = false;
 if(!empty($_POST))
 {
    $matricule = $_POST["matricule"];
    $matricule = verification($_POST["matricule"]);
    $nom = verification($_POST["nom"]);
    $prenom = verification($_POST["prenom"]);
    $emailParrain = verification($_POST["emailParrain"]);
    $numero = verification($_POST["numero"]);
    $image = verification($_FILES["image"]["name"]);
    $imagePath = '../images/images-parrains/' . basename($image);
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
    if(!unemail($emailParrain))
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
        $imageError = "votre photo est aussi obligatoire";
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
        $nbre_filleul = 0;
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO parrain_civil (matricule,nom,prenom,nbre_filleul,image,Email,numero) VALUES (? , ?, ?, ?, ?, ?, ?)");
        $statement->execute(array($matricule,$nom,$prenom,$nbre_filleul,$image,$emailParrain,$numero));
        Database::disconnect();
        $headers = "Message adressé à : {$nom} {$prenom}";
        $emailText = "Vous avez été enregistré pour le parrainage en {$filiere}, Veuillez patienter jusqu'au 5 décembre, date à laquelle vous connaitrez votre filleul";
        mail($emailParrain, "Message concernant votre enregistrement pour le parrainage", $emailText, $headers);
        $matricule = $nom = $prenom = $emailParrain = $numero = $image = $matriculeError = $nomError = $prenomError = $emailError = $numeroError = $imageError = "";
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
     return preg_match("/^[0-9 ]+$/", $var);
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
  <title>ENREGISTREMENT : PARRAIN</title>
</head>
<body>
    <section id="formdesti">
        <div class="container">
        <h2 style="font-size: 25px; text-align: center;">S'ENREGISTRER COMME PARRAIN</h2>
        <h3 style="color: blue; font-size: 10px;text-align: center;margin-top: 0px;">________________________________________________________________________________</h3>
        <br><br><br>
        <p style="font-size: 20px;"><span style="color: green;">Filière</span> <?php echo $filiere; ?></p>
            <div class="row">
                  <form class="form" action="<?php echo 'parrain_civil.php'; ?>" role="form" id="monform" method="post" enctype="multipart/form-data">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="matricule">Matricule : </label>
                            <input type="text" id="matricule" name="matricule" class="form-control" placeholder="Votre matricule" value="<?php echo $matricule; ?>">
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
                            <label for="emailParrain">E-mail : </label>
                            <input type="text" id="emailParrain" name="emailParrain" class="form-control" placeholder="Votre E-mail" value="<?php echo $emailParrain;?>">
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