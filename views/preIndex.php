<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/loading_screen.css">
    <link rel="stylesheet" href="public/css/easy-autocomplete.themes.min.css">
    <link rel="stylesheet" href="public/css/easy-autocomplete.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="public\css\style_preindex.css">
    <script src="public/js/jquery.3.3.1.min.js"></script>
    <script src="public/js/jquery.easy-autocomplete.min.js"></script>
    <script src="public/js/loading_screen.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public\js\bootstrap.min.js"></script>
    <title>Leenk</title>
</head>

<body>

    <div id="nav_bar_preindex">
    <div class="nav_left_side">
        <nav class="navbar navbar-light" id="logo_nav_position">
            <a class="navbar-brand" href="index.php"><img src="./public/ressources/image/leenk3.png" width="100%"
                    alt="logo Leenk"></a>
        </nav>
        </div>
    <div class="nav_right_side">
        <ul class="nav justify-content-end menu_right_side">


            <li class="nav-item">
                <a class="nav-link swap-color" href="app/appLeenk">Application</a>
            </li>
            <li class="nav-item">
                <a class="nav-link swap-color about_leenk_btn" href="#">A propos</a>
            </li>

            <?php if (!isset($_SESSION['user'])) {
    ?>
            <li class="nav-item">
                <a class="nav-link swap-color" href="app/subscribe">Leenkez-vous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link swap-color" href="app/connect">Connexion</a>
            </li>
            <?php
} else {
    ?>
            <li class="nav-item">
                <a class="nav-link swap-color" href="app/checkMyProfil">Mon Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link swap-color" href="app/logOut">Deconnexion</a>
            </li>
            <?php
}
?>

        </ul>
        </div>
    </div>

    <!-- Menu responsive Leenk -->

    <div id="nav_bar_preindex_responsive">

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
                        <a class="nav-link color_link_responsive" href="app/appLeenk">Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color_link_responsive about_leenk_btn" href="#">A propos</a>
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

    <div class="row">
        <!-- LEFT SIDE -->
        <div class="col-md-6 col-sm-12 intro left_side">
            <div class="left_side_content">
                <h2 class="h2_style">Rejoignez le réseau Leenk !</h2>
                <a class="btn_sides_left left_side_btn" href="app/subscribe">Leenkez-vous</a>
                <hr>
                <a class="btn_sides_left left_side_btn" href="app/connect">Connexion</a>
            </div>
        </div>
        <!-- END LEFT SIDE -->




        <!-- RIGHT SIDE -->
        <div class="col-md-6 col-sm-12 intro right_side">
           
            <div class="right_side_content">
                <div class="box_left">
                    <h1 class="h1_style">Decouvrez Leenk</h1>
                    <a class="btn_sides_right about_leenk_btn" href="#">En savoir plus</a>
                </div>
                <div class="img_box"> <img src="public/ressources/image/test_leenk_mockup.png" alt="phone"></div>
            </div>

        </div>
    </div>
    <!-- END RIGHT SIDE -->


    <!-- ABOUT LEENK -->
    <div class="row about_leenk ">


                    <!-- LEFT SIDE -->
        <div class="col-md-6 col-sm-12 about_sides left_about row">
            <h3 class="white title_left_about">Un projet innovant</h3>
            <p class="white">Le premier réseau intercommunautaire autour du gaming, visant à rapprocher chaque joueur, de nimporte quelle plateforme,
                autour de leurs passion.</p>

            <p class="white">Partager, créez, vivez</p>
            <div class="section_left_about left_box">
            </div>
            <div class="section_left_about right_box"></div>

        </div>

                     <!-- END LEFT SIDE -->


                     <!-- RIGHT SIDE -->
        <div class="col-md-6 col-sm-12 about_sides right_about">

            <div class="content_right_about">
                <!-- <img class="pic_about" src="pic_right_about_side.jpg" alt="Photo by Ben Neale on Unsplash"> -->
            </div>
        </div>

                <!-- END RIGHT SIDE -->
    </div>




    <!-- END ABOUT LEENK -->

    <!-- TEAM -->
    <div class="row team_leenk ">
        <div class="col-md-6 team_sides left_team">
                <h3 class="white title_team">Notre équipe</h3>
                <img class="img-fluid img_team_profil" src="public/ressources/image/photoProfil.jpg" alt="profil Picture">
                <p class="white txt_team_right">Lorem Ipsum Bla Bla Bla.</p>
        </div>
        <div class="col-md-6 team_sides right_team">
                <h3 class="white title_team">Leenk</h5>
                <p id="text_footer" class="white txt_team_right">Leenk est un site à but non lucratif, produit par un gamer, pour les
                    gamers. Une
                    façon de se retrouver, de se croiser, d'échanger autour de nos passions. Partagez votre
                    skill,
                    faites vous de nouveaux amis. Avancez ensemble, pour la victoire !</p>

                    <a class="icone_sn" href="#"><i class="fab fa-twitter white"></i></a>
                    <a class="icone_sn" href="#"><i class="fab fa-facebook-square white"></i></a>
        </div>

    </div>

    <!-- END TEAM -->

    <div class="row">
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
                    <p id="text_footer">Leenk est un site à but non lucratif, produit par un gamer, pour les
                        gamers. Une
                        façon de se retrouver, de se croiser, d'échanger autour de nos passions. Partagez votre
                        skill,
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
                            <a href="#!">Med It Easy, David</a>
                        </li>
                        <li>
                            <a href="#!">Projet 3</a>
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
</div>
    <!-- Footer -->
    

    <a class="fas fa-arrow-circle-up" href="#" id="backToTop_btn"></a>
    <script>


        /* Script auto scrolling front Page Leenk  TEST - 01

        --- Problème référencé => Bug lié au défilement asynchrone.
                                  Peut être une mauvaise gestion ou une surchage du JS sur la page d'index.
                                  (Plusieurs action lié au défilement au même endroit.)

                    Réponse    => Le bug lié au défilement asynchrone est due au fait que l'animation de scroll est probablement plus rapide que la barre de scroll selon le navigateur.
                                  Ainsi, il est possible selon le navigateur que notre barre ne se trouve pas là où elle devrait être suite à l'animation.

        --- Solution 01 => Modulé l'intégralité du site en animation JS. --- Même problème
                           Auto scroll obligatoire sur la navigation.
                           Ainsi il est possible que l'erreur soit masqué par une action sous jacente.
            Solution 01 ABORDED.

        --- Solution 02 => Calculer les variations de scroll de façon plus précise afin de pouvoir attribuer au navigateur des informations précise quant à sa position.
                           Ainsi, il ne perdra pas de temsp à la recalculer.

                           Il est possible de remplacer '().scrollTop' par '().scrollY'.
                           Cette dernière retourne une valeur au pixel prêt.
                           Peut être qu'il sera plus simple de determiner des positions en pixel. /!\ RESPONSIVE ?

        --- Solution 03 => Ne pas utiliser d'effect on scroll.

        */




        // $bool = false;

        // console.log($(window).scrollTop());
        // if ($bool == false) {
        //     $(function () {
        //         $(window).scroll(function () {



        //             if ($(window).scrollTop() > 50 && $(window).scrollTop() < 75 && $bool == false) {

        //                 $("html, body").animate({
        //                     scrollTop: $(".about_leenk").offset().top

        //                 },
        //                     900
        //                 );
        //             }

        //             if ($(window).scrollTop() > 150 && $bool == false) {
        //                 $bool = true;
        //             }

        //             else if ($(window).scrollTop() < 50 & $bool == true) {
        //                 $bool = false;
        //             };
        //         });

        //     });
        // };


        /* FIN DE LA GESTION DE L'AUTO SCROLL. */






        $(".about_leenk_btn").click(function () {
            $("html, body").animate({
                scrollTop: $(".about_leenk").offset().top
            },
                900
            );
        });
        $(".about_team_btn").click(function () {
            $("html, body").animate({
                scrollTop: $(".team_leenk").offset().top
            },
                900
            );
        });

        $(".about_leenk_btn_02").click(function () {
            $("html, body").animate({
                scrollTop: $(".about_leenk").offset().top
            },
                900
            );
        });
  

    $(function () {

            let x=$(window).width();
            let y=$(window).height();

            $(window).scroll(function () {
                if(y > 800 ){
                    if ($(window).scrollTop() > 900) {
                        $('.swap-color').css('color','#ff8f00');
                    };
                    if($(window).scrollTop() < 900){
                        $('.swap-color').css('color','white');
                    }
                }


                if(y < 600 ){

                        if ($(window).scrollTop() > 450) {
                        $('.swap-color').css('color','#ff8f00');
                    };
                    if($(window).scrollTop() < 450){
                        $('.swap-color').css('color','white');
                    }
                };
                if(y > 600 && y < 800 ){

                    if ($(window).scrollTop() > 600) {
                    $('.swap-color').css('color','#ff8f00');
                    };
                    if($(window).scrollTop() < 600){
                    $('.swap-color').css('color','white');
                    }
                };
            })
    });



        $(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 200) {
                    btn.addClass("show");
                } else {
                    btn.removeClass("show");
                }
            });
            /* Back to top button */
            let btn = $("#backToTop_btn");
            btn.on("click", function (e) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                },
                    "300"
                );
            });
        });

            /* BURGER ANIMATION */
    $(document).ready(function() {

$('.first-button').on('click', function() {

    $('.animated-icon1').toggleClass('open');
});

});
    </script>


</body>

</html>
