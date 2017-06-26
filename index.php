<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Victoria University of Wellington">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Victoria - Educational, Course and University Template</title>

</head>

<body class="page-homepage-carousel">
<!-- Wrapper -->
<div class="wrapper">
<?php include 'header.php';?>

<!-- Page Content -->
<div id="page-content">
<!-- Slider -->
<div id="homepage-carousel">
    <div class="container">
        <div class="homepage-carousel-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="image-carousel">
                        <div class="image-carousel-slide"><img src="assets/img/slide-1.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="assets/img/slide-2.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="assets/img/slide-3.jpg" alt=""></div>
                    </div><!-- /.slider-image -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-5">
                    <div class="slider-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Join the comunity of modern thinking students</h1>
                                <form id="slider-form" role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Full Name" type="text">
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="slider-email" id="slider-email" placeholder="Email" type="email">
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <form method="get" action="#" class="form-inline">
                                                    <select name="study-level" class="has-dark-background">
                                                        <option value="">Study Level</option>
                                                        <option value="2">Beginner</option>
                                                        <option value="3">Advanced</option>
                                                        <option value="4">Intermediate</option>
                                                        <option value="5">Professional</option>
                                                    </select>
                                                </form>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <form method="get" action="#" class="form-inline">
                                                    <select name="courses" class="has-dark-background">
                                                        <option value="">Courses</option>
                                                        <option value="2">Art and Design</option>
                                                        <option value="3">Marketing</option>
                                                        <option value="4">Science</option>
                                                        <option value="5">History and Psychology</option>
                                                    </select>
                                                </form>
                                            </div><!-- /.form-group -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <button type="submit" class="btn btn-framed pull-right">Submit</button>
                                </form>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.slider-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="background"></div>
        </div><!-- /.slider-wrapper -->
        <div class="slider-inner"></div>
    </div><!-- /.container -->
</div>
<!-- end Slider -->

<!-- News, Events, About -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <section class="news-small" id="news-small">
                    <header>
                        <h2>News</h2>
                    </header>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                        </article><!-- /article -->
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                        </article><!-- /article -->
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                        </article><!-- /article -->
                    </div><!-- /.section-content -->
                    <a href="#" class="read-more stick-to-bottom">All News</a>
                </section><!-- /.news-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <section class="events small" id="events-small">
                    <header>
                        <h2>Events</h2>
                        <a href="#" class="link-calendar">Calendar</a>
                    </header>
                    <div class="section-content">
                        <article class="event nearest">
                            <figure class="date">
                                <div class="month">jan</div>
                                <div class="day">18</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.php">Conservatory Exhibit: The garden of india a country and culture revealed</a>
                                </header>
                                <div class="additional-info">Matthaei Botanical Gardens</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event nearest-second">
                            <figure class="date">
                                <div class="month">feb</div>
                                <div class="day">01</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.php">February Half-Term Activities: Big Stars and Little Secrets </a>
                                </header>
                                <div class="additional-info clearfix" >Pitt Rivers and Natural History Museums</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event">
                            <figure class="date">
                                <div class="month">mar</div>
                                <div class="day">23</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.php">The Orchestra of the Age of Enlightenment perform with Music</a>
                                </header>
                                <div class="additional-info">Faculty of Music</div>
                            </aside>
                        </article><!-- /article -->
                    </div><!-- /.section-content -->
                </section><!-- /.events-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12">
                <section id="about">
                    <header>
                        <h2>About Victoria</h2>
                    </header>
                    <div class="section-content">
                        <img src="assets/img/students.jpg" alt="" class="add-margin">
                        <p><strong>Welcome o Victoria.</strong>Find out more about Victoria University of Wellington, New Zealand’s globally ranked capital city university, and all that it has to offer. </p>
                        <a href="#" class="read-more stick-to-bottom">Read More</a>
                    </div><!-- /.section-content -->
                </section><!-- /.about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end News, Events, About -->

<!-- Testimonial -->
<section id="testimonials">
    <div class="block">
        <div class="container">
            <div class="author-carousel">
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="assets/img/student-testimonial.jpg" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>The class representative provides a useful way to communicate feedback to the teaching staff during the course. They also work with the VUWSA Education Office on any academic issues that arise in their course. Reps are elected by students by the third week of classes every trimester. Being a rep requires a weekly commitment.</header>
                                <footer>Claire Doe</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
                <div class="author">
                    <blockquote>
                        <figure class="author-picture"><img src="assets/img/student-testimonial.jpg" alt=""></figure>
                        <article class="paragraph-wrapper">
                            <div class="inner">
                                <header>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor.
                                    Ut sollicitudin lectus dolor eget imperdiet libero pulvinar sit amet.</header>
                                <footer>Claire Doe</footer>
                            </div>
                        </article>
                    </blockquote>
                </div><!-- /.author -->
            </div><!-- /.author-carousel -->
        </div><!-- /.container -->
    </div><!-- /.block -->
</section>
<!-- end Testimonial -->

<!-- Academic Life, Campus Life, Newsletter -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="academic-life">
                    <header>
                        <h2>Academic Life & Research</h2>
                    </header>
                    <div class="section-content">
                        <ul class="list-links">
                            <li><a href="#">Programs and Areas</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Graduate & Postdoctoral Programs</a></li>
                            <li><a href="#">Continuing Studies</a></li>
                            <li><a href="#">International Activities</a></li>
                            <li><a href="#">Course Calendars & Listings</a></li>
                        </ul>
                    </div><!-- /.section-content -->
                </section><!-- /.academic-life -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <section id="campus-life">
                    <header>
                        <h2>Campus Life</h2>
                    </header>
                    <div class="section-content">
                        <ul class="list-links">
                            <li><a href="#">Athletics & Recreation</a></li>
                            <li><a href="#">Clubs & Extra-curricular Activities</a></li>
                            <li><a href="#">Health & Wellness</a></li>
                            <li><a href="#">Housing & Residence</a></li>
                            <li><a href="#">Arts & Culture</a></li>
                            <li><a href="#">Student IT Services</a></li>
                        </ul>
                    </div><!-- /.section-content -->
                </section><!-- /.campus-life -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-4 col-sm-4">
                <section id="newsletter">
                    <header>
                        <h2>Newsletter</h2>
                        <div class="section-content">
                            <div class="newsletter">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your e-mail">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </div><!-- /.newsletter -->
                            <p class="opacity-50">Learn to design and creatively apply emerging and established technology to solve problems with the School of Engineering and Computer Science.

Our innovative and flexible programmes will prepare you for successful careers as digital engineers and computer scientists. Work with students from all over the world in an inspiring and supportive learning environment.
                            </p>
                        </div><!-- /.section-content -->
                    </header>
                </section><!-- /.newsletter -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Academic Life, Campus Life, Newsletter -->

<!-- Divisions, Connect -->
<div class="block">
    <div class="container">
        <div class="block-dark-background">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <section id="division" class="has-dark-background">
                        <header>
                            <h2>Divisions</h2>
                        </header>
                        <div class="section-content">
                            <ul class="list-links">
                                <li><a href="#">Accounting & Finance</a></li>
                                <li><a href="#">Advertising & Marketing</a></li>
                                <li><a href="#">Architecture & Interior</a></li>
                                <li><a href="#">Arts & Design</a></li>
                                <li><a href="#">Broadcasting & Journalism</a></li>
                                <li><a href="#">Business & Management</a></li>
                                <li><a href="#">Computing & IT</a></li>
                            </ul>
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div>
                <div class="col-md-9 col-sm-8">
                    <section id="connect" class="has-dark-background">
                        <header>
                            <h2>Connect</h2>
                        </header>
                        <div class="connect-block">
                            <div class="row">
                                <div class="col-md-3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="#tab-twitter" data-toggle="pill"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li><a href="#tab-facebook" data-toggle="pill"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-twitter">
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>15 minutes ago</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                   Enrolment and course advice
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>2 hours ago</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                    Student conduct and feedback
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post twitter-post">
                                                <header>February 02, 2014</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                   Examinations and assessments
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                    </div><!-- /.tab-twitter -->
                                    <div class="tab-pane fade" id="tab-facebook">
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>30 minutes ago</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                    Ut at arcu sed justo laoreet iaculis ut nec leo. Aliquam laoreet orci eu egestas fermentum.
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>4 days ago</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis.
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                        <div class="col-md-3">
                                            <article class="social-post facebook-post">
                                                <header>One week ago</header>
                                                <figure><a href="#">@Victoria</a></figure>
                                                <p>
                                                    Nullam odio augue, accumsan ut massa ut, faucibus gravida turpis. Nulla eleifend libero mi, at consequat tellus.
                                                    <a href="http://bit.ly/1bMyz64">http://bit.ly/1bMyz64</a>
                                                </p>
                                            </article><!-- /.twitter-post -->
                                        </div>
                                    </div><!-- /.tab-twitter -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.row -->
                        </div><!-- /.section-content -->
                    </section><!-- #.divisions -->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.block-dark-background -->
    </div><!-- /.container -->
</div>
<!-- end Divisions, Connect -->

<!-- Our Professors, Gallery -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <section id="our-professors">
                    <header>
                        <h2>Our Professors</h2>
                    </header>
                    <div class="section-content">
                        <div class="professors">
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="member-detail.php"><img src="assets/img/professor.jpg" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="member-detail.php">Prof. Mathew Davis</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Applied Science and Engineering</figure>
                                    </header>
                                    <a href="member-detail.php" class="show-profile">Show Profile</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <article class="professor-thumbnail">
                                <figure class="professor-image"><a href="member-detail.php"><img src="assets/img/professor-02.jpg" alt=""></a></figure>
                                <aside>
                                    <header>
                                        <a href="member-detail.php">Prof. Jane Stairway</a>
                                        <div class="divider"></div>
                                        <figure class="professor-description">Applied Science and Engineering</figure>
                                    </header>
                                    <a href="member-detail.php" class="show-profile">Show Profile</a>
                                </aside>
                            </article><!-- /.professor-thumbnail -->
                            <a href="#" class="read-more stick-to-bottom">All Professors</a>
                        </div><!-- /.professors -->
                    </div><!-- /.section-content -->
                </section><!-- /.our-professors -->
            </div><!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-8">
                <section id="gallery">
                    <header>
                        <h2>Gallery</h2>
                    </header>
                    <div class="section-content">
                        <ul class="gallery-list">
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-01.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-02.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-03.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-04.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-05.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-06.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-07.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-08.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-09.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-10.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-11.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-12.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-13.jpg" alt=""></a></li>
                            <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-14.jpg" alt=""></a></li>
                        </ul>
                        <a href="#" class="read-more">Go to Gallery</a>
                    </div><!-- /.section-content -->
                </section><!-- /.gallery -->
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Our Professors, Gallery -->

<!-- Partners, Make a Donation -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section id="partners">
                    <header>
                        <h2>Partners & Donors</h2>
                    </header>
                    <div class="section-content">
                        <div class="logos">
                            <div class="logo"><a href="#"><img src="assets/img/logo-partner-01.png" alt=""></a></div>
                            <div class="logo"><a href="#"><img src="assets/img/logo-partner-02.png" alt=""></a></div>
                            <div class="logo"><a href="#"><img src="assets/img/logo-partner-03.png" alt=""></a></div>
                            <div class="logo"><a href="#"><img src="assets/img/logo-partner-04.png" alt=""></a></div>
                            <div class="logo"><a href="#"><img src="assets/img/logo-partner-05.png" alt=""></a></div>
                        </div>
                    </div>
                </section>
            </div><!-- /.col-md-9 -->
            <div class="col-md-3 col-sm-3">
                <section id="donation">
                    <header>
                        <h2>Make a Donation</h2>
                    </header>
                    <div class="section-content">
                        <a href="#" class="universal-button">
                            <h3>Support the University of Victoria!</h3>
                            <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                        </a>
                    </div><!-- /.section-content -->
                </section>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Partners, Make a Donation -->
</div>
<!-- end Page Content -->

<!-- Footer -->
<?php include 'footer.php';?>
<!-- end Footer -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>