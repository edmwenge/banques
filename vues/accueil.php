
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../in.css">
    
    <?php  include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?></head><body>
    <div class="app-content main">
       <div class='scroll' >
            <p style="text-align: center; top:20px;">
                    Bienvenue dans <strong>BANK OF PAPEL</strong>.
            <br><br><br>
                <l1>QUE VOULEZ VOUS FAIRE?</L1>

                <li style="text-align: center;">
                    <ul><a href="creation.php">creation d'un compte client</a></ul>
                    <ul><a href="solde.php">verification solde</a></ul>
                    <ul><a href="depot.php">depot d'argent</a></ul>
                    <ul><a href="retrait.php">retrait d'argent </a></ul>
                    <ul><a href="fermer.php">fermer compte client</a></ul>
                    <ul><a href="quitter.php">quitter</a></ul>
                </li>
            </p>
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>