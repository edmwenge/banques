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
            
       
        <p><form action="../controleurs/client.php" method="post" enctype="multipart/form-data">

        <fieldset><h1 style="text-align:center;">Inserez ici les informations sur le client</h1> 
            <div class="divInputs"> 
            <div class="divInputsI">
            <label for="nom">nom:</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="post_nom"> post-nom:</label><br>
            <input type="text" id="post_nom" name="post_nom" required><br>
            <label for="prenom"> prenom:</label><br>
            <input type="text" id="prenom" name="prenom"><br>
            <label for="mail"> Adresse Mail:</label><br>
            <input type="email" id="mail" name="mail" required><br>
            </div>

            <div class="divInputsII">
            <label for="adresse"> residence:</label><br>
            <input type="text" id="adresse" name="adresse" required><br>
            <label for="num_tel"> numero de telephone:</label><br>
            <input type="tel" id="num_tel"name="num_tel" required><br>
            <label for="photo">identifiant du client(photo):</label><br>
            <input type="file" name="photo" id="photo" required><br>
            <label for="numero_compte"> numero-compte:</label><br>
            <input type="number" name="numero_compte" id="numero_compte" required><br>
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