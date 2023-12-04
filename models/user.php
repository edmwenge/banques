 <?php
class user
{
    private $mail;
    private $pass;
    private $date_enregistrement;
    public function __construct($mail,$pass,$date_enregistrement)
    {
       $this->mail=$mail;
       $this->pass=$pass;
       $this->date_enregistrement=$date_enregistrement; 
    }

    public function cree_user()
    {
        global $bdd;
        $mail=$this->mail;
        $pass=$this->pass;
        $date_enregistrement=$this->date_enregistrement; 
        
        $req = $bdd->prepare('INSERT INTO user(mail,pass,date_enregistrement) values(?,?,?)');
        $req->execute(array($mail,$pass,$date_enregistrement));
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
        
    
         public function getMail()
            {
                return $this->mail;
            }
        public function get_pass()
            {
            return $this->pass;
            } 
         public function getDate_enregistrement()
            {
                return $this->date_enregistrement;
            } 
        
}
?>
