
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("includes/login.php") ?>
    <div class="login-section grid">
        <div class="left-side flex">
            <div class="logo flex"> 
               <!-- <div class="logo-img"><img src="./img/lo" alt=""></div> -->
               <span class="medinfo flex"><h1><br>BANK OF PAPEL</h1></span> 
            </div>
            <div class="text-side ">
                <span class="title-login">Money ?</span> <br><br>
                La banque n'as pas d'argent. la banque a les gens
            </div>
            
        </div>
        <div class="login flex">
            <form action="controleurs/user.php" method="post">
                <fieldset>
                    <br>
                    <legend>Log In</legend>

                    <p> vous etes agent? remplissez ces champs svp<br><br>
                    <div class="divInputs">
                        <div class="divInputsI">
                            <label for="mail">Votre Adresse Mail:</label><br>
                            <input type="email" id="mail" name="mail" required><br>
                            <label for="pass">mot de pass utilisateur:</label><br>
                            <input type="password" name="pass" id="pass" required><br>
                        </div>
                    </div>
                    </p>
                    <div class="login-button"><button type="submit">Log In</button> </div>
                 </fieldset>                
           </form>
        </div>
    </div>
</body>
</html>