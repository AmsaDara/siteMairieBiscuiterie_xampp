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
    <div class="jumbotrons">
        <img src="image/hopital.jpg" alt="Commune Biscuiterie" style="width:100%; height:300px;">
        <h1 style="text-align: center;">Sante & Sécurité</h1>
        <p>
        Retrouver tout les informations relatives à la santé et sécurité au niveau  de la commune. Les numéros profesionel de santé et les numéros d'urgence.
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
    
    <div class="corps">
        <div class="sante">
            <div class="carte">
                <div class="imgCarte" data-text="Sante">
                    <img src="image/santes.jpg" alt="sante & sécurité">
                </div>
                <div class="contenu">
                    <div>
                        <h3>Santé</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ipsum ad harum aliquid delectus, impedit laboriosam dicta fugiat sequi,
                        iure nihil commodi laudantium vitae, dolore beatae velit atque optio facilis?
                        </p>
                        <a href="sante">Consulter le rubrique</a>
                    </div>
                </div>
            </div>
            <div class="carte">
                <div class="imgCarte" data-text="Securité">
                    <img src="image/santes.jpg" alt="sante & sécurité">
                </div>
                <div class="contenu">
                    <div>
                        <h3>Sécurité</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium ipsum ad harum aliquid delectus, impedit laboriosam dicta fugiat sequi,
                        iure nihil commodi laudantium vitae, dolore beatae velit atque optio facilis?
                        </p>
                        <a href="security">Consulter le rubrique</a>
                    </div>
                </div>
            </div>
        </div>
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