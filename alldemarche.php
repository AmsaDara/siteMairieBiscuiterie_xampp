<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <script src='modele.js' async></script>
    <title>Maire Biscuterie</title>
    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: rgb(42, 42, 112);
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
            margin: auto;
            text-align: center;


        }

        .modal-footer {
            padding: 2px 16px;
            background-color: rgb(42, 42, 112);
            color: white;
        }
    </style>
</head>

<body>

    <?php include 'templates/header.php'; ?>

    <div class="jumbotron">
        <h1 style="text-align: center;">Pour vos démarche administratives</h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quaerat molestiae consequuntur soluta debitis error optio dolorum et pariatur similique delectus architecto deserunt earum, itaque harum iusto cupiditate quasi? Dolore?
            Cupiditate aliquam nulla molestiae eius porro vel nihil voluptatem fuga itaque est nemo quidem quam similique maxime sit non, rem quibusdam nesciunt error quisquam sapiente repudiandae? Exercitationem unde quasi natus.
            Ipsam veritatis quisquam aliquam et, laudantium obcaecati reiciendis quo possimus soluta pariatur nesciunt commodi placeat aliquid assumenda libero repellendus enim iste voluptatibus est cupiditate explicabo quaerat amet iure! Culpa, eaque.
        </p>
    </div>
    <aside>
        <div class="side">
            <marquee behavior="alternate">Titre De L'info</marquee>
            <!-- <p class="flotte">
            <img src="image/logo0.png" alt="logo">
            </p> -->
            <!-- <img class="imageLeft"; src="image/logo0.png" alt="logo"> -->
            <p>
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
            <p>
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
            <p>
            <div class="circles"></div>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit dignissimos in sit molestias, nam optio possimus expedita, fuga iste, vel provident veniam quae. Ad, illum rerum? Obcaecati, labore. Porro, quis!
            Reiciendis odio quaerat ducimus esse laboriosam tempore, incidunt praesentium nostrum inventore assumenda et, minus nisi eveniet. Delectus amet aspernatur fuga, animi consectetur nostrum laudantium totam facilis magni vel labore quia!
            </p>
        </div>
    </aside>
    <div class="mbody">

        <div class="containers">
            <div class="box">
                <div class="imgBx">
                    <img src="image/fotodemarche.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal1" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal1" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de vouloir bien remplir le formulaire </h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Mairie De Biscuiterie</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/passeport.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <!-- Trigger/Open The Modal -->
                    <button class="modal-button" href="#myModal2" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal2" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de vouloir bien remplir ce formulaire(pour le depot de vos dossier)</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Commune De Biscuiterie</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/fotodemarche.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal3" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal3" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de bien remplir ce formulaire(deposelma sama dossier)</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <h2>Commune De Biscuiterie 2020</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/fotodemarche.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal4" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal4" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de vouloir bien remplir ce formulaire</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Commune De Biscuiterie</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/passeport.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal5" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal5" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de vouloir remplir ce formulaire</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>La mairie de biscuiterie vous remercie</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/fotodemarche.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal6" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal6" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de vouloir entréé des données</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>La commune de biscuiterie vous remercie</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/passeport.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal7" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal7" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de bien vouloir remplir ce formulaire</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Mairie biscuiterie avec mouhamed wade</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/passeport.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal8" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal8" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci pour votre visite</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Commune de biscuiterie 2020</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box">
                <div class="imgBx">
                    <img src="image/passeport.jpg">
                </div>
                <div class="contents">
                    <a href="#">
                        <h3>Acte De Naissance</h3>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, alias dolorum? Laboriosam deleniti vitae quia ratione deserunt inventore veniam sit provident odit dolorem! Sed modi, omnis nemo fuga aperiam velit!
                        Numquam perspiciatis omnis modi, id quo quam quas atque nobis dicta amet natus! Facere ipsa ad quia non consectetur voluptate? Autem cupiditate libero error incidunt dolor praesentium recusandae tenetur asperiores!
                    </p><br>
                    <button class="modal-button" href="#myModal9" style="width:200px; height: auto; font-size: 20px;"> Deposez ici </button>

                    <!-- The Modal -->
                    <div id="myModal9" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="close">×</span>
                                <h2>Merci de bien remplir ce formulaire</h2>
                            </div>
                            <div class="modal-body">
                                <form action="newform" method="POST">
                                    <fieldset>
                                        <legend>Remplir ces champs</legend>
                                        <label for="prenom">Prenom:</label> <input type="text" name="prenom" id="prenom" placeholder="votre prenom"><br><br>
                                        <label for="nom">Nom:</label><input type="text" name="nom" id="nom" placeholder="votre nom"><br><br>
                                        <label for="email">Votre email :</label> <input type="email" name="email" size="" maxlength="60" id="email" placeholder="Mettez votre email" required="required" /><br><br>
                                        <label for="naissance">Date De Naissance:</label><input type="datetime" name="date" id="date" placeholder="Annee-Mois-Jour"><br><br>
                                        <label for="registre">Numero Registre:</label><input type="number" name="nombre" id="nombre" placeholder="Numero Registre"><br><br>
                                        <label for="adress">Adresse:</label><input type="text" name="adresse" id="adresse" placeholder="votre adresse"><br><br>
                                    </fieldset>
                                    <p>
                                        <input type="submit" value="Envoyer">
                                        <input type="reset" value="Annuler">
                                    </p>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <h2>Au revoir bye bye</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>
    <script>
        // Get the button that opens the modal
        var btn = document.querySelectorAll("button.modal-button");

        // All page modals
        var modals = document.querySelectorAll('.modal');

        // Get the <span> element that closes the modal
        var spans = document.getElementsByClassName("close");

        // When the user clicks the button, open the modal
        for (var i = 0; i < btn.length; i++) {
            btn[i].onclick = function(e) {
                e.preventDefault();
                modal = document.querySelector(e.target.getAttribute("href"));
                modal.style.display = "block";
            }
        }

        // When the user clicks on <span> (x), close the modal
        for (var i = 0; i < spans.length; i++) {
            spans[i].onclick = function() {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                for (var index in modals) {
                    if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
                }
            }
        }
    </script>
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
    <?php include 'templates/footer.php'; ?>
</body>

</html>