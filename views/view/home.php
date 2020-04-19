<?php
$data = file_get_contents("timer.json");
$array = json_decode($data, true)['data'];
$date=$array['date'];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="../src/favicon.png" type="image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script> var x= '<?php echo $date ?>' ;
var countDownDate = new Date(x).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById('days').innerHTML=days;
  document.getElementById('hours').innerHTML=hours;
  document.getElementById('minutes').innerHTML=minutes;
  document.getElementById('seconds').innerHTML=seconds;

  console.log( days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ");
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
  }
}, 1000);
</script>


	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style1.css?v=<?php echo time(); ?>" el="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/preloader.css">
  
  
	<title>JID - JID - Devenez acteurJID</title>
	<!-- <script  src="timer.json"></script>
	<script>
		var mydata = JSON.stringify(data);
console.log(mydata)
	</script> -->
</head>


<body>


    <header>

        <img src="../src/jidLogo.jpg" alt="JID" class="logo" />


    </header>



    <div class="container" style="padding: 20px;">

        <div class="row">

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="home.php">Acceuil</a></li>
                    <li><a href="presentation.html">Presentation</a></li>

                    <li class="menu-has-children"><a href="cartedesactivites.html">Acteurs de la JID</a>
                        <ul>
                            <li><a href="cartedesactivites.html">Carte des Activités</a></li>
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



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="../src/cover.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="../src/x.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="../src/cover.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-md-8">
                <div class="presentation">
                    <h1>
                        Présentation
                    </h1>
                    <p>
                        En 2007, l’Assemblée Générale des Nations Unies a décidé de célébrer le <b>15 Septembre</b> de
                        chaque
                        année<a href="http://jid.tn/wp-content/uploads/2018/05/JID_infographie-FINAL-2-Copie.pdf"
                            style="color: #E84A37;"> la
                            Journée Internationale de la Démocratie (JID) </a>dans le but de promouvoir et de défendre
                        les
                        principes de la démocratie. Chacun est invité à commémorer cette journée pour accroître la
                        sensibilisation du public sur les enjeux démocratiques.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="savoir">

                                <div class="buttons">
                                    <button <button  onclick="window.location.href = 'presentation.html';" > 
    
    <p>En savoir plus</p>
    
</button>
                       
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <center>
                    <iframe src="https://www.youtube.com/embed/PHg8koGxqG0" allow="autoplay; encrypted-media"
                        frameborder="0"></iframe>
                </center>
                <div class="row">

                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <center>

                            <span style="color: #1c355d ; font-size: 30px;">réservez vos billets!</span>
                            <div class="button_cont" align="center"><a class="example_e"
                                    href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529">Réservation</a>
                            </div>
                            <div class="email">
                                <p> Pour plus d'informations, envoyez-nous un mail à info@jid.tn</p>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">

        <div class="row" style="padding-top: 20px;">

            <div class="col">

                <center>
                    <div class="button_cont" align="center"><a class="example_c"
                            href="../ressources/Agenda-IDD-2019-FR-.pdf">Découvrez le
                            programme
                            de la JID</a>
                    </div>
                </center>


            </div>

        </div>

        <div class="row no-gutters" style="padding-top: 50px;">
            <div class="presentation">
                <p style="text-align: justify; color: #626262;font-weight:500;"> A l'initiative de la Fondation
                    Internationale pour les
                    systèmes électoraux (IFES), la Tunisie fête la
                    Journée internationale de la démocratie (JID) pour la quatrième fois. Les célébrations se
                    dérouleront du
                    1er au 13 Septembre 2019 animées par des acteurs institutionnels et associatifs dans tout le
                    pays.<br><br>

                    Vous êtes invité à l’ouverture officielle de la Journée Internationale de la Démocratie (JID).
                    L’inauguration aura lieu le 13 septembre 2019 à 9h00 à l’Espace ARENA aux Berges du Lac. Le discours
                    inaugural sera prononcé par M. Le Ministre des affaires sociales, Mohamed Trabelsi. Il sera suivi
                    par un
                    débat animé par le journaliste Makki Helal permettant aux Présidents des Instances Indépendantes de
                    débattre, à l'image d'un plateau télévisé, de l'inclusion au service de la transition
                    démocratique.<br><br>

                    Vous êtes également invité(e) à assister au« Fishbowl debate », animé par Makki Helal, sur le thème
                    de
                    l'inclusion au service de la transition démocratique. Le Fishbowl est une forme de dialogue
                    participatif, alternatif aux débats traditionnels qui favorise la participation dynamique et
                    inclusive.
                    Il évite les longues présentations monotones ou monologues et permet d’aborder des sujets
                    controversés
                    en élargissant le débat contradictoire à tous ceux qui désirent émettre une opinion sur le
                    sujet.<br><br>

                    Nous vous invitons à vous pré-inscrire par le bais <a href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529
				" target="_blank" style="color:#E84A37 ;"> cet événement </a> et veuillez vous munir de votre
                    confirmation imprimée afin de faciliter votre accès à l’ARENA le 13 septembre.
                    Réservez votre place à l'Arena</p><br><br>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">

            <div class="col">


                <div class="button_cont" align="center" style="padding-bottom: 30px;"><a class="example_c"
                        href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529?fbclid=IwAR30HNVxhELmN0l63GfsICOJvp4GENcWAoeYekIMY36ZX05TYcoo3hoxKMU">Réservez
                        votre place à l'Arena</a>
                </div>


            </div>

        </div>

    </div>





    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
        <div class="container wow fadeIn" style="padding-top: 20px;">
            <div class="row">

                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title" align="center">Télécharger l’infographie de la Journée Internationale de la
                        démocratie</h3>
                </div>
            </div>



            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Infographie-JID_Ar.pdf">INFOGRAPHIE EN ARABE</a>
                </div>

                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Infographie-FR.pdf">INFOGRAPHIE EN FRANÇAIS</a>
                </div>
            </div>


            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Logo-en-arabe.png">LOGO DE LA JID EN ARABE</a>
                </div>

                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Logo-en-Français.png">LOGO DE LA JID EN FRANÇAIS</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->






    <div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px; ">

        <div class="row">


            <div class="col-lg-12 text-center text-lg-left">
                <h3 class="cta-title" align="center" style="text-transform: uppercase;font-size: 40px;">Prochains
                    <b>événements</b> </h3>
            </div>


        </div>

        <div class="row" style="padding-top: 50px;">
            <div class="col-lg-6 cta-btn-container text-center">
                <a style="margin:15px ;" class="example_c" href="devenir-acteur.html">PROPOSER UNE ACTIVITE</a>
            </div>

            <div class="col-lg-6 cta-btn-container text-center">
                <a style="margin:15px ;" class="example_c" href="cartedesactivites.php">TOUS LES EVENEMENTS</a>
            </div>
        </div>
    </div>


    <section style=" background-color:#1c355d; ">

        <div class="container ">

            <div class="row">


                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title" align="center" style="text-transform: uppercase;font-size: 40px;color:white;">La prochaine
                        edition de jid sera dans ! </h3>
                </div>


            </div>

        </div>
    </section>


    <section style="padding-bottom: 35px;">
        <div class="container">
            <div class="row justify-content-cente">
                <div class="col">





                    <div id="countdown">
                        
                    
                    <div class="cd-box">
                            <p id="seconds" class="numbers seconds">00</p><br>
                            <p class="strings timeRefSeconds">Secondes</p>
                        </div>
                    
                        <div class="cd-box">
                            <p id="minutes" class="numbers minutes">00</p><br>
                            <p class="strings timeRefMinutes">Minutes</p>
                        </div>
                     
                        <div class="cd-box">
                            <p id="hours" class="numbers hours">00</p><br>
                            <p class="strings timeRefHours">Heures</p>
                        </div>
                      
                    
                    
                    <div class="cd-box">
                            <p id="days" class="numbers days">00</p><br>
                            <p class="strings timeRefDays">Jours</p>
                        </div>
                     
                    
                    </div>
                    <!-- end div#countdown -->




                    <!-- end div.wrapper -->
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>

    </section>



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        
    <div class="container">
    <div class="col-lg-12 text-center text-lg-left">
        <br><br>
                <h3 class="cta-title" align="center" style="text-transform: uppercase;font-size: 40px;">
                    <b>NOS PARTENAIRES
</b> </h3>
            </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="Carousel1" class="carousel slide">
                    
                    <ol class="carousel-indicators">
                        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#Carousel" data-slide-to="1"></li>
                        <li data-target="#Carousel" data-slide-to="2"></li>
                    </ol>
                    
                    <!-- Carousel items -->
                    <div class="carousel-inner" >
                        
                    <div class="item active">
                    <div class="row">
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/1.png" class="thumbnail" alt="Image" style="width:100%;"></div>
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/2.jpg" class="thumbnail" alt="Image" style="width:100%;"></div>
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/3.jpg" class="thumbnail" alt="Image" style="width:100%;"></div>
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/4.png" class="thumbnail" alt="Image" style="width:100%;"></div>
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/5.jpg"class="thumbnail"  alt="Image" style="width:100%;"></div>
                    <div class="col-md-2 col-xs-4"><img src="../logo-sponsors/6.jpg"class="thumbnail" alt="Image" style="width:100%;"></div>
                    </div><!--.row-->
                    </div><!--.item-->
                    
                    <div class="item">
                    <div class="row">
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/7.jpg"class="thumbnail" alt="Image" style="max-height:80px;"></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/17.png"class="thumbnail" alt="Image" style="max-height:80px;"></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/9.png"class="thumbnail" alt="Image" style="max-height:80px;"></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/10.png"class="thumbnail" alt="Image" style="max-height:80px;"></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/11.png"class="thumbnail" alt="Image" style="max-height:80px;"></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/12.jpg" class="thumbnail"alt="Image" style="max-height:80px;"></div>
                    </div><!--.row-->
                    </div><!--.item-->
                    
                    <div class="item">
                    <div class="row">
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/13.png"class="thumbnail" alt="Image" style="max-height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/14.jpg"class="thumbnail" alt="Image" style="max-height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/15.png"class="thumbnail" alt="Image" style="max-height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/16.png" class="thumbnail"alt="Image" style="max-height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4">><img src="https://tmaxtech.co.th/images/Partner/1.jpg" class="thumbnail"alt="Image" style="max-height:80px;"></a></div>
                    <div class="col-md-2 col-xs-4"><img src="https://tmaxtech.co.th/images/Partner/2.jpg" class="thumbnail"alt="Image" style="height:80px;"></a></div>
                    </div>
                    </div>
                    

                    
             </div>
         </div>
    </div>
                    </div>
                    </div>
<script>
$(document).ready(function() {
    $('#Carousel1').carousel({
        interval: 3000
    })
});
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
                                    (JID)dans le but de promouvoir et de défendre les principes de la démocratie.
                                    Chacun
                                    est invité à commémorer cette journée pour accroître la sensibilisation du
                                    public
                                    sur les enjeux démocratiques. <b><a href="presentation.html">En savoir
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
                                        <a href="#">International Day for Democracy conference to focus on
                                            democratic
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






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/preloader.js"></script>

    <script src="../js/timer.js.js"></script>
    
  <script src="lib/wow/wow.min.js"></script>
 
 
 




  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
 
</body>

</html>