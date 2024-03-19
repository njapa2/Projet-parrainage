<?php
    require "database.php";
    $db = Database::connect();

    /* Filleul Nombre */
    $statement = $db->query("SELECT COUNT(*) FROM filleul");
    $taille = $statement->fetch();
    $maxFilleul = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_ing_1");
    $taille = $statement->fetch();
    $maxFilleul_ing_1 = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_eeat");
    $taille = $statement->fetch();
    $maxFilleul_eeat = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_mm");
    $taille = $statement->fetch();
    $maxFilleul_mm = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_sdia");
    $taille = $statement->fetch();
    $maxFilleul_sdia = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_chimie");
    $taille = $statement->fetch();
    $maxFilleul_chimie = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_energie");
    $taille = $statement->fetch();
    $maxFilleul_energie = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_geophy");
    $taille = $statement->fetch();
    $maxFilleul_geophy = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_civil");
    $taille = $statement->fetch();
    $maxFilleul_civil = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_git");
    $taille = $statement->fetch();
    $maxFilleul_git = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_gesi");
    $taille = $statement->fetch();
    $maxFilleul_gesi = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_mecanique");
    $taille = $statement->fetch();
    $maxFilleul_mecanique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_automeca");
    $taille = $statement->fetch();
    $maxFilleul_automeca = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_physique");
    $taille = $statement->fetch();
    $maxFilleul_physique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_procede");
    $taille = $statement->fetch();
    $maxFilleul_procede = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_marine");
    $taille = $statement->fetch();
    $maxFilleul_marine = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_energetique");
    $taille = $statement->fetch();
    $maxFilleul_energetique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM filleul_qhse");
    $taille = $statement->fetch();
    $maxFilleul_qhse = $taille[0];
    

    /* parrain nombre */
    $statement = $db->query("SELECT COUNT(*) FROM parrain");
    $taille = $statement->fetch();
    $maxParrain = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_ing_1");
    $taille = $statement->fetch();
    $maxParrain_ing_1 = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_eeat");
    $taille = $statement->fetch();
    $maxParrain_eeat = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_mm");
    $taille = $statement->fetch();
    $maxParrain_mm = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_sdia");
    $taille = $statement->fetch();
    $maxParrain_sdia = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_chimie");
    $taille = $statement->fetch();
    $maxParrain_chimie = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_energie");
    $taille = $statement->fetch();
    $maxParrain_energie = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_geophy");
    $taille = $statement->fetch();
    $maxParrain_geophy = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_civil");
    $taille = $statement->fetch();
    $maxParrain_civil = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_git");
    $taille = $statement->fetch();
    $maxParrain_git = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_gesi");
    $taille = $statement->fetch();
    $maxParrain_gesi = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_mecanique");
    $taille = $statement->fetch();
    $maxParrain_mecanique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_automeca");
    $taille = $statement->fetch();
    $maxParrain_automeca = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_physique");
    $taille = $statement->fetch();
    $maxParrain_physique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_procede");
    $taille = $statement->fetch();
    $maxParrain_procede = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_marine");
    $taille = $statement->fetch();
    $maxParrain_marine = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_energetique");
    $taille = $statement->fetch();
    $maxParrain_energetique = $taille[0];
    $statement = $db->query("SELECT COUNT(*) FROM parrain_qhse");
    $taille = $statement->fetch();
    $maxParrain_qhse = $taille[0];
    Database::disconnect();

    $parrainSciing4 = $maxParrain_chimie + $maxParrain_energie + $maxParrain_geophy + $maxParrain_eeat + $maxParrain_mm + $maxParrain_sdia;
    $filleulSciing3 = $maxFilleul_chimie + $maxFilleul_energie + $maxFilleul_geophy + $maxFilleul_eeat + $maxFilleul_mm + $maxFilleul_sdia;
    $parrainIng4 = $maxParrain_automeca + $maxParrain_civil + $maxParrain_git + $maxParrain_gesi + $maxParrain_procede + $maxParrain_energetique + $maxParrain_marine + $maxParrain_mecanique + $maxParrain_physique + $maxParrain_qhse;
    $filleulIng3 = $maxFilleul_automeca + $maxFilleul_civil + $maxFilleul_git + $maxFilleul_gesi + $maxFilleul_procede + $maxFilleul_energetique + $maxFilleul_marine + $maxFilleul_mecanique + $maxFilleul_physique + $maxFilleul_qhse;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===========CSS============= -->
    <link rel="stylesheet" href="css/style.css">
    <title>Mon Dashboard</title>
</head>
<body>
    <!-- NAVIGUATION -->
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

    <!-- ================== MAIN =================== -->
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
        <!-- ======================== CARDS ======================== -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $maxParrain_ing_1; ?></div>
                    <div class="cardName">Parrains : ING II</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $maxFilleul_ing_1; ?></div>
                    <div class="cardName">Filleuls : ING I</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $maxParrain; ?></div>
                    <div class="cardName">Parrains : SCI-ING II</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $maxFilleul; ?></div>
                    <div class="cardName">Filleuls : SCI-ING I</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $parrainIng4; ?></div>
                    <div class="cardName">Parrains : ING IV</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $filleulIng3; ?></div>
                    <div class="cardName">Filleuls : ING III</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $parrainSciing4; ?></div>
                    <div class="cardName">Parrains :SCI-ING IV</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $filleulSciing3; ?></div>
                    <div class="cardName">Filleuls : SCI-ING III</div>
                </div>
                <div class="iconBox">
                    <ion-icon name="people-outline"></ion-icon>
                </div>
            </div>
        </div>
            <!-- =================== ORDER DETAILS LIST=========== -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>INGENIEURS : RECENTS</h2>
                        <a href="view.php" class="btn">Tout voir</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Niveau</td>
                                <td>Filière</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_ing_1 WHERE id = ?");
                            $statement->execute(array($maxParrain_ing_1));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>II</td>
                                        <td>TCO</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_ing_1 WHERE id = ?");
                            $statement->execute(array($maxFilleul_ing_1));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>I</td>
                                        <td>TCO</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>  
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_git WHERE id = ?");
                            $statement->execute(array($maxParrain_git));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>GIT</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_git WHERE id = ?");
                            $statement->execute(array($maxFilleul_git));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>GIT</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_gesi WHERE id = ?");
                            $statement->execute(array($maxParrain));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>GESI</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_gesi WHERE id = ?");
                            $statement->execute(array($maxFilleul_gesi));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>GESI</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_qhse WHERE id = ?");
                            $statement->execute(array($maxParrain_qhse));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>QHSE</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_qhse WHERE id = ?");
                            $statement->execute(array($maxFilleul_qhse));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>QHSE</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_civil WHERE id = ?");
                            $statement->execute(array($maxParrain_civil));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>GCI</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_civil WHERE id = ?");
                            $statement->execute(array($maxFilleul_civil));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>GCI</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_mecanique WHERE id = ?");
                            $statement->execute(array($maxParrain_mecanique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Génie Mécanique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_mecanique WHERE id = ?");
                            $statement->execute(array($maxFilleul_mecanique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Génie Mécanique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_automeca WHERE id = ?");
                            $statement->execute(array($maxParrain_automeca));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Automobile et Mécatronique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_automeca WHERE id = ?");
                            $statement->execute(array($maxFilleul_automeca));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Automobile et Mécatronique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_energetique WHERE id = ?");
                            $statement->execute(array($maxParrain_energetique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Energétique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_energetique WHERE id = ?");
                            $statement->execute(array($maxFilleul_energetique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Energétique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_marine WHERE id = ?");
                            $statement->execute(array($maxParrain));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Génie Maritime et Portuaire</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_marine WHERE id = ?");
                            $statement->execute(array($maxFilleul));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Génie Maritime et Portuaire</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_procede WHERE id = ?");
                            $statement->execute(array($maxParrain_procede));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Génie des Procédés</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_procede WHERE id = ?");
                            $statement->execute(array($maxFilleul_procede));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Génie des Procédés</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_physique WHERE id = ?");
                            $statement->execute(array($maxParrain_physique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Génie Physique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_physique WHERE id = ?");
                            $statement->execute(array($maxFilleul_physique));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Génie Physique</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- =================== NEW CUSTOMERS ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>SCI-INGENIEURS: RECENTS</h2>
                        <a href="view.php" class="btn">Tout voir</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Nom</td>
                                <td>Prenom</td>
                                <td>Niveau</td>
                                <td>Filière</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain WHERE id = ?");
                            $statement->execute(array($maxParrain));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>II</td>
                                        <td>TCO</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul WHERE id = ?");
                            $statement->execute(array($maxFilleul));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>I</td>
                                        <td>TCO</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_eeat WHERE id = ?");
                            $statement->execute(array($maxParrain_eeat));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>EEAT</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_eeat WHERE id = ?");
                            $statement->execute(array($maxFilleul_eeat));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>EEAT</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_sdia WHERE id = ?");
                            $statement->execute(array($maxParrain_sdia));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>SDIA</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_sdia WHERE id = ?");
                            $statement->execute(array($maxFilleul_sdia));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>SDIA</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_mm WHERE id = ?");
                            $statement->execute(array($maxParrain_mm));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Mécanique et Matériaux</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_mm WHERE id = ?");
                            $statement->execute(array($maxFilleul_mm));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Mécanique et Matériaux</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_chimie WHERE id = ?");
                            $statement->execute(array($maxParrain_chimie));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Chimie</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_chimie WHERE id = ?");
                            $statement->execute(array($maxFilleul_chimie));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Chimie</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_energie WHERE id = ?");
                            $statement->execute(array($maxParrain_energie));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Energie</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_energie WHERE id = ?");
                            $statement->execute(array($maxFilleul_energie));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Energie</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM parrain_geophy WHERE id = ?");
                            $statement->execute(array($maxParrain_geophy));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>IV</td>
                                        <td>Géophysique, Eau et Environnement</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        <?php
                            $db = Database::connect();
                            $statement = $db->prepare("SELECT * FROM filleul_geophy WHERE id = ?");
                            $statement->execute(array($maxFilleul_geophy));
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>III</td>
                                        <td>Géophysique, Eau et Environnement</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

    <!-- ===============SCRIPTS=========== -->
    <script src="js/script.js"></script>
    <!-- ===========IONICON============== -->
    <script type="module"p src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="htts://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>