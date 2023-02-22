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
        <h1 style="text-align: center;">Numéros et Lien Utiles</h1>
            <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quaerat molestiae consequuntur soluta debitis error optio dolorum et pariatur similique delectus architecto deserunt earum, itaque harum iusto cupiditate quasi? Dolore?
            Cupiditate aliquam nulla molestiae eius porro vel nihil voluptatem fuga itaque est nemo quidem quam similique maxime sit non, rem quibusdam nesciunt error quisquam sapiente repudiandae? Exercitationem unde quasi natus.
            Ipsam veritatis quisquam aliquam et, laudantium obcaecati reiciendis quo possimus soluta pariatur nesciunt commodi placeat aliquid assumenda libero repellendus enim iste voluptatibus est cupiditate explicabo quaerat amet iure! Culpa, eaque.
            </p>   
    </div>
    <div class="num">
        <div class="sousprefet">
            <h3>Sous Prefecture de Grand Dakar</h3>
            <p>Address : Grand Dakar </p>
            <p>Tél : 33 820 64 92</p>
            <a href="http://www.servicepublic.gouv.sn/index.php/demarche_administrative/services/1/89">www.servicepublic.gouv.sn</a>
        </div>
        <div class="sousprefet">
            <h3>Prefecture Dakar</h3>
            <p>Address : Dakar </p>
            <p>Tél : 33 823 44 22</p>
            <a href="http://www.interieur.gouv.sn/index.php?option=com_content&view=article&id=37&Itemid=19">www.interieur.gouv.sn</a>
        </div>
        <div class="sousprefet">
            <h3>Sous Prefecture de Grand Dakar</h3>
            <p>Address : Grand Dakar </p>
            <p>Tél : 33 820 64 92</p>
            <a href="http://www.servicepublic.gouv.sn/index.php/demarche_administrative/services/1/89">www.servicepublic.gouv.sn</a>
        </div>
        <div class="sousprefet">
            <h3>Sous Prefecture de Grand Dakar</h3>
            <p>Address : Grand Dakar </p>
            <p>Tél : 33 820 64 92</p>
            <a href="http://www.servicepublic.gouv.sn/index.php/demarche_administrative/services/1/89">www.servicepublic.gouv.sn</a>
        </div>
        <div class="sousprefet">
            <h3>Sous Prefecture de Grand Dakar</h3>
            <p>Address : Grand Dakar </p>
            <p>Tél : 33 820 64 92</p>
            <a href="http://www.servicepublic.gouv.sn/index.php/demarche_administrative/services/1/89">www.servicepublic.gouv.sn</a>
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