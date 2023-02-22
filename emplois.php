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
    <style>
        .plusplus {
            width: 100%;
            height: auto;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            align-content: space-around;
            background-color: rgba(245, 245, 245, 0.884);
        }

        .profile-img {
            width: 40%;
            height: auto;
            order: 2;
        }

        .profile-img img {
            width: 100%;
            height: auto;
            /* height: 130vh; */
            background-size: cover;
        }

        .about {
            margin-left: 15px;
        }

        .profile-info {
            width: 60%;
            height: auto;
            order: 1;
        }

        .profile-info h1 {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .expertise img {
            width: 20%;
            height: 10%;
            margin: 5px;
        }

        .expertise {
            display: inline-block;
            width: 25%;
            padding: 30px 10px;
            margin: 2%;
            text-align: center;
            box-shadow: 0 0 15px 1px rgba(37, 73, 214, 0.18);
            background: #fff;
        }

        .expertise small {
            padding-top: 10px;
            display: block;
        }

        @media (max-width:900px) {
            .plusplus {
            width: 100%;
            height: auto;
            display: flex;
            flex-flow: column wrap;
            justify-content: space-around;
            align-content: space-around;
            background-color: rgba(245, 245, 245, 0.884);
        }

            .profile-info {
                width: 100%;
                overflow: inherit;
            }

            .profile-img {
                width: 100%;
                height: auto;
                order: 1;
            }
            .profile-img img {
                width: 100%;
                height: 100%;
                background-size: cover;
            }
            .expertise {
                width: 90%;
                margin-bottom: 10%;
            }

            .expertise img {
                height: 8%;
                margin: 10px 0;
            }
            
        }    
    </style>
</head>

<body>
    <?php include 'templates/header.php'; ?>

    <div class="plusplus">
        <div class="profile-img">
            <img src="image/mdw.png" alt="">
        </div>

        <div class="profile-info">
            <h2>Mot Du Maire</h2>
            <p class="about">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aliquid quo magni quisquam non saepe quod, eligendi ipsam numquam placeat perspiciatis unde dolores fugit consectetur itaque distinctio doloribus iure nesciunt!
                Placeat, natus aspernatur perspiciatis tempore sequi quo animi eos, nihil excepturi pariatur ab nulla asperiores facere blanditiis quis voluptatibus et quibusdam ducimus exercitationem provident. Ab praesentium quo facere vero error?
                Saepe perferendis ducimus possimus aperiam minima adipisci voluptas dolores, illum nulla debitis non, doloremque quia doloribus. Iure iste ad alias architecto quo mollitia, suscipit et reiciendis labore provident maiores impedit?
                Illo sed optio explicabo nisi excepturi. Sint tempore aperiam, repudiandae reprehenderit ducimus obcaecati, dicta delectus reiciendis odio magni vel illo. Porro quasi quidem eius assumenda iusto unde consectetur odio harum.
                Dicta tenetur reiciendis minus, animi pariatur porro deserunt nesciunt mollitia nostrum dolore alias dolor veritatis ducimus similique explicabo incidunt quis delectus excepturi nulla. Exercitationem fugiat omnis dolores alias, quibusdam obcaecati!
            </p>
            <div class="liste">
                <h4>Voici le parcour de <span>M.Mouhamed Djibril WADE</span></h4>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                    <li>Item 4</li>
                    <li>Item 4</li>
                    <li>Item 4</li>
                </ul>
            </div>
            <h2>Expertise</h2>

            <div class="expertise">
                <img src="image/mini_welcome.jpg" alt="">
                <p><b>Directeur Ultraplast</b></p>
                <small class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aliquid quo magni quisquam non saepe quod, eligendi
                </small>
            </div>
            <div class="expertise">
                <img src="image/mini_welcome.jpg" alt="">
                <p><b>Directeur Ultraplast</b></p>
                <small class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aliquid quo magni quisquam non saepe quod, eligendi
                </small>
            </div>
            <div class="expertise">
                <img src="image/mini_welcome.jpg" alt="">
                <p><b>Directeur Ultraplast</b></p>
                <small class="about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet aliquid quo magni quisquam non saepe quod, eligendi
                </small>
            </div>
        </div>
    </div> <br>

    <hr>
    <h2>Les Anciens Maires</h2>
    <div id="content">
        <div class="newleft">
            <div class="newleft_image">
                <img src="image/abdoulaye.JPG" alt="" style="width:100%; height: 300px;">
            </div>
            <div class="newleft_image">
                <h2>Feu Doudou Issa NIASS</h2>
                <p>
                    <small>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente atque excepturi architecto suscipit quasi neque cupiditate a, porro aperiam, laudantium necessitatibus? Minus recusandae ipsa non dignissimos similique praesentium at fugit?
                        Fugit eius ex corporis nam necessitatibus aut, voluptatum repellendus itaque quod labore qui illum nulla vel voluptatem quo facilis ipsum porro ea iure fuga ducimus doloribus. Asperiores rerum quos similique.
                        Dolorum alias, possimus distinctio sequi excepturi incidunt eaque voluptatibus maxime, sed recusandae quas sit nam aliquid laboriosam animi quibusdam provident tenetur, iusto iure corporis sunt nisi dicta. Quo, ratione sunt.
                    </small>
                </p>
            </div>
        </div>
        <div class="newleft">
            <div class="newleft_image">
                <img src="image/abdoulaye.JPG" alt="" style="width:100%; height: 300px;">
            </div>
            <div class="newleft_image">
                <h2>Monsieur Lamine DIA</h2>
                <p>
                    <small>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente atque excepturi architecto suscipit quasi neque cupiditate a, porro aperiam, laudantium necessitatibus? Minus recusandae ipsa non dignissimos similique praesentium at fugit?
                        Fugit eius ex corporis nam necessitatibus aut, voluptatum repellendus itaque quod labore qui illum nulla vel voluptatem quo facilis ipsum porro ea iure fuga ducimus doloribus. Asperiores rerum quos similique.
                        Dolorum alias, possimus distinctio sequi excepturi incidunt eaque voluptatibus maxime, sed recusandae quas sit nam aliquid laboriosam animi quibusdam provident tenetur, iusto iure corporis sunt nisi dicta. Quo, ratione sunt.
                    </small>
                </p>
            </div>
        </div>
    </div> <br>

        
    
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