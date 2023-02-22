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
<?php include 'templates/header.php';?>
        <div id="conteneur">
                <div class="slider">
                <input type="radio" id="show_slide1" name="slider_commands">
                <input type="radio" id="show_slide2" name="slider_commands">
                <input type="radio" id="show_slide3" name="slider_commands">
                <input type="radio" id="play_slider" name="slider_commands">
                <div class="slides">
                <figure id="slide1">
                    <img src="image/mama.jpg" alt="Monsieur le maire">
                    <figcaption>Notre maire Mrs Mouhamed Djibril WADE</figcaption>
                </figure>
                <figure class="slide2">
                    <img src="image/1mama.jpg" alt="madame le maire">
                    <figcaption>chez niarel maire</figcaption>
                </figure>
                <figure class="slide3">
                    <img src="image/mairie.jpeg" alt="Forêt en automne">
                    <figcaption>Bienvenue à l'hotel de ville Biscuterie</figcaption>
                </figure>
                </div>
                    <nav>
                        <ul class="dots_commands">
                        <li><label for="show_slide1">Slide 1</label></li>
                        <li><label for="show_slide2">Slide 2</label></li>
                        <li><label for="show_slide3">Slide 3</label></li>
                        </ul>
                        <label for="play_slider" aria-label="Play" id="play" title="Play">Play</label>
                    </nav>
                </div>  
        <div class="slidemenu">
                    <header><h4>Accés Rapides</h4></header>
                    <ul>
                    <hr>
                    <li><a href="conseilmunicipal">CONSEILLERS MUNICIPAUX</a></li>
                    <hr>
                    <li><a href="allactualites">PUBLICATIONS MUNICIPALE</a></li>
                    <hr>
                    <li><a href="numeroutile">NUMEROS UTILES</a></li>
                    <hr>
                    <li><a href="equipementloisir">SALLE MUNICIPALE</a></li>
                    <hr>
                    <li><a href="#">MENU SCOLAIRE</a></li>
                    <hr>
                    <li><a href="alldemarche">DEMARCHE ADMINISTRATIVE</a></li>
                    </ul>
                </div>
            </div>
            <div class="jumbo">
                <h1 style="text-align: center;">Tout Sur l'Actualités de la Communne</h1>
                <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quaerat molestiae consequuntur soluta debitis error optio dolorum et pariatur similique delectus architecto deserunt earum, itaque harum iusto cupiditate quasi? Dolore?
                Cupiditate aliquam nulla molestiae eius porro vel nihil voluptatem fuga itaque est nemo quidem quam similique maxime sit non, rem quibusdam nesciunt error quisquam sapiente repudiandae? Exercitationem unde quasi natus.
                Ipsam veritatis quisquam aliquam et, laudantium obcaecati reiciendis quo possimus soluta pariatur nesciunt commodi placeat aliquid assumenda libero repellendus enim iste voluptatibus est cupiditate explicabo quaerat amet iure! Culpa, eaque.
                </p>   
            </div>
            <div id="contents">
                
                    <?php
                try {
                    //    on se connect à mysql
                    $bdd = new PDO('mysql:host=localhost;dbname=biscuiterie;charset=utf8', 'root', '',
                                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } catch (exception $e) {
                    //    en cas d'erreur affiche un message est arret tout
                    die('Erreur : ' . $e->getMessage());
                }
                //Patie boucle
                $page = (!empty($_GET['page']) ? $_GET['page'] : 1);
                $limite = 2;
                $resultFoundRows = $bdd->query('SELECT count(id) FROM `actualites`');
                /* On doit extraire le nombre du jeu de résultat */
                $nombredElementsTotal = $resultFoundRows->fetchColumn();
                //    on recuperer tout le contenu de la table jeux_video
                $debut = ($page - 1) * $limite;
                $reponse = 'SELECT * FROM actualites ';
                $reponse = $bdd->prepare($reponse);
            
                $reponse ->execute();
                // //Patie boucle
                // $limite = 2;
                // $compteur = 0;
                //    on affiche chaqye entrée une part une
                while ($donnees = $reponse->fetch()){
                
                ?>  
                        <div class="newright">
                        <div class="newright_image">
                        <img src= "<?php echo $donnees['image']; ?>" style="width:100%; height: 300px;"/>
                        </div>
                        <div class="newright_image">
                            <Header><?php echo $donnees['categorie'];?></Header>
                            <h2><?php echo $donnees['titre'];?></h2>
                            <p><?php echo $donnees['mini_description'];?><br></p>
                            <a href="page?actualite=<?php echo $donnees['id'];?>">Lire la Suite</a>
                        </div>            
                    </div>
                    
                <?php
                }
                    $reponse->closeCursor(); // termine le traitement de la requete
                ?>
                
        </div>
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