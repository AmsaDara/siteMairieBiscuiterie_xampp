<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <title>Maire Biscuterie</title>
</head>
<body>
    <div class="debutentete">
        <div class="retourindex">
           <a href="index.php"><h1>Mairie Biscuiteire</h1></a>
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
           <li><a href="index" class="active">ACCUEIL &ensp;</a> </li>
           
           <li class="deroulant"><a href="#">SERVICES &ensp;</a>
               <ul class="sous">
               <li><a href="organigramme">Organigramme</a></li>
                    <li><a href="alldemarche">Démarches Administratives</a></li>
                    <li><a href="plancommune">Plans de la Commune</a></li>
                    <li><a href="numeroutile">Numéros et Liens Utiles</a></li>
                    <li><a href="santesecurite">Santé et Sécurité</a></li>
               </ul>
           </li>
               
           <li class="deroulant"><a href="#">ECONOMIE &ensp;</a>
                <ul class="sous">
                    <li><a href="artisancommercant">Artisans,Commercants</a></li>
                    <li><a href="entreprise">Entreprises</a></li>
                    <li><a href="projeteconomie">Projets Economie</a></li>
                    <li><a href="emplois">Emplois</a></li>
                </ul>
           </li>
           
           <li class="deroulant"><a href="#">COMMUNAUTE &ensp;</a>
                <ul class="sous">
                    <li><a href="servicepopulation">Service à la population</a></li>
                    <li><a href="dons">Dons</a></li>
                    <li><a href="marcher">Marchés</a></li>
                    <li><a href="religion">Mosquées/Eglise</a></li>
                    <li><a href="delegues">Délégués de quartier</a></li>
                    <li><a href="badjienougokh">Badjiénou Gokh</a></li>
                    <li><a href="socioculturel">Centre Socio-Culturel</a></li>
                </ul>
           </li>
                
           <li  class="deroulant"><a href="#">LOISIRS &ensp;</a>
                <ul class="sous">
                    <li><a href="bibliotheque">Bibliothéque</a></li>
                    <li><a href="equipementloisir">Equipements de loisirs</a></li>
                </ul>
           </li>
        
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
        $(document).ready(function(){
            $('#toggle').click(function(){
                $('#menucentrale').toggleClass('active')
            })
        })
    </script>
</body>