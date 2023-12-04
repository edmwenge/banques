
<?php
    include '../configuration/config.php';
    include '../models/user.php';    


   $mail =$_POST['mail'];
    $pass = $_POST['pass'];
    $date_enregistrement =date('y-m-d');

// Vérifier que les mots de passe correspondent
$pass_hache = sha1($pass);
$user=new user($mail,$pass_hache,$date_enregistrement);

    // Rediriger l'utilisateur vers une page de confirmation d'enregistrement
    if ($user->cree_user())
    {
        global $bdd;

        $req=$bdd->prepare('SELECT id_user from user where pass=:pass');
        $exec=$req->execute(array(':pass'=>$user->get_pass()));

           
       
// if ($exec) 
// {
//     if ($id=$req->fetch()) 
//     {   
//         if (isset($_POST['pass']) AND $_POST['pass'] =="ed25") // Si le mot de passe est bon
//         {
//                                    }
//         }  
//     }

}
    else 
{
    // Les mots de passe ne correspondent pas, afficher une erreur
    // echo "Les mots de passe ne correspondent pas";
    header('location:../vues/accueil.php'); 
}

?>