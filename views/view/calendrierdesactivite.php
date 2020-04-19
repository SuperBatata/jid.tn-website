<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="shortcut icon" href="../src/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/preloader.css">
    <title>JID - JID - Devenez acteurJID</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:false,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'load.php',
    selectable:true,
    clickable:true,
  
   

    eventClick:function(event)
    {
     
      var id = event.id;
      window.location.href = "cartedesactivites.php?id="+id;

    },

   });
  });
   
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
                    <li><a href="الصفحة-الرئيسية.php">Arabe</a></li>
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
            <h3 class="cta-title" align="start">NOTRE CALENDRIER DES ACTIVITES</h3>
        </div>
    </div>
</div>
</section>

<br>


  
  <div class="container">
   <div id="calendar"></div>
  </div>


<br>
  



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
                                <section id="lab_social_icon_footer">
                                    <!-- Include Font Awesome Stylesheet in Header -->
                                    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
                                        rel="stylesheet">

                                    <div class="">
                                        <a href="https://www.facebook.com/JIDTN/"><i id="social-fb"
                                                class="fa fa-facebook-square fa-3x social"></i></a>
                                        <a href="https://twitter.com/JID_Tunisie"><i id="social-tw"
                                                class="fa fa-twitter-square fa-3x social"></i></a>
                                        <a href="https://www.instagram.com/jid_tn/"><i id="social-gp"
                                                class="fa fa-instagram fa-3x social"></i></a>
                                        <a href="mailto:info@jid.tn   "><i id="social-em"
                                                class="fa fa-envelope-square fa-3x social"></i></a>
                                    </div>

                                </section>
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
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="../js/preloader.js"></script>


 </body>
</html>
