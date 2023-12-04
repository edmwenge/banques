
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/accueil.css">
    <?php include_once("../includes/generalStyles.php");?>
    <?php include_once("../includes/menu.php");?>
</head>
<body>
    <div class="app-content main">
       <div class="scroll">
            
            <?php include('../controleurs/get_parcelle.php');
           if(get_postule_parcelle())
                {?>
                <p>
                <l1>VOS PARCELLES EN VENTE</l1>
                <table>
                    <tr>
                        <td>
                                <?php
                                    $postule=get_postule_parcelle();
                                    for ($i=0; $i <count($postule) ; $i++) 
                                    { 
                                ?>
                                        <?php echo $postule[$i]->get_montant()." $ ";?> 
                                        <button><a href="profil_client.php?id_visiteur=<?php echo $postule[$i]->get_client(); ?>">verifier l'identité du client</a></button>
                                        <button><a href="parcelle_en_vente.php">VALIDER</a> </button>
                        </td> 
                    </tr>
                </table>  </p> 
            <?php }}
             else 
             {
                 echo 'rien de nouveau pour le moment';
             }
            
             ?> 
                        
        </div>
    </div> <?php include_once("../includes/scripts.php");?>
</body>
</html>