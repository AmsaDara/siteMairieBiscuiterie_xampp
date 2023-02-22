<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <title>Maire Biscuterie</title>
</head>
<body>

<?php
    $serveur = "localhost"; $dbname = "biscuiterie"; $user = "root"; $pass = "";
    
     $prenom = valid_donnees($_POST["prenom"]);
     $nom = valid_donnees($_POST["nom"]);
     $email = valid_donnees($_POST["email"]);
     $date = valid_donnees($_POST["date"]);
     $numero= valid_donnees($_POST["nombre"]);
     $adresse = valid_donnees($_POST["adresse"]);
    
    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }
    
    /*Si les champs prenom et mail ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
    if (!empty($prenom)
        && strlen($prenom) <= 20
        && preg_match("^[A-Za-z '-]+$^",$prenom)
        && !empty($email)
        && filter_var($email, FILTER_VALIDATE_EMAIL)){
    
        try{
            //On se connecte à la BDD
            $dbco = new PDO("mysql:host=localhost;dbname=biscuiterie",'root','');
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO etatcivil(prenom, nom, email, date, numero, adresse)
                VALUES(:prenom, :nom, :email, :date, :nombre, :adresse)");
            $sth->bindParam(':prenom',$prenom);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':email',$email);
            $sth->bindParam(':date',$date);
            $sth->bindParam(':nombre',$numero);
            $sth->bindParam(':adresse',$adresse);
            
            $sth->execute();
            //On renvoie l'utilisateur vers la page de remerciement
            
            header("Location:alldemarche");
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }else{
          header("Location:alldemarche");
    }
?>
 

</body>
</html>