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
        <h1 style="text-align: center;">Sécurité</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat recusandae modi, hic eum ratione a voluptate dolorum obcaecati nihil dignissimos exercitationem minus eaque dolorem corporis tempora, eius odio fugit molestiae!
        </p>   
    </div>
    <div class="rubriquesante">
        <div class="point">
            <h1>La commune n'a pas encore de poste de pocile</h1>
            <!-- <h2>Numéro D'urgence</h2>
            <ul>
                <li>Sapeur Pompiers: 18</li>
                <li>Police: 17</li>
                <li>SAMU: 33 869 82 52</li>
            </ul> -->
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