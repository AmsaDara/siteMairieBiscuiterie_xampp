<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <title>Maire Biscuterie</title>
</head>
<body>
<?php include 'templates/header.php';?>
        
    
    <!-- <p class="returne"><a href="index.php">Retour au file d'actualités</a></p> -->
        <?php
        try {
            //    on se connect à mysql
           $bdd = new PDO('mysql:host=localhost;dbname=biscuiterie;charset=utf8', 'root', '',
                              array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
           } catch (exception $e) {
            //    en cas d'erreur affiche un message est arret tout
               die('Erreur : ' . $e->getMessage());
           }

        // Récupération du billet
        if(isset($_GET['actualite']) AND !empty($_GET['actualite'])) {
            $getid = htmlspecialchars($_GET['actualite']);
        $reponse = $bdd->prepare('SELECT id, titre, descriptions, image, categorie FROM actualites WHERE id = ?');
        $reponse->execute(array($_GET['actualite']));
        $donnees = $reponse->fetch();
        if(isset($_POST['submit'])) {
            if(isset($_POST['nom'],$_POST['email'],$_POST['message']) AND !empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
                $nom = htmlspecialchars($_POST['nom']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);
                if(strlen($nom) < 25) {
                    $ins = $bdd->prepare('INSERT INTO commentaires (nom, email, message, id_actualites) VALUES (?,?,?,?)');
                    $ins->execute(array($nom,$email,$message,$getid));
                    $c_msg = "<span style='color:green'>Votre message a bien été posté</span>";
                } 
            } else {
                $c_msg = "Erreur: Tous les champs doivent être complétés";
            }
        }
        }
        $commentaires = $bdd->prepare('SELECT * FROM commentaires WHERE id_actualites = ? ORDER BY id DESC');
	    $commentaires->execute(array($_GET['actualite']));
        ?>
        
        <div class="newPages_image">
            <img src= "<?php echo $donnees['image']; ?>" style="width:100%;"/>
        </div>
        <button class="btn"><i class="fa fa-arrow-left"></i> <a href="index">Retour au file d'actualités</a></button>
        
        
        
        <aside>
        <div class="side">
            <marquee behavior="alternate">Titre De L'info</marquee>
            <!-- <p class="flotte">
            <img src="image/logo0.png" alt="logo">
            </p> -->
            <!-- <img class="imageLeft"; src="image/logo0.png" alt="logo"> -->
            <p class="flotte">
            <div class="circle"></div>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dignissimos in sit molestias, nam optio possimus expedita, fuga iste, vel provident veniam quae. Ad, illum rerum? Obcaecati, labore. Porro, quis!
            Reiciendis odio quaerat ducimus esse laboriosam tempore, incidunt praesentium nostrum inventore assumenda et, minus nisi eveniet. Delectus amet aspernatur fuga, animi consectetur nostrum laudantium totam facilis magni vel labore quia!
            </p>
        </div>
        <div class="side">
            <marquee direction="right"> whats the fuck </marquee>
            <!-- <p class="flotte">
            <img src="image/logo0.png" alt="logo">
            </p> -->
            <!-- <img class="imageLeft"; src="image/logo0.png" alt="logo"> -->
            <p class="flotte">
            <div class="circle"></div>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dignissimos in sit molestias, nam optio possimus expedita, fuga iste, vel provident veniam quae. Ad, illum rerum? Obcaecati, labore. Porro, quis!
            Reiciendis odio quaerat ducimus esse laboriosam tempore, incidunt praesentium nostrum inventore assumenda et, minus nisi eveniet. Delectus amet aspernatur fuga, animi consectetur nostrum laudantium totam facilis magni vel labore quia!
            </p>
        </div>
        <div class="side">
            <marquee behavior="scroll"> whats the fuck </marquee>
            <!-- <p class="flotte">
            <img src="image/logo0.png" alt="logo">
            </p> -->
            <!-- <img class="imageLeft"; src="image/logo0.png" alt="logo"> -->
            <p class="flotte">
            <div class="circles"></div>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dignissimos in sit molestias, nam optio possimus expedita, fuga iste, vel provident veniam quae. Ad, illum rerum? Obcaecati, labore. Porro, quis!
            Reiciendis odio quaerat ducimus esse laboriosam tempore, incidunt praesentium nostrum inventore assumenda et, minus nisi eveniet. Delectus amet aspernatur fuga, animi consectetur nostrum laudantium totam facilis magni vel labore quia!
            </p>
        </div>
        </aside>
        
        
         <div class="newPage">
            
            <div class="newPage_image">
                <marquee behavior="alternate" direction="" class="marqueePage"><Header><?php echo $donnees['categorie'];?></Header></marquee>
                <h2><?php echo $donnees['titre'];?></h2>
                <p><?php echo $donnees['descriptions'];?><br></p>
            </div>   
            
             <h2> Commentaires </h2><br>
                <form action="" method="post">
                    <input type="text" name="nom" placeholder="nom" required="" class="form form-control"><br>
                    <input type="text" name="email" placeholder="email" required="" class="form form-control"><br>
                    <textarea name="message" placeholder="votre message ici..." required="" class="form form-control" cols="30" rows="10"></textarea><br>
                    <input type="submit" name="submit" value="Poster" class="bnt bnt-primary"><br>
                </form>
                <?php if(isset($c_msg)) { echo $c_msg; } ?>
                
                <?php if(isset($c_msg)) { echo $c_msg; } ?>
                <br/><br/>
                <?php 
                    while($c = $commentaires->fetch()) { 
                ?>
                    
                    <div class="wrapper">
                        <div class="outer">
                                <div class="card" style="--delay:-1;">
                                    <div class="content">
                                    <div class="img"><img src= "<?php echo $c['image']; ?>" style="width:20%; height: auto;"/></div>
                                    <div class="details">
                                        <span class="name"><?php echo $c['nom'];?></span>
                                        <p><?php echo $c['message'];?><br></p>
                                </div>
                            </div>
                        <a href="#">J'aime</a>
                    </div>
      
                <?php 
                } 
                    $commentaires->closeCursor(); // termine le traitement de la requete
                ?>
                <!-- Incluez le SDK JavaScript sur votre page une fois, 
                    idéalement juste après la balise Corps d'ouverture. -->

           <!--partage  <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v7.0&appId=912203799294890&autoLogAppEvents=1" nonce="5QVdEkax">
            </script> -->


        <!-- Placez ce code là où vous voulez que le plugin apparaisse sur votre page. -->

        <!-- partage  <div class="fb-share-button" data-href="https://web.facebook.com/commune.biscuiterie" data-layout="box_count" data-size="small">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fweb.facebook.com%2Fcommune.biscuiterie&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
        </div> -->

        <!-- Bouton partage pour watchapp -->

         
         </div>
         
        
    
    
         <!-- retourner en haut -->
         <a id="button"></a>
        <script>
            var btn = $('#button');
            $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
            });
        </script>
<?php include 'templates/footer.php';?>
</body>
</html>