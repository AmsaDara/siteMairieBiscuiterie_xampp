<!DOCTYPE html>
<html lang="fr">

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
    <div class="debutentete">
        <div class="retourindex">
            <a href="index">
                <h1>Mairie Biscuiteire</h1>
            </a>
        </div>
        <div class="liensociaux">
            <section class="social">
                <ul class="social-set">
                    <li>
                        <a class="sociali" href="#" aria-label="Search">
                            <i class="fa fa-search fa-fw" title="Search"></i>
                        </a>
                    </li>
                    <li>
                        <a class="sociali" href="https://www.facebook.com/padrosy" target="_blank" aria-label="Facebook">
                            <i class="fa fa-facebook-square fa-fw" title="Facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="sociali" href="https://www.youtube.com" target="_blank" aria-label="YouTube">
                            <i class="fa fa-youtube fa-fw" title="YouTube"></i>
                        </a>
                    </li>
                    <li>
                        <a class="sociali" href="https://www.twitter.com" target="_blank" aria-label="Twitter">
                            <i class="fa fa-twitter fa-fw" title="Twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="sociali" href="https://api.whatsapp.com/send?phone=778380081 " target="_blank" aria-label="Whatsapp">
                            <i class="fa fa-whatsapp fa-fw" title="Whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
        <div id="toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
    </div>

    <nav id="menucentrale">
        <ul>
            <li><a href="#" class="active">ACCUEIL &ensp;</a> </li>
            
            <li class=""><a href="servicepopulation">PORTRAIT &ensp;</a>
                <!-- <ul class="sous">
                    <li><a href="servicepopulation">Service à la population</a></li>
                    <li><a href="dons">Dons</a></li>
                    <li><a href="marcher">Marchés</a></li>
                    <li><a href="religion">Mosquées/Eglise</a></li>
                    <li><a href="delegues">Délégués de quartier</a></li>
                    <li><a href="badjienougokh">Badjiénou Gokh</a></li>
                    <li><a href="socioculturel">Centre Socio-Culturel</a></li>
                </ul> -->
            </li>
            
            <li class="deroulant"><a href="#">MUNICIPALITE &ensp;</a>
                <ul class="sous">
                    <li><a href="emplois">Le Maire</a></li>
                    <li><a href="entreprise">Le Conseil Municipal</a></li>
                    <li><a href="projeteconomie">Administration</a></li>
                </ul>
            </li>
            <li class="deroulant"><a href="#">ACTIVITES &ensp;</a>
                <ul class="sous">
                    <li><a href="allactualites.php">Actualites</a></li>
                    <li><a href="plancommune">Nos Activités</a></li>
                    <li><a href="bibliotheque">Les Grands Projets</a></li>
                </ul>
            </li>
            <li class="deroulant"><a href="#">DEMARCHE &ensp;</a>
                <ul class="sous">
                    <li><a href="organigramme">Organigramme</a></li>
                    <li><a href="alldemarche">Démarches Administratives</a></li>
                    <li><a href="plancommune">Plans de la Commune</a></li>
                    <li><a href="numeroutile">Numéros et Liens Utiles</a></li>
                    <li><a href="santesecurite">Santé et Sécurité</a></li>
                </ul>
            </li>
            
            <li><a href="numeroutile">CONTACT</a></li>


            

            

            <!-- <li class="deroulant"><a href="#">DECOUVERTE &ensp;</a>
                <ul class="sous">
                    <li><a href="habitat.php">Habitat</a></li>
                    <li><a href="urbanisme.php">Urbanisme</a></li>
                    <li><a href="environement.php">Environnement</a></li>
                    <li><a href="transport.php">Transport</a></li>
                </ul>
           </li> -->

        </ul>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#toggle').click(function() {
                $('#menucentrale').toggleClass('active')
            })
        })
    </script>
    <div id="conteneur">
        <div class="slider">
            <input type="radio" id="show_slide1" name="slider_commands">
            <input type="radio" id="show_slide2" name="slider_commands">
            <input type="radio" id="show_slide3" name="slider_commands">
            <input type="radio" id="play_slider" name="slider_commands">
            <div class="slides">
                <figure id="slide1">
                    <img src="image/mama.jfif" alt="Monsieur le maire">
                    <figcaption>Notre maire Mrs Mouhamed Djibril WADE</figcaption>
                </figure>
                <figure class="slide2">
                    <img src="image/1mama.jpg" alt="madame le maire">
                    <figcaption>chez niarel maire</figcaption>
                </figure>
                <figure class="slide3">
                    <img src="image/mama.jfif" alt="Forêt en automne">
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
            <header>
                <h4>Agenda/Evenements</h4>
            </header>
            <ul>
                <hr>
                <li> <marquee behavior="scroll"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee></li>
                <hr>
                <li> <marquee behavior="scroll"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee> </li>
                <hr>
                <li><marquee behavior="scroll"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee></li>
                <hr>
                <li><marquee behavior="behavior"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee></li>
                <hr>
                <li><marquee behavior="left"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee></li>
                <hr>
                <li><marquee behavior="rigth"> <span style="background-color: red; border: 2px solid white; font-size: 20px;">Info:</span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet inventore veniam sed illo animi exercitationem dolor cupiditate officiis a, porro vitae officia numquam asperiores et distinctio hic ratione perspiciatis?</marquee></li>
            </ul>
        </div>
    </div>
    <div id="content">

        <?php
        try {
            //    on se connect à mysql
            $bdd = new PDO(
                'mysql:host=localhost;dbname=biscuiterie;charset=utf8',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
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
        $reponse = 'SELECT * FROM actualites LIMIT :limite OFFSET :debut';
        $reponse = $bdd->prepare($reponse);
        $reponse->bindValue('limite', $limite, PDO::PARAM_INT);
        $reponse->bindValue('debut', $debut, PDO::PARAM_INT);
        $reponse->execute();
        // //Patie boucle
        // $limite = 2;
        // $compteur = 0;
        //    on affiche chaqye entrée une part une
        while ($donnees = $reponse->fetch()) {

        ?>
            <div class="newleft">
                <div class="newleft_image">
                    <img src="<?php echo $donnees['image']; ?>" style="width:100%; height: 300px;" />
                </div>
                <div class="newleft_image">
                    <Header><?php echo $donnees['categorie']; ?></Header>
                    <h2><?php echo $donnees['titre']; ?></h2>
                    <p><?php echo $donnees['mini_description']; ?><br></p>
                    <a href="page?actualite=<?php echo $donnees['id']; ?>">Lire la Suite</a>
                </div>
            </div>

        <?php
        }
        $reponse->closeCursor(); // termine le traitement de la requete
        ?>

        <!-- <div class="newleft">
                <div class="newleft_image">
                <img src="image/mini_welcome.jpg" alt="" />
                </div>
                <div class="newleft_image">
                    <Header>Vie Municipale</Header>
                    <h2>Bienvenue sur notre nouveau site internet.</h2>
                    <p>Nous sommes heureux de vous compter parmis nos premiers visiteurs de 
                        notre site internet. Decouvrez-le en quelques mots...</p><br>
                    <a href="#">Lire la suite</a>
                </div>            
            </div>

            <div class="newleft">
            <div class="newleft_image">
                    <img src="image/mini_communiquer.jpg" alt="" />
                </div>
                <div class="newleft_image">
                    <Header>Vie Municipale</Header>
                    <h2>Le compte rendu du dernier conseil est disponible.</h2>
                    <p>Cliquez ici pour consulter le dernier compte rendu du conseil...</p><br>
                        <a href="#">Lire la suite</a>
                </div> 
            </div> -->

    </div>

    <div class="paginer">
        <?php
        // Partie "Liens"
        /* On calcule le nombre de pages */
        $nombreDePages = ceil($nombredElementsTotal / $limite);

        /* Si on est sur la première page, on n'a pas besoin d'afficher de lien
                    * vers la précédente. On va donc ne l'afficher que si on est sur une autre
                    * page que la première */
        if ($page > 1) :
        ?><a href="?page=<?php echo $page - 1; ?>">Page précédente</a> <?php
                                                                                    endif;

                                                                                    /* On va effectuer une boucle autant de fois que l'on a de pages */
                                                                                    for ($i = 1; $i <= $nombreDePages; $i++) :
                                                                                        ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
                                                                                    endfor;

                                                                                    /* Avec le nombre total de pages, on peut aussi masquer le lien
                    * vers la page suivante quand on est sur la dernière */
                                                                                    if ($page < $nombreDePages) :
                                                                                    ?> <a href="?page=<?php echo $page + 1; ?>">Page suivante</a><?php
                                                                                    endif;
                                                                                        ?>
    </div>
    <div id="boite-content">
        <div class="gestion1">
            <a href="gestiondechets""><img src=" image/bg_dechet.jpg" alt="Image dechets solide"></a>
            <div class="gestiontext"><a href="gestiondechets">
                    <h1>GESTIONS DECHETS</h1>
                </a></div>
        </div>
        <div class="gestion2">
            <a href="vieassociative"><img src="image/bg_social.jpg" alt="Image dechets solide"></a>
            <div class="gestiontext1"><a href="vieassociative">
                    <h1>VIE ASSOCIATIVES</h1>
                </a></div>
        </div>
        <div class="gestion3">
            <!-- <a href=""><img src="image/white.jpg" alt="Image dechets solide"></a> -->
            <div class="gestiontext2"><a href="publicservice">
                    <h1>SERVICE PUBLIC</h1>
                </a></div>
        </div>
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
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <footer id="piedepage">
        <div class="logo">
            <img src="image/logo.jpg" alt="" srcset="">
        </div>
        <div class="informations">
            <h1>Mairie Commune</h1>
            <h6>Adresse ...</h6>
            <a href="contact" class="liencontact">Contact-Nous</a>
            <h3>HORAIRE D'OUVERTURE</h3>
            <p>Du lundi au jeudi </p>
            <hr>
            <p>09h à 12h / 15h à 16h</p>
            <hr>
            <p> Vendredi</p>
            <hr>
            <p>09h à 13h / 15h à 16h30</p>
        </div>
        <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.127672052685!2d-17.45369058584659!3d14.705371178444517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17389d0260d39%3A0x5eca5dabff40f488!2sMairie%20Biscuiterie!5e0!3m2!1sfr!2ssn!4v1586616558492!5m2!1sfr!2ssn" frameborder="0" width="100%" height="299px" allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
        </div>
        <!-- <div class="menufooter">
             <ul>
             <li><a href="#">Mention Légale</a></li>
             <li><a href="#">Confidentialité</a></li>
             </ul>
         </div> -->
    </footer>
</body>

</html>