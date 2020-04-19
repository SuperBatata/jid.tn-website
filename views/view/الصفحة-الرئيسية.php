<?php
$data = file_get_contents("../timer.json");
$array = json_decode($data, true)['data'];
$date=$array['date'];

?>
<!doctype html>
<html  lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <link rel="shortcut icon" href="../../src/favicon.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script> var x = '<?php echo $date ?>';
        var countDownDate = new Date(x).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

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
            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;

            console.log(days + "d " + hours + "h "
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
    <link rel="stylesheet" href="../../css/style1.css?v=<?php echo time(); ?>" el="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../css/preloader.css">


    <title>JID - JID - Devenez acteurJID</title>
    <!-- <script  src="timer.json"></script>
	<script>
		var mydata = JSON.stringify(data);
console.log(mydata)
	</script> -->
</head>


<body>


    <header>

        <img src="../../src/jidLogo.jpg" alt="JID" class="logo" />


    </header>



    <div class="container" style="padding: 20px;">

        <div class="row">

        <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active" ><a href="الصفحة-الرئيسية.php">الصفحة الرئيسية</a></li>
                    <li><a href="تقديم.html">تقديم</a></li>

                    <li class="menu-has-children"><a href="">فاعلين اليوم الدولي للديمقراطية</a>
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
                            <img class="d-block" src="../../src/cover.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block " src="../../src/x.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="../../src/cover.jpg" alt="Third slide">
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
                <center>   
                <h1>
                    تقديم
                    </h1>
    </center>
                    <p>
                        في عام 2007 ، قررت الجمعية العامة للأمم المتحدة الاحتفال بيوم 15 سبتمبر من كل عام باليوم الدولي
                        للديمقراطية من أجل تعزيز مبادئ الديمقراطية والدفاع عنها. الجميع مدعوون للاحتفال بهذا اليوم
                        لزيادة الوعي العام بالقضايا الديمقراطية.


                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <center>
                            <div class="savoir">

                                <div class="buttons">
                                    <button <button onclick="window.location.href = 'presentation.html';">

                                        <p>اقرأ المزيد</p>

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

                            <span style="color: #1c355d ; font-size: 30px;">حجز التذاكر الخاصة بك!</span>
                            <div class="button_cont" align="center"><a class="example_e"
                                    href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529">الحجز</a>
                            </div>
                            <div class="email">
                                <p>لمزيد من المعلومات ، أرسل لنا رسالة بريد إلكتروني إلى info@jid.tn</p>
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
                            href="../ressources/Agenda-IDD-2019-FR-.pdf">اكتشف برنامج JID</a>
                    </div>
                </center>


            </div>

        </div>

        <div class="row no-gutters" style="padding-top: 50px;">
            <div class="presentation">
                <p style="text-align: justify; color: #626262;font-weight:500;">بمبادرة من المؤسسة الدولية ل
النظم الانتخابية (IFES) ، تونس تحتفل
اليوم الدولي للديمقراطية (JID) للمرة الرابعة. ستقام الاحتفالات في الفترة من 1 إلى 13 سبتمبر 2019 ، بقيادة فاعلين مؤسسيين ونقابيين في جميع أنحاء البلاد.<br><br>

أنتم مدعوون إلى الافتتاح الرسمي لليوم الدولي للديمقراطية (IYD). سيتم الافتتاح في 13 سبتمبر 2019 الساعة 9:00 صباحًا في Espace ARENA في Berges du Lac. الخطاب
 وسيفتتح الافتتاح وزير الشؤون الاجتماعية محمد الطرابلسي. سيتبعه
 من قبل حوار برئاسة الصحفي مكي هلال سمح لرؤساء الهيئات المستقلة بذلك
النقاش ، مثل جهاز التلفزيون ، حول الإدراج في خدمة الانتقال
 ديمقراطي.<br><br>

أنت مدعو أيضًا لحضور "مناقشة Fishbowl" ، التي يديرها مكي هلال ، حول الموضوع
 من
الشمول في خدمة التحول الديمقراطي. حوض السمك هو شكل من أشكال الحوار
 تشاركية ، بديل للمناقشات التقليدية التي تعزز المشاركة الديناميكية و
ضمنا.
يتجنب العروض الطويلة الرتيبة أو المونولوج ويسمح بالاقتراب من الموضوعات
 مثير للجدل
من خلال توسيع النقاش العدائي لجميع أولئك الذين يرغبون في إبداء الرأي حول
فاعل.<br><br>

ندعوك للتسجيل المسبق بالقبلة <a href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529
				" target="_blank" style="color:#E84A37 ;">هذا الحدث </a> ويرجى إحضار الخاص بك
 تمت طباعة التأكيد لتسهيل وصولك إلى ARENA في 13 سبتمبر.
 احجز مكانك في الساحة</p><br><br>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">

            <div class="col">


                <div class="button_cont" align="center" style="padding-bottom: 30px;"><a class="example_c"
                        href="https://www.eventbrite.fr/e/billets-la-journee-internationale-de-la-democratie-jid-2019-70145650529?fbclid=IwAR30HNVxhELmN0l63GfsICOJvp4GENcWAoeYekIMY36ZX05TYcoo3hoxKMU">الحجز
 مكانك في الساحة</a>
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
                    <h3 class="cta-title" align="center">تحميل الرسم التوضيحي لليوم العالمي للديمقراطية</h3>
                </div>
            </div>



            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Infographie-JID_Ar.pdf">رسم توضيحي بالعربية
</a>
                </div>

                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Infographie-FR.pdf">رسم توضيحي بالفرنسية
</a>
                </div>
            </div>


            <div class="row" style="padding-top: 50px;">
                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Logo-en-arabe.png">شعار JID بالعربية</a>
                </div>

                <div class="col-lg-6 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="../ressources/Logo-en-Français.png">شعار JID فرنسي</a>
                </div>
            </div>

        </div>
    </section><!-- #call-to-action -->






    <div class="container-fluid" style="padding-top: 50px;padding-bottom: 50px; ">

        <div class="row">


            <div class="col-lg-12 text-center text-lg-left">
                <h3 class="cta-title" align="center" style="text-transform: uppercase;font-size: 40px;">الأحداث 
                    <b>القادمة</b> </h3>
            </div>


        </div>

        <div class="row" style="padding-top: 50px;">
            <div class="col-lg-6 cta-btn-container text-center">
                <a style="margin:15px ;" class="example_c" href="devenir-acteur.html">اقتراح نشاط
</a>
            </div>

            <div class="col-lg-6 cta-btn-container text-center">
                <a style="margin:15px ;" class="example_c" href="cartedesactivites.php">جميع الأحداث</a>
            </div>
        </div>
    </div>


    <section style=" background-color:#1c355d; ">

        <div class="container ">

            <div class="row">


                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title" align="center" style="text-transform: uppercase;font-size: 40px;color:white;">
                    النسخة القادمة ستكون في!</h3>
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
                            <p id="days" class="numbers days">00</p><br>
                            <p class="strings timeRefDays">أيام</p>
                        </div>
                        <div class="cd-box">
                            <p id="hours" class="numbers hours">00</p><br>
                            <p class="strings timeRefHours">ساعات</p>
                        </div>
                        <div class="cd-box">
                            <p id="minutes" class="numbers minutes">00</p><br>
                            <p class="strings timeRefMinutes">الدقائق</p>
                        </div>
                        <div class="cd-box">
                            <p id="seconds" class="numbers seconds">00</p><br>
                            <p class="strings timeRefSeconds">الثواني</p>
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
                <b>شركاؤنا

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
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/1.png" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/2.jpg" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/3.jpg" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/4.png" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/5.jpg" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                                <div class="col-md-2 col-xs-4"><img src="../../logo-sponsors/6.jpg" class="thumbnail"
                                        alt="Image" style="width:100%;"></div>
                            </div>
                            <!--.row-->
                        </div>
                     



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
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
                                <h4 class="footer-widget-title">ماهو اليوم الدولي للديمقراطية ؟ </h4>
                                <p>أعلنت الجمعية العامة للأمم المتحدة منذ سنة 2007، يوم 15 سبتمبر تاريخ الاحتفال باليوم
                                    الدولي للديمقراطية بهدف تعزيز ودعم المبادئ الديمقراطية. وهي دعوة للجميع للاحتفال
                                    بهذا اليوم بهدف التوعية حول قضايا الديمقراطية. كما أنها فرصة لتقييم وضع الديمقراطية
                                    حول العالم.<a href="../../presentation-2/index.html"> <b>لمعرفة المزيد </a></b></p>
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
                                        <img src="../../src/ifm.jpg" alt="" class="img-fluid">

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