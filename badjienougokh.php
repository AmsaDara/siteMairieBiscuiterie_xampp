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
        <h1 style="text-align: center;">Badjiénou Gokh</h1>
        <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quaerat molestiae consequuntur soluta debitis error optio dolorum et pariatur similique delectus architecto deserunt earum, itaque harum iusto cupiditate quasi? Dolore?
        Cupiditate aliquam nulla molestiae eius porro vel nihil voluptatem fuga itaque est nemo quidem quam similique maxime sit non, rem quibusdam nesciunt error quisquam sapiente repudiandae? Exercitationem unde quasi natus.
        Ipsam veritatis quisquam aliquam et, laudantium obcaecati reiciendis quo possimus soluta pariatur nesciunt commodi placeat aliquid assumenda libero repellendus enim iste voluptatibus est cupiditate explicabo quaerat amet iure! Culpa, eaque.
        </p>   
    </div>
    <div class="gokh">
        <h2 style="text-align: center;">Presentation des "BADJIENOU GOKH"</h2>
        <p>Les "Badjiéniou Gokh" lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus ipsum molestias placeat consequuntur mollitia laudantium atque, corporis illo provident, dolor eaque corrupti non! Velit vitae iure aspernatur rerum sapiente perspiciatis.</p>
        <h2 style="text-align: center;">Roles Principale</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quasi adipisci dolores doloribus corporis molestiae quos maiores, nulla quo excepturi enim voluptatibus quisquam sequi voluptatum minima deleniti fugiat earum. Minus!</p>
        <h2 style="text-align: center;">Ou trouve t'on les badjiénou gokh</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus possimus autem nam vitae soluta praesentium. Eaque aspernatur repellendus assumenda ea eligendi eum quod illo nam ex suscipit. Recusandae, reprehenderit eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aliquam adipisci nisi quod illum nostrum neque quisquam quidem laborum, blanditiis modi architecto ad optio minus? Sapiente nostrum voluptatum praesentium accusamus?</p>
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