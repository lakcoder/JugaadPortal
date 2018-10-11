<?php
if ( isset( $_POST['submitexpo'] ) ) {
    $con = mysqli_connect("localhost:3306", "conso", "Conso123@", "conso");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    $email=$_POST['emailexpo'];


    $query = mysqli_query($con, "INSERT into expo (EMAIL) values('$email')");
     mysqli_close($con);
}
?>

<?php
if(isset($_POST['SIZE'])){
    $SIZE=$_POST['SIZE'];
    header('Location: /'.$_POST['SIZE']);
    exit;
}

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125403862-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125403862-1');
    </script>


        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
	    <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JUGAAD | E-CELL | VNIT</title>
        <meta name="keywords" content="Ecell, vnit, E-cell VNIT, entreprenuship cell, consortium 18, 2018, consortium'18, vnit consortium" />
        <meta name="description" content="E-Cell VNIT aims to promote and develop entrepreneurship culture amongst the students. Throughout the year, we
                        conduct various events, workshops and speaker
                        sessions sessions for inspiring and assisting young
                        entrepreneurs in their journey in the world of
                        business">
        <meta name="author" content="Sagar Bansal">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>


        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
        <link href="css/overlay.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/icon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body id="main">

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="#" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/logo-ecell.png" alt="Ecell Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-ecell-sm.png" alt="Ecell Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay" id="overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">

                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#about">About</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="team.php">Team</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#flagship">Events</a></li>
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="spons.php">Sponsors</a></li>
				<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="https://consortium.ecellvnit.org">Consortium'18</a></li>

                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#contact">Contact Us</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->


                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href=" https://m.facebook.com/vnitecell/">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/ecell_vnit">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href=" https://www.instagram.com/ecellvnit/">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style=";"id='skew1' >
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-20--xs g-font-size-40--sm g-font-size-60--lg g-color--white g-font-weight--600">JUGAAD<br><span style="color:#2c83cc;">18</span></h1>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-20--xs g-color--white">How much can you make with 100 bucks?</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                            <span class="s-promo-block-v3__date g-font-size-60--xs g-font-size-30--sm g-font-size-50--lg g-font-weight--600 g-color--primary">Jugaad<br><span class="g-font-size-20--xs g-font-size-30--lg">E-Cell, VNIT</span></span>
                                        </div>
                                    </div>
                                    <!--<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">-->
                                    <!--    <span class="s-promo-block-v3__month g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">Prize Worth</span>-->
                                    <!--    <span class="s-promo-block-v3__year g-font-size-18--xs g-font-size-22--lg g-font-weight--300 g-color--white-opacity-light">And more!</span>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-8">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <a href=#register>
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-arrow-right"></i>
                                <span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs"><b>Register Now</b></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="position:relative;height:0;padding-bottom:56.24%"><iframe width="560" height="315" src="https://www.youtube.com/embed/cy9fyghGN6k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="tables/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- About -->
        <div class="g-promo-section" id="about">
            <div class="container g-padding-y-10--xs g-padding-y-40--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <!--<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Ecell</p>-->
                        <br><div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">ABOUT</h2>
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--primary">JUGAAD</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <p class="g-font-size-18--xs g-color--dark">Jugaad is the ability to produce awesome products out of anything. To ignite this spirit, E-Cell organises an event called 'JUGAAD' at <span class="g-font-size-18--xs g-color--dark"><a href="http://vnit.ac.in/"class="g-color--primary" style="text-decoration:underline;">Visvesvaraya National Institute of Technology</a></span> where the partcipipants use their skills, resources, languages and a solid understanding of time to make ginormous profits. </p>
                        <p class="g-font-size-18--xs g-color--dark">Participants are given an initial base investment of INR 100. Teams have full freedom to use that money whichever way they like, to earn maximum profits, through legal means. The event lets participants think different conducts to earn money which have at times resulted in beautiful ideas and products. THe winners of the event are given exciting goodies and an internship opportunity at an esteemed organisation. </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- End About -->




        <!-- Counter -->
        <!--<div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">-->
        <!--    <div class="container g-padding-y-100--xs g-padding-y-125--sm">-->
        <!--        <div class="row">-->
        <!--            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">-->
        <!--                <div class="g-text-center--xs">-->
        <!--                    <div class=" g-margin-b-0--xs">-->
        <!--                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">20</figure>-->
        <!--                        <span class="g-font-size-40--xs g-color--white">k+</span>-->
        <!--                    </div>-->
        <!--                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>-->
        <!--                    <h4 class="g-font-size-18--xs g-color--white">No. of Participants</h4>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--lg">-->
        <!--                <div class="g-text-center--xs">-->
        <!--                    <div class=" g-margin-b-0--xs">-->
        <!--                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white  g-margin-b-0--xs js__counter">1</figure>-->
        <!--                        <span class="g-font-size-40--xs g-color--white">M</span>-->
        <!--                    </div>-->
        <!--                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>-->
        <!--                    <h4 class="g-font-size-18--xs g-color--white">Prizes Worth</h4>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 col-xs-6 g-full-width--xs  g-margin-b-0--sm">-->
        <!--                <div class="g-text-center--xs">-->
        <!--                    <div class=" g-margin-b-0--xs">-->
        <!--                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white  g-margin-b-0--xs js__counter">350</figure>-->
        <!--                        <span class="g-font-size-40--xs g-color--white">+</span>-->
        <!--                    </div>-->
        <!--                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>-->
        <!--                    <h4 class="g-font-size-18--xs g-color--white">Startups</h4>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-md-3 col-xs-6 g-full-width--xs">-->
        <!--                <div class="g-text-center--xs">-->
        <!--                    <div class=" g-margin-b-0--xs">-->
        <!--                        <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">15</figure>-->
        <!--                        <span class="g-font-size-40--xs g-color--white">+</span>-->
        <!--                    </div>-->
        <!--                    <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>-->
        <!--                    <h4 class="g-font-size-18--xs g-color--white">Speakers</h4>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- End Counter -->

        <div class="container g-padding-y-10--xs g-padding-y-40--sm" id="register">
            <div class="row">
                <div class="col-md-12 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                    <div class="wow fadeInLeft g-text-center--xs" data-wow-duration=".3" data-wow-delay=".3s">
                        <h2 class="g-font-size-32--xs g-font-size-36--sm g-font-size-36--md ">Register <span class="g-color--primary">Now</span></h2>
                    </div>
                </div>
                <div class="container" >
                    <div class="well">
                        <h1 style="text-align:center">JUGAAD'18</h1>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="well col-lg-4">
                        <form class="form-horizontal" method ="post" action="index.php">
                            <div class="form-group">
                                <select class="form-control" name="SIZE" required>
                                    <option value="">TEAM SIZE</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <input type="submit" name="insert" value="NEXT" class="btn btn-info" style="text-align: center">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
        </div>

        <div class="jugaad">
            <div class="container g-padding-y-0--xs g-padding-y-0--sm" id="jugaad">

                <!-- End Swiper Clients -->
                <div class="row">
                    <div class="col-md-14 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <!--<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Ecell</p>-->
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-padding-x-20--xs g-color--white">Jugaad</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-1">
                        <p class="g-font-size-18--xs g-color--white"><i>“A youth without fire is followed by an old age without experience.”</i></p>
                            <p class="g-font-size-18--xs g-color--white">The Youth are not only leaders of tomorrow, but also partners of today. We at E-Cell VNIT are an
                            inspired young team of individuals with a shared mission; a mission to change the world.<br>With India witnessing a radical change in the mindset
                            of people towards Entrepreneurship there is a rising need to address the grass root challenges of development and focus on making
                            the world self-reliant through both – individual and cooperative efforts.</p>
                            <p class="g-font-size-18--xs g-color--white">Jugaad is an annual event which aims to create an inexorable spirit of entrepreneurship amongst
                            students, with the freshmen as particular consideration for the Club. It aims to function as a guide in the form of a fun event for students
                            with creative ideas which can be transformed into successful street level transactions.<br>The event has been a roaring success
                            in the years gone by, and the fun filled learning that the event has provided in the past stands as a firm testimony to the same.</p>


                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback Form -->
        <div class="g-bg-color--sky-light" id="contact">
            <div class="container g-padding-y-0--xs g-padding-y-0--sm">
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Contact</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Mail Us</h2>
                </div>
                <form method="post" action="">
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" name="name" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" name="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <input type="text" name="phone" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" name="message" placeholder="* Your message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                    </div>
                </form>
                <div class="g-text-center--xs" id="confirm"></div>
                <div class="g-text-center--xs g-margin-b-40--xs">
                    <br><br>
                    <p class="text-uppercase g-font-size-14--xs g-color--dark g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs">Or Need Any Help? Contact: <a href="team.php">Team</a></p>
                </div>
            </div>
        </div>
        <!-- End Feedback Form -->

        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("footer.php");?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
        <div class="overlay-session" id="yash">
            <button onclick="hide_overlay('yash')" id="close-session">X</button>
            <h3><b>Data Analytics by Yash Gandhi</b></h3>
            <h4>About the Speaker</h4>
            <ul>
                <li>Yash Gandhi,</li>
                <li>Lead Statistician,</li>
                <li>Helpshift,</li>
                <li>Purdue University</li>
            </ul>
            <p><b>Date : </b><b>24<sup>th</sup> August, 2017</b><p>
            <h4>Insights</h4>
            <p>
                Data science, also known as data-driven science, is an interdisciplinary field of scientific
                methods, processes, and systems to extract knowledge or insights from data in various forms,
                either structured or unstructured, similar to data mining.
                Data science is a "concept to unify statistics, data analysis and their related methods" in
                order to "understand and analyze actual phenomena" with data.
            </p>
            <p>Here's a look at some of the key Big Data trends entrepreneurs need to be aware of today:</p>
            <ul>
                <li>Heavier emphasis on predictive analytics</li>
                <li>Deep learning</li>
                <li>The rise of the data engineer</li>
                <li>Shifting away from Hadoop</li>
                <li>Big Data-as-a-Self Service</li>
            </ul>
        </div>

        <div class="overlay-session" id="ibhubs">
            <button onclick="hide_overlay('ibhubs')" id="close-session">X</button>
            <h3><b>Idea Generation And Validation</b></h3>
            <h4>About the Speaker</h4>
            <ul>
                <li>IB Hubs,</li>
                <li>Lead Statistician,</li>
                <li>Helpshift,</li>
                <li>Purdue University</li>
            </ul>
            <p><b>Date : </b><b>24<sup>th</sup> August, 2017</b><p>
            <h4>Insights</h4>
            <p>Comming Soon..</p>
        </div>
        <div class="overlay-session" id="frese">
            <button onclick="hide_overlay('frese')" id="close-session">X</button>
            <h3><b>Error Management</b></h3>
            <br>
            <h4>About the Speaker</h4>
            <ul>
                <li>Michael Frese,</li>
                <li>Provost's Chair,</li>
                <li>Head of Department,</li>
                <li>National University of Singapore</li>
            </ul>
            <br>
            <b>Date : </b><b>30<sup>th</sup> November, 2017</b>
            <br><br>
            <h4>Insights</h4>
            <p>
                Every organization is confronted with errors. Most errors are corrected easily,
                but some may lead to negative consequences. Organizations often focus on error
                prevention as a single strategy for dealing with errors. Our review suggests
                that error prevention needs to be supplemented by error management—an approach
                directed at effectively dealing with errors after they have occurred, with the
                goal of minimizing negative and maximizing positive error consequences
                (examples of the latter are learning and innovations). After defining errors
                and related concepts, we review research on error-related processes affected
                by error management (error detection, damage control). Empirical evidence on
                positive effects of error management in individuals and organizations is then
                discussed, along with emotional, motivational, cognitive, and behavioral
                pathways of these effects. Learning from errors is central, but like other
                positive consequences, learning occurs under certain circumstances—one being
                the development of a mind-set of acceptance of human error.
            </p>

        </div>

        <div class="overlay-session" id="chawala">
            <button onclick="hide_overlay('chawala')" id="close-session">X</button>
            <h3><b>Desiging a BPlan</b></h3>
            <h4>About the Speaker</h4>
            <ul type="none">
                <li>Devesh Chawla,</li>
                <li>CEO & Founder,</li>
                <li>Chatur Ideas</li>
            </ul>
            <b>Date : </b><b>04<sup>th</sup> January, 2018</b>
            <h4>Insights</h4>
            <div>
                <ul>
                    <li>
                        What is a business plan?
                        <ol type="a" start="1">
                            <li>Why prepare a business plan?</li>
                            <li>What to avoid in your business plan</li>
                        </ol>
                    </li>
                    <li>
                        Business Plan Format
                        <ol type="a" start="3">
                            <li>Vision statement</li>
                            <li>The people</li>
                            <li>Business profile</li>
                            <li>Economic assessment</li>
                        </ol>
                     </li>
                     <li>
                         Eight Steps to a Great Business Plan
                         <ol type="a" start="7">
                             <li>Set time aside to prepare</li>
                             <li>Focus and refine concept</li>
                             <li>Gather data</li>
                             <li>Outline the specifics of your business</li>
                             <li>Include experience</li>
                             <li>Put your plan into a compelling form</li>
                             <li>Enhance with graphics</li>
                             <li>Share draft with trusted advisers</li>
                         </ol>
                     </li>
                     <li>
                         Does Your Plan Include the Following Necessary Factors
                         <ol type="a" start="15">
                             <li>A sound business concept</li>
                             <li>Understanding your market</li>
                             <li>Healthy, growing and stable industry</li>
                             <li>Capable management</li>
                             <li>Able financial control</li>
                             <li>Consistent business focus</li>
                             <li>Mindset to anticipate change</li>
                             <li>Plans for online business</li>
                         </ol>
                     </li>
                </ol>
            </div>

        </div>

        <div class="overlay-session" id="abrahams">
            <button onclick="hide_overlay('abrahams')" id="close-session">X</button>
            <h3><b>Web Session by Matt Abrahams</b></h3>
            <br>
            <h4>About:</h4>
            <ul type="none">
                <li>Matt Abrahams,</li>
                <li>Lectures on organizational behavior,</li>
                <li>Stanford Graduate School of Business</li>
                <li>Author of <i>Speaking Up Without Freaking Out</i></li>
                <li><b>TEDx Speaker</b> on <i>“Think fast, talk smart”</i></li>
            </ul>
            <b>Date : </b><b>03<sup>rd</sup> February, 2018</b>
            <h4>In his words:</h4>
            <p><i>
                As a communication professor and coach, I hear a lot from presenters about anxiety.
                Their two greatest fears are that they will forget what to say and that the audience
                won’t remember what was spoken. These fears are certainly understandable, but create
                much angst among nervous and novice presenters. In this series of posts, I will suggest
                several steps you can take to make your presentations more memorable for everyone.
            </i></p>

        </div>
        <!-- Atractions overlays-->
        <!--<div class="overlay-session" id="inaug">-->
        <!--    <button onclick="hide_overlay('inaug')" id="close-session">X</button>-->
        <!--    <h3 style="text-align:center;"><b>Inauguration</b></h3>-->

        <!--    <div class="container">-->
        <!--        <div class="row guest">-->
        <!--            <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>-->
        <!--            <div class="col-md-7 col-sm-6 col-xs-12 guest-content">-->
        <!--                <h3>Guest1</h3>-->
        <!--                <p>"Sed ut perspiciatis unde omnis iste natus error-->
        <!--                sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa-->
        <!--                quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.-->
        <!--                </p>-->

        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row guest">-->
        <!--            <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>-->
        <!--            <div class="col-md-7 col-sm-6 col-xs-12 guest-content">-->
        <!--                <h3>Guest1</h3>-->
        <!--                <p>"Sed ut perspiciatis unde omnis iste natus error-->
        <!--                sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa-->
        <!--                quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.-->
        <!--                </p>-->

        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row guest">-->
        <!--            <div class="col-md-5 col-sm-6 col-xs-12 guest-img"><img src="img/970x970/01.jpg"/></div>-->
        <!--            <div class="col-md-7 col-sm-6 col-xs-12 guest-content">-->
        <!--                <h3>Guest1</h3>-->
        <!--                <p>"Sed ut perspiciatis unde omnis iste natus error-->
        <!--                sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa-->
        <!--                quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.-->
        <!--                </p>-->

        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->


        <!--    <br>-->



        <!--</div>-->

        <!--<div class="overlay-session" id="day2">-->
        <!--    <button onclick="hide_overlay('day2')" id="close-session">X</button>-->
        <!--    <h3><b>Day2</b></h3>-->
        <!--    <p>Stay Tuned...</p>-->
        <!--    <br>-->



        <!--</div>-->

        <!--<div class="overlay-session" id="day3">-->
        <!--    <button onclick="hide_overlay('day3')" id="close-session">X</button>-->
        <!--    <h3><b>Day3</b></h3>-->
        <!--    <p>Stay Tuned...</p>-->
        <!--    <br>-->



        <!--</div>-->


        </div>


        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="/js/cards.js"></script>
		<script src="/js/materialize.js"></script>


        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Plz! Fill the form</p>');
    location.replace(\"#contact\");
</script>
");

   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

require_once "Mail.php";
#include("Mail.php");
$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = "<contact@ecellvnit.org>";
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
   echo("
<script type=\"text/javascript\">
    $('#confirm').append('<br><p class=\"text-uppercase g-font-size-14--xs g-font-weight--400 g-letter-spacing--2 g-margin-b-25--xs\">Your Message Sent!</p>');
</script>
");
}

$from = "E-CELL VNIT <noreply@ecellvnit.org>";    //your mail id
$to = $email_address;
$subject = "Thank You For Contacting us";
$body = "Thank You $name for Contacting us.\n\nWe will surely contact you soon.\n\nFor instant support contact\nName: Meghna Bhave\nEmail: meghna.bhave@gmail.com\nPhone: 8368255076";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "noreply@ecellvnit.org";          //your mail id
$password = "Ecellvnit123@";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
}
}
?>
