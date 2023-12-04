<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="in.css">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php") ;?>
    <?php include_once("../includes/menu.php"); ?>
    <?php include_once("../includes/login.php") ?>
    <div class="app-content main">
       <div class="scroll">
            
       
        <p><form action="../controleurs/compte_client.php" method="post" enctype="multipart/form-data">

        <fieldset><h1 style="text-align:center;">Faire un retrait d'argent en dollars</h1> 
            <div class="divInputs"> 
            <div class="divInputsI">
            <label for="numero_compte"> numero-compte:</label><br>
            <input type="number" name="numero_compte" id="numero_compte" required><br>
            </div>

            <div class="divInputsII">
            <label for="montant"> Montant:</label><br>
            <input type="number" name="montant" id="montant" required><br>
            <input type="submit" value="Envoyer" style="text-align: center;">
            </div>
            </div>
            </fieldset>
        </form>
    </p>     
        </div>
    </div> <?php include_once("../includes/scripts.php")?>
</body>
</html>