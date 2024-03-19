<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>TOUT VOIR</title>
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
                </l>
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
                    <h2>INGENIEURS : NIVEAU II</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            require 'database.php'; 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_ing_1");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS: NIVEAU I</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_ing_1");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS GIT : NIVEAU II</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_git");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS GIT : NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_git");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS GESI : NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_gesi");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS GESI : NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_gesi");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS QHSE : NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_qhse");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS QHSE : NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_qhse");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS GCI : NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_civil");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS GCI : NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_civil");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Mécanique Niveau IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_mecanique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Mécanique Niveau III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_mecanique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Physique Niveau IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_physique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Physique NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_physique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Automobile et Mécatronique NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_automeca");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Automobile et Mécatronique NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_automeca");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Energétique NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_energetique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Energétique NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_energetique");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Procédé NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_procede");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Procédé NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_procede");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>INGENIEURS : Maritime et Portuaire NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_marine");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>INGENIEURS : Maritime et Portuaire NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_marine");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : NIVEAU II</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- =================== NEW CUSTOMERS ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : NIVEAU I</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : EEAT NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_eeat");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS : EEAT NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_eeat");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : SDIA NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_sdia");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS : SDIA NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_sdia");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : Mécanique et Matériaux NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_mm");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS : Mécanique et Matériaux NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_mm");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : Energie NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_energie");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS : Energie NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_energie");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : CHIMIE NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php 
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_chimie");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS : CHIMIE NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_chimie");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
                                    </tr>';
                            }
                            Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>SCI-INGENIEURS : Geéophysique NIVEAU IV</h2>
                </div>
    
                <table>
                    <thead>
                        <!-- <tr>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>Niveau</td>
                            <td>Filière</td>
                        </tr> -->
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM parrain_geophy");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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
                    <h2>SCI-INGENIEURS: NIVEAU III</h2>
                </div>
                
                <table>
                    <thead>
                       
                    </thead>
                    <tbody>
                        <?php
                            $db = Database::connect();
                            $statement = $db->query("SELECT * FROM filleul_geophy");
                            $etudiants = $statement->fetchAll();
                            foreach($etudiants as $etudiant)
                            {
                                echo '<tr>
                                        <td>'.$etudiant["matricule"].'</td>
                                        <td>'.$etudiant["nom"].'</td>
                                        <td>'.$etudiant["prenom"].'</td>
                                        <td>'.$etudiant["numero"].'</td>
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