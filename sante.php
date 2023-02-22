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
        <h1 style="text-align: center;">Sante</h1>
        <p>
            La commune comptent plusieurs professionnels de santé: médecins, pharmacie, infirmiéres,pharmacie.
        </p>   
    </div>
    <div class="rubriquesante">
        <div class="point">
            <h2 style="color: rgb(42, 42, 112);">Professionnels de santé</h2>
            <hr style="color: rgb(42, 42, 112);"><br>
            <h4>Médecins</h4>
            <ul>
                <li>Docteur Elhadji Samba SY - Rue bata Niary Tally. Tél: +221 77 792 29 60.</li>
                <li>Docteur Elhadji Samba SY - Rue bata Niary Tally. Tél: +221 77 792 29 60.</li>
            </ul><br>
            <hr style="color: rgb(42, 42, 112);"><br>
            <h4>Pharmacie</h4>
            <ul>
                <li>Madame Fatou Bintou Ndiaye - Rue Boisson, En face Marcher Nguelaw. Tél: +221 77 737 38 64.</li>
            </ul><br>
            <hr style="color: rgb(42, 42, 112);"><br>
            <h4>Imfirmiéres</h4>
            <ul>
                <li>Monsieur Assane Walo Walo Ndaiye - Rue Dianor, En Poste Courant. Tél: +221 77 542 83 25</li>
            </ul><br>
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