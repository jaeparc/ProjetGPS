<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="background-image: url('images/background.jpg');">
        <nav>
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><i class="material-icons">directions_boat</i>GeoBoat</a>
                <ul id="nav-mobile" class="right">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="">Qu'est ce que GeoBoat?</a></li>
                <li><a href="">L'equipe</a></li>
                <li class="active"><a href="">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="white container z-depth-3" style="min-height:50vh;">
            <div class="container" style="margin-top : 10%; padding-top : 5%; padding-bottom : 5%;">
                <div class="center-align">
                    <i class="large material-icons">contact_mail</i>
                </div>
                <h5>Nous contacter</h5>
                <?php
                    if(isset($test)){
                        $login->erreur($test);
                    }
                ?>
                <form action="" method="post">
                    <div class="input-field center-align">
                        <input id="nom" name="nom" type="text" class="validate">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field center-align">
                        <input id="prenom" name="prenom" type="text" class="validate">
                        <label for="prenom">Prenom</label>
                    </div>
                    <div class="input-field center-align">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="text" class="validate">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field center-align">
                        <i class="material-icons prefix">phone</i>
                        <input id="tel" name="tel" type="text" class="validate">
                        <label for="tel">Numero de telephone</label>
                    </div>
                    <div class="input-field center-align">
                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div class="row">
                        <div class="right-align">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Allons-y !
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>