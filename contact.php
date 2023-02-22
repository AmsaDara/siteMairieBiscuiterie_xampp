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
     
    <form action="newcontact" method="post" >
    <fieldset>
    <legend>Merci De Remplir Ces Champs :</legend>
    <label for="prenom">Votre Prénom :</label>
    <input type="text" name="prenom" pattern="^[A-Za-z '-]+$" size="20" 
    maxlength="40" id="prenom"  placeholder="Mettez votre prénom" required="required"/>
    
    <label for="nom">Votre Nom :</label>
    <input type="text" name="nom" size="20" 
    maxlength="40" id="nom" placeholder="Mettez votre nom" required="required"/>
    
    <label for="email">Votre email :</label>
    <input type="email" name="email" size="" 
    maxlength="60" id="email" placeholder="Mettez votre email" required="required"/>
    
    <label for="nom">Votre Adresse :</label>
    <input type="text" name="adresse" size="20" 
    maxlength="100" id="adresse" placeholder="Mettez votre adresse" required="required"/>
    
    <label for="comments">Votre commentaires :</label>
    <textarea name="comments" placeholder="Redirige votre message" required="required" id="comments" cols="66" rows="10">
    </textarea>
    </fieldset>

    <p>
    <input type="submit" value="Envoyer" />
    <input type="reset" value="Annuler" />
    </p>
   
    </form>
    
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
