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
    <div class="jumbotron">
        <h1 style="text-align: center;">Artisans, Commerçantss</h1>
        <h4>
        Les nombreux artisans et commerçants présents sur la commune contribuent à son dynamisme et à sa richesse.
        </h4>   
    </div>
    <div class="commercant">
        <p>Retrouver <a href="">ICI</a> la liste des commerçants, artisans et professions libérales</p>
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