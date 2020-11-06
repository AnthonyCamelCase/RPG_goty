<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <title>Goty all of time</title>
</head>
 
<body>

    <!-- L'en-tête -->
    <?php include("../template/tete.php"); ?>
       
    <!-- Le corps -->
    <div>
    <p>Bienvenue sur le Goty all of time où ça va bastonner sévère...</p>
    </div>

    <?php    
    require('../modele/guerrier.php');
    require('../modele/arme.php');
    $_SESSION["Anto"] = new Guerrier("Anto");
    $_SESSION["Guigui"] = new Guerrier("Guigui");
    $_SESSION["hache"] = new Arme("hache", 2);
    #$_SESSION["Anto"]->AddArme($_SESSION["hache"]);
    ?>
    
    <p><?= $_SESSION["Guigui"]->getNom();?>  démarre l'aventure avec <?= $_SESSION["Guigui"]->getVie();?> points de vie</p> 

    <?php $_SESSION["Anto"]->folie(); ?>
    
    <p>Anto est atteint de folie et attaque en boucle <?= $_SESSION["Guigui"]->getNom();?></p>


    <?php  
    $_SESSION["Anto"]->messageAttaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?>
    <br>
    <?php
    $_SESSION["Anto"]->attaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?>
<br><br>

    <?php
    $_SESSION["Anto"]->messageAttaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?><br>
    <?php
    $_SESSION["Anto"]->attaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?>
<br><br>

    <?php
    $_SESSION["Anto"]->messageAttaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?><br>
    <?php
    $_SESSION["Anto"]->attaquer($_SESSION["hache"],$_SESSION["Guigui"]);
    ?>

    
    
    
    <!-- Le pied de page -->   
    <?php include("../template/pied.php"); ?>

</body>

</html>