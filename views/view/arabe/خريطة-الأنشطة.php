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
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../views/src/favicon.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="stylesheet" href="../views/css/style1.css">
    <link rel="stylesheet" href="../views/css/preloader.css">
    <title>JID - JID - Devenez acteurJID</title>
    <script>
                        var locations = [];

    </script>
</head>

<body>
    <header>

        <img src="../views/src/jidLogo.jpg" alt="JID" class="logo" />


    </header>

    <div class="container" style="padding: 20px;">

        <div class="row">
        <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="الصفحة-الرئيسية.php">الصفحة الرئيسية</a></li>
                    <li><a href="تقديم.html">تقديم</a></li>

                    <li  class="menu-active" class="menu-has-children"><a href="">فاعلين اليوم الدولي للديمقراطية</a>
                        <ul>
                            <li><a href="خريطة-الأنشطة.php">خريطة لأنشطة</a></li>
                            <li><a href="جدول-مواعيد-الأنشطة.php">جدول مواعيد الأنشطة</a></li>
                            <li><a href="كن-فاعل.html">كن فاعل</a></li>
                            <li><a href="اقتراح-مناظرة.html">اقترح نقاش</a></li>
                            <li><a href="حوض-السمك.html">حوض السمك</a></li>
                        </ul>
                    </li>
                    <li  class="menu-has-children"><a href="youthtalk2018.html">JID Youth Talk</a>
                        <ul>
                            <li><a href="youthtalk2018-ar.html">JID Youth Talk 2018</a></li>

                        </ul>
                    </li>

                    <li class="menu-has-children"><a href="la-jid-2016.html">التوثيق</a>
                        <ul>
                            <li><a href="la-jid-2016-ar.html">اليوم الدولي للديمقراطية 2016</a></li>
                            <li><a href="la-jid-2017-ar.html">اليوم الدولي للديمقراطية 2017</a></li>
                            <li><a href="la-jid-2018-ar.html">اليوم الدولي للديمقراطية 2018</a></li>
                            <li><a href="la-jid-2018-ar.html">اليوم الدولي للديمقراطية 2019</a></li>
                        </ul>
                    </li>




                    <li><a href="اتصل.html">اتصل بنا</a></li>

                    <li class="menu-has-children"><a href="الصفحة-الرئيسية.php">العربية</a>
                        <ul>
                            <li><a href="home.php">Français</a></li>
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
                    <h3 class="cta-title" align="start">خريطة الأنشطة</h3>
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
                <h2 class="sec-title">آخر المشاركات</h2>
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
                                <a href="<?php echo $emp['eventLink']; ?>">رابط لهذا الحدث</a>
                                <br>
                                <a href="<?php echo $emp['eventProgram']; ?>" class="text-secondary" download="">المزيد من التفاصيل <i class="icon ion-android-arrow-forward"></i></a>


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
                                <h4 class="footer-widget-title">ماهو اليوم الدولي للديمقراطية ؟ </h4>
                                <p>أعلنت الجمعية العامة للأمم المتحدة منذ سنة 2007، يوم 15 سبتمبر تاريخ الاحتفال باليوم
                                    الدولي للديمقراطية بهدف تعزيز ودعم المبادئ الديمقراطية. وهي دعوة للجميع للاحتفال
                                    بهذا اليوم بهدف التوعية حول قضايا الديمقراطية. كما أنها فرصة لتقييم وضع الديمقراطية
                                    حول العالم.<a href="../views/presentation-2/index.html"> <b>لمعرفة المزيد </a></b></p>
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
                                <h4 class="footer-widget-title">روابط مفيدة</h4>
                                <ul>
                                    <li><a class="fancylink" href="">الأمم المتحدة</a></li>
                                    <li><a href="">الصندوق الوطني للديمقراطية</a></li>
                                    <li><a href="">الاتحاد البرلماني الدولي</a></li>
                                    <li><a href="">انتخابات كندا أسبوع الديمقراطية الكندية</a></li>
                                    <li><a href=""> شبكة InTerre Actif </a></li>
                                    <li><a href="">الجمعية البرلمانية للفرانكوفونية</a></li>
                                    <li><a href="">الاتحاد الكونفدرالي السويسري جنيف</a></li>
                                    <li><a href="">مؤتمر اليوم الدولي للديمقراطية للتركيز على السياسة الديمقراطية</a>
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
                                <h4 class="footer-widget-title">تابعونا</h4>
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
                                <h4 class="footer-widget-title">شريكنا الإعلامي</h4>
                                <ul>
                                    <li>
                                        <img src="../views/src/ifm.jpg" alt="" class="img-fluid">

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
    <script src="../views/js/preloader.js"></script>
    <script src="../views/js/map2.js"></script>
</body>

</html>