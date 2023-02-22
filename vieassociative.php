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
    <img src="image/mairiefoto.png" alt="Commune Biscuiterie" style="width:100%; height:280px;">
    <h1 style="text-align: center;">Vie Associative</h1>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quaerat molestiae consequuntur soluta debitis error optio dolorum et pariatur similique delectus architecto deserunt earum, itaque harum iusto cupiditate quasi? Dolore?
        Cupiditate aliquam nulla molestiae eius porro vel nihil voluptatem fuga itaque est nemo quidem quam similique maxime sit non, rem quibusdam nesciunt error quisquam sapiente repudiandae? Exercitationem unde quasi natus.
        Ipsam veritatis quisquam aliquam et, laudantium obcaecati reiciendis quo possimus soluta pariatur nesciunt commodi placeat aliquid assumenda libero repellendus enim iste voluptatibus est cupiditate explicabo quaerat amet iure! Culpa, eaque.
        </p>   
    </div>
    
    <aside>
        <div class="side">
            <marquee behavior="alternate" direction="">Titre De L'info</marquee> 
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
            <marquee behavior="alternate" direction="">Whats the Fuck</marquee>
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
            <marquee behavior="scroll"> Offre de bourse par la mairie  </marquee>
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
    
    <h3 style="width: 100%; text-align: center; font-size: 40px; color: red;"> Erreur 404 cette page est introuvable</h3>
    
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