<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://localhost/Leenk/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style_preindex.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/loading_screen.css">
    <link rel="stylesheet" href="public/css/easy-autocomplete.themes.min.css">
    <link rel="stylesheet" href="public/css/easy-autocomplete.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <script src="public/js/jquery.3.3.1.min.js"></script>
    <script src="public/js/jquery.easy-autocomplete.min.js"></script>
    <script src="public/js/loading_screen.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public\js\bootstrap.min.js"></script>
    <title><?=$title?></title>
</head>
<body>

    <div id="nav_bar_index">
        <nav class="navbar navbar-light" id="logo_nav_position">
            <a class="navbar-brand" href="app/appLeenk"><img src="./public/ressources/image/leenk3.png" width="100%"
                    alt="logo Leenk"></a>
        </nav>
        <ul class="nav justify-content-end">


            <li class="nav-item">
                <a class="nav-link" href="app/appLeenk">Accueil</a>
            </li>
            <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="index.php">A propos</a>
                    </li>

            <?php if (!isset($_SESSION['user'])) {
    ?>
            <li class="nav-item">
                <a class="nav-link" href="app/subscribe">Leenkez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="app/connect">Connexion</a>
            </li>
            <?php
} else {
    ?>
            <li class="nav-item">
                <a class="nav-link" href="app/checkMyProfil">Mon Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="app/logOut">Deconnexion</a>
            </li>
            <?php
}
?>

        </ul>

    </div>

    <!-- Menu responsive Leenk -->

    <div id="nav_bar_index_responsive">

        <nav class="navbar navbar-light amber lighten-4 mb-4 leenk_burger_responsive">

            <!-- Navbar brand -->
            <a class="navbar-brand menu_img_responsive" href="index.php"><img src="./public/ressources/image/leenk3.png" width="100%"
                    alt="logo Leenk"></a>

            <!-- Collapse button -->
            <button class="navbar-toggler first-button" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent20" aria-controls="navbarSupportedContent20" aria-expanded="false"
                aria-label="Toggle navigation">
                <div class="animated-icon1"><span></span><span></span><span></span></div>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent20">

                <!-- Links -->
                <ul class="navbar-nav mr-auto bg_color_responsive">
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="app/appLeenk">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="index.php">A propos</a>
                    </li>

                    <?php if (!isset($_SESSION['user'])) {
    ?>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="app/subscribe">Leenkez-vous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="app/connect">Connexion</a>
                    </li>
                    <?php
} else {
    ?>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="app/checkMyProfil">Mon Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive" href="app/logOut">Deconnexion</a>
                    </li>
                    <?php
}
?>
                </ul>
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </nav>
        <!--/.Navbar-->


    </div>












    <div id="search_part">
        <form id="form_search_bar" action="app/searchGame" method="post">
            <input id="basics" class="search_bar" name="searchbar" />
            <button type="submit" class="fas fa-search search_submit"></button>
        </form>
    </div>

    <?=$content?>

    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3 content_part_footer">

                    <!-- Content -->
                    <h5 class="text-uppercase title_footer_content">Leenk</h5>
                    <p id="text_footer">Leenk est un site à but non lucratif, produit par un gamer, pour les gamers. Une
                        façon de se retrouver, de se croiser, d'échanger autour de nos passions. Partagez votre skill,
                        faites vous de nouveaux amis. Avancez ensemble, pour la victoire !</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase title_footer_content">Projet Kercode 2019</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Ravenest</a>
                        </li>
                        <li>
                            <a href="https://www.mediteasy.fr">Med It Easy, David</a>
                        </li>
                        <li>
                            <a href="https://www.KidsBreizhBirthday.fr">KidsBreizhBirthday, Nicolas</a>
                        </li>
                        <li>
                            <a href="#!">Projet 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="index.php"> Leenk.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



    <!-- <script>
  var options = {
  url: "public/json/searchGame.json",

  listLocation:"Jeux",
  getValue:"name_game",

};

$("#basics").easyAutocomplete(options);
  </script> -->

    <script>
    var options = {
        placeholder: "Recherchez votre jeu",

        url: function(phrase) {
            // return "public/json/searchGame.json";
            return "index.php?action=testSearch";
        },

        categories: [{
            listLocation: "Jeux",
            header: "Nos jeux : "
        }, {
            listLocation: "Joueur",
            header: "Nos membres : "
        }, {
            listLocation: "Type",
            maxNumberOfElements: 1,
            header: "Genre :"
        }],
        getValue: function(element) {

            return element.name;
        },

        ajaxSettings: {
            dataType: "json",
            method: "POST",
            data: {
                dataType: "json"
            }
        },

        preparePostData: function(data) {
            data.phrase = $("#basics").val();
            console.log(data);
            return data;
        },
        list: {
            match: {
                enabled: true
            }
        },

        requestDelay: 400
    };


    $("#basics").easyAutocomplete(options);




    /* BURGER ANIMATION */
    $(document).ready(function() {

        $('.first-button').on('click', function() {

            $('.animated-icon1').toggleClass('open');
        });
      
    });



    /* hover on cards */

 

    </script>
</body>

</html>