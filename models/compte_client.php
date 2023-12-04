<?php
class compte_client
{
    private $numero_compte;
    private $montant;
    private $date_enregistrement;
    public function __construct($numero_compte,$montant,$date_enregistrement)
    {
       $this->numero_compte=$numero_compte;
       $this->montant=$montant;
       $this->date_enregistrement=$date_enregistrement; 
    }
    public function cree_solde()
    {
        global $bdd;
        $numero_compte=$this->numero_compte;
        $montant=$this->montant;
        $date_enregistrement=$this->date_enregistrement; 
        
        $req = $bdd->prepare('UPDATE client SET solde+=:montant,date_enregistrement=:date_enregistrement where numero_compte=:numero_comte');
        $req->execute(array('montant'=>$montant,'numero_compte'=>$numero_compte,'date_enregistrement'=>$date_enregistrement));
        //Vérification des erreurs
        if ($req->errorCode() !== '00000') 
        {
            $error = $req->errorInfo();
            echo "Erreur lors de l'exécution de la requête : {$error[2]}";
            die();
        }
        // Affichage de l'ID de la nouvelle ligne insérée
        echo "Nouvelle commande insérée avec l'ID : {$bdd->lastInsertId()}";
            if ($exec=$req->fetch()) 
                {
                    return true;
                }
    }

    // public function cree_solde()
    // {
    //     global $bdd;
    //     $numero_compte=$this->numero_compte;
    //     $solde=$this->solde;
    //     $date_enregistrement=$this->date_enregistrement; 
        
    //     $req = $bdd->prepare('INSERT INTO compte_client(id_client,numero_compte,solde,date_enregistrement) values(?,?,?)');
    //     $req->execute(array($id_client,$numero_compte,$solde,$date_enregistrement));
    //     //Vérification des erreurs
    //     if ($req->errorCode() !== '00000') 
    //     {
    //         $error = $req->errorInfo();
    //         echo "Erreur lors de l'exécution de la requête : {$error[2]}";
    //         die();
    //     }

    //     // Affichage de l'ID de la nouvelle ligne insérée
    //     echo "Nouvelle commande insérée avec l'ID : {$bdd->lastInsertId()}";
    //         if ($exec=$req->fetch()) 
    //             {
    //                 return true;
    //             }
    // }
        
        public function getNumero_compte()
            {
            return $this->numero_compte;
            }
        public function getmontant()
            {
            return $this->montant;
            }
         public function getDate_enregistrement()
            {
                return $this->date_enregistrement;
            } 
        
}
?>
