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
    $serveur = "localhost"; $dbname = "id15842181_biscuiterie "; $user = "id15842181_root"; $pass = "199MARIAme@@";
    
     $prenom = valid_donnees($_POST["prenom"]);
     $nom = valid_donnees($_POST["nom"]);
     $email = valid_donnees($_POST["email"]);
     $adresse = valid_donnees($_POST["adresse"]);
     $comments= valid_donnees($_POST["comments"]);
    
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
            $dbco = new PDO("mysql:host=localhost;dbname=id15842181_biscuiterie",'id15842181_root','199MARIAme@@');
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //On insère les données reçues
            $sth = $dbco->prepare("
                INSERT INTO contacter(prenom, nom, email, adresse, commentaires)
                VALUES(:prenom, :nom, :email, :adresse, :comments)");
            $sth->bindParam(':prenom',$prenom);
            $sth->bindParam(':nom',$nom);
            $sth->bindParam(':email',$email);
            $sth->bindParam(':adresse',$adresse);
            $sth->bindParam(':comments',$comments);
            
            $sth->execute();
            //On renvoie l'utilisateur vers la page de remerciement
              header("Location:index");
        }
        catch(PDOException $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }else{
          header("Location:contact");
    }
?>
 
<?php include 'templates/footer.php';?>
</body>
</html>