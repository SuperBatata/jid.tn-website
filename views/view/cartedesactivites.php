<?php
include '../../entities/events.php';
require '../../core/eventC.php';
$emc = new eventC();
if (isset($_GET['id'])) {
    $list = $emc->affichereventparid($_GET['id']);
} else {
    $list = $emc->affichereventacc();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../src/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>JID - JID - Devenez acteurJID</title>
    <script>
                        var locations = [];

    </script>
</head>

<body>
    <header>

        <img src="../src/jidLogo.jpg" alt="JID" class="logo" />


    </header>

    <div class="container" style="padding: 20px;">

        <div class="row">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="home.php">Acceuil</a></li>
                    <li><a href="presentation.html">Presentation</a></li>

                    <li class="menu-active" class="menu-has-children"><a href="">Acteurs de la JID</a>
                        <ul>
                            <li><a href="cartedesactivites.php">Carte des Activités</a></li>
                            <li><a href="calendrierdesactivite.php">Calendrier des Activités</a></li>
                            <li><a href="devenir-acteur.html">Devenir acteur</a></li>
                            <li><a href="proposer-un-debat.html">Proposer un débat</a></li>
                            <li><a href="fishbowl-debate.html">Fishbowl debate</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a href="youthtalk2018.html">JID Youth Talk</a>
                        <ul>
                            <li><a href="youthtalk2018.html">JID Youth Talk 2018</a></li>

                        </ul>
                    </li>

                    <li class="menu-has-children"><a href="la-jid-2016.html">Documentation</a>
                        <ul>
                            <li><a href="la-jid-2016.html">LA JID 2016</a></li>
                            <li><a href="la-jid-2017.html">LA JID 2017</a></li>
                            <li><a href="la-jid-2018.html">LA JID 2018</a></li>
                        </ul>
                    </li>


                    <li><a href="contact.html">Contact</a></li>

                    <li class="menu-has-children"><a href="home.php">Français</a>
                        <ul>
                            <li><a href="#">Arabe</a></li>
                        </ul>

                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
    </div>
    <section id="contact-subheader">
        <div class="container wow fadeIn">
            <div class="row">

                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title" align="start">DEVENIR ACTEUR</h3>
                </div>
            </div>


        </div>
    </section>

    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <div id="map"></div>




    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="sec-title">Latest Posts</h2>
            </div>
            <div class="col-md-12">
                <?php foreach ($list as $emp) { ?>
                    
                    <script>

                        locations.push([<?php echo json_encode($emp['exactplace']); ?>, <?php echo json_encode($emp['latitude']); ?>, <?php echo json_encode($emp['longetude']); ?>]);
                        console.log(locations);
                   </script>
                    <div class="row bg-white rounded mt-3">
                        <div class="col-md-1">
                            <h2> <?php echo substr(date('F', strtotime($emp['start_event'])), 0, 3) ?> <br><strong><?php echo date('d', strtotime($emp['start_event'])) ?> </strong></h2>
                        </div>
                        <div class="col-md-2 no-padding">
                            <img width="300px" height="200px" src="<?php echo $emp['logo']; ?>"><br><br>
                            <center>
                                <h4><?php echo $emp['nameOrganisation']; ?></h4>
                            </center>
                        </div>
                        <div class="col-md-7 py-3">
                            <div class="card-block px-3">
                                <h4 class="card-title mt-0"><strong><?php echo $emp['title']; ?></strong></h4>
                                <p class="text-secondary mb-0">
                                    <strong><?php echo $emp['exactplace']; ?></strong><br>
                                    <strong><?php echo $emp['placeName']; ?></strong>
                                </p>
                                <p class="text-secondary">
                                    <strong><?php $emp['start_event'] . " - " . $emp['end_event']; ?></strong>
                                </p>
                                <p class="text-secondary">
                                    <strong><?php echo $emp['presentation'] ?></strong>
                                </p>
                                <p class="card-text">
                                    <?php echo $emp['descriptionevent']; ?>
                                </p>
                                <hr>
                                <a href="<?php echo $emp['eventLink']; ?>">lien vers l'evenement</a>
                                <br>
                                <a href="<?php echo $emp['eventProgram']; ?>" class="text-secondary" download="">plus de detail <i class="icon ion-android-arrow-forward"></i></a>


                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                <?php } ?>

            </div>
        </div>
    </div>


    <script>
        // Initialize and add the map
        function initMap() {

            console.log(locations);

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(36.839522, 10.2437841),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
    </script>
    <!--Load the API from the specified URL
     * The async attribute allows the browser to render the page while the API loads
     * The key parameter will contain your own API key (which is not needed for this tutorial)
     * The callback parameter executes the initMap() function
     -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAObzCbk0hwnk8LbUcTeFguDk5ZDr36VS4&callback=initMap">
    </script>






    <footer class="footer-area footer--light">
        <div class="footer-big">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="footer-widget">
                            <div class="widget-about">
                                <!-- <img src="http://placehold.it/250x80" alt="" class="img-fluid"> -->
                                <h4 class="footer-widget-title">C’est quoi la JID ? </h4>
                                <p>En 2007, l’Assemblée générale des Nations Unies a décidé de célébrer le <b>15
                                        Septembre</b> de chaque année la Journée internationale de la démocratie
                                    (JID)dans le but de promouvoir et de défendre les principes de la démocratie. Chacun
                                    est invité à commémorer cette journée pour accroître la sensibilisation du public
                                    sur les enjeux démocratiques. <b><a href="../presentation-2/index.html">En savoir
                                            plus</a></b></p>
                                <ul class="contact-details">

                                    <li>
                                        <span class="icon-envelope-open"></span>
                                        <b><a href="mailto:info@jid.tn">info@jid.tn</a></b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-4 -->
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                                <h4 class="footer-widget-title">Liens Utiles</h4>
                                <ul>
                                    <li>
                                        <a href="#">United Nations</a>
                                    </li>
                                    <li>
                                        <a href="#">National Endowment for Democracy (NED)</a>
                                    </li>
                                    <li>
                                        <a href="#">L'Union Interparlementaire(IPU)</a>
                                    </li>
                                    <li>
                                        <a href="#">Elections Canada La Semaine </a>
                                    </li>
                                    <li>
                                        <a href="#">Canadienne de la Démocratie</a>
                                    </li>


                                    <li>
                                        <a href="#">Le Réseau InTerre Actif (Québec)</a>
                                    </li>
                                    <li>
                                        <a href="#">Assemblée Parlementaire de la Francophonie</a>
                                    </li>
                                    <li>
                                        <a href="#">Confédération Suisse Canton de Genève</a>
                                    </li>
                                    <li>
                                        <a href="#">International Day for Democracy conference to focus on democratic
                                            politics</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <div class="footer-menu">
                                <h4 class="footer-widget-title">Suivez-nous !</h4>

                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-lg-3 -->

                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget">
                            <div class="footer-menu no-padding">
                                <h4 class="footer-widget-title">Notre partenaire médiatique</h4>
                                <ul>
                                    <li>
                                        <img src="../src/ifm.jpg" alt="" class="img-fluid">

                                    </li>

                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- Ends: .col-lg-3 -->

                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>© 2020
                                <a href="#">JID</a>. All rights reserved. Created by
                                <a href="#">GAW</a>
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/map2.js"></script>
</body>

</html>