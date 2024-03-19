<?php
    require "database.php";
    $id = 1;
    if(!empty($_POST))
    {
        $id = checkInput($_POST["id"]);
    }
    // $db = Database::connect();
    // $statement = $db->query("SELECT COUNT(*) FROM filleul");
    // $taille = $statement->fetch();
    // $max = $taille[0];
    // Database::disconnect();

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
    <title>PARRAINER : PARRAINAGE</title>
</head>
<body>
<div class="containeur">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">ENSPD</span>
                    </a>
                </li>
                <li>
                    <a href="admin_ident.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Administration</span>
                    </a>
                </li>
                <li>
                    <a href="view_ident.php">
                        <span class="icon"><ion-icon name="eye-outline"></ion-icon></span>
                        <span class="title">TOUT VOIR</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
                        <span class="title">S'enregistrer</span>
                    </a>
                </li>
                <li>
                    <a href="parrainage_ident.php">
                        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                        <span class="title">PARRAINER</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="search">
            <label>
                <h4>ENSPD : PARRAINAGE 20223/2024</h4>
            </label>
        </div>
        <div class="user">
            <img src="images/icon (2).jpg" alt="hitman">
        </div>
    </div>
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Parrains </h2>
            </div>
    
            <table>
                <tbody>
                    <tr><td></td>
                        <td>Filière : Ingénieurs</td>
                    </tr>
                    <tr style="background-color: white;">
                        <td><a href="le-parrainage/parrainage_ing_1.php" class="lien1">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_ing_1.php" class="lien1">Niveau I & II</a></td>
                        <td><a href="le-parrainage/parrainage_ing_1.php" class="lien1">TCO</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_git.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_git.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_git.php">GIT</a></td>
                    </tr>
                    <tr style="background-color: white;">
                        <td><a href="le-parrainage/parrainage_gesi.php" class="lien1">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_gesi.php" class="lien1">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_gesi.php" class="lien1">GESI</a></td>
                    </tr>
                    <tr style="background-color: white;">
                        <td><a href="le-parrainage/parrainage_civil.php" class="lien1">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_civil.php" class="lien1">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_civil.php" class="lien1">GCI</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_procede.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_procede.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_procede.php">Génie des Procédes</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_mecanique.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_mecanique.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_mecanique.php">Génie Mécanique</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_automeca.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_automeca.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_automeca.php">Génie Auto-mécatronique</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_energetique.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_energetique.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_energetique.php">Génie Energetique</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_physique.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_physique.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_physique.php">Génie Physique</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_marine.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_marine.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_marine.php">Génie Maritime</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_qhse.php">Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_qhse.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_qhse.php">QHSE</a></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td></td>
                        <td>Filières : Sciences de l'ingénieur</td>
                    <tr style="background-color: white;">
                        <td><a href="le-parrainage/parrainer.php" class="lien1">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainer.php" class="lien1">Niveau I & II</a></td>
                        <td><a href="le-parrainage/parrainer.php" class="lien1">TCO</a></td>
                    </tr>
                    <tr style="background-color: white;">
                        <td><a href="le-parrainage/parrainage_eeat.php" class="lien1">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_eeat.php" class="lien1">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_eeat.php" class="lien1">EEAT</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_sdia.php">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_sdia.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_sdia.php">SDIA</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_chimie.php">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_chimie.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_chimie.php">Chimie appliquée</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_energie.php">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_energie.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_energie.php">Energie</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_mm.php">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_mm.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_mm.php">Mécanique et matériaux</a></td>
                    </tr>
                    <tr>
                        <td><a href="le-parrainage/parrainage_geophy.php">SCI-Ingénieurs</a></td>
                        <td><a href="le-parrainage/parrainage_geophy.php">Niveau III & IV</a></td>
                        <td><a href="le-parrainage/parrainage_geophyphp">Géophysique</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
   <script src="js/script.js"></script>
   <script type="module"p src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htts://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
</body>
</html>