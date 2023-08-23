<?php require_once('lib.php');
$title = 'Portfolio | Seo Company in Nigeria';
$description = 'Best Team of software developer in Nigeria, Enugu, Abuja, Lagos';
$keyword = 'website development company in Enugu, Web Design, Android App Development, ICT Training Centres in Enugu, Web Designers in Nigeria, Computer Training Centers in Enugu, Website Design Company';
require_once('head.php'); ?>
    <body>
<div class="content-wrapper">

    <?php require_once('header.php');?>

    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-5 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto mb-11">
                    <h1 class="fs-15 text-uppercase text-primary mb-3"></h1>
                    <h3 class="display-1">We bring solutions to make life easier for our customers.</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light angled upper-end">
        <div class="container py-5 py-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Our Products</h2>
                    <h3 class="display-4 mb-9">Check out some of our awesome projects with creative ideas and great design.</h3>
                </div>
            </div>

            <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="https://libraclass.com"> <img src="img/libraclass-image.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="https://libraclass.com">Libraclass Online Learning </a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="fa fa-calendar-alt"></i><span>14 Apr 2022</span></li>
                                        <li class="post-comments"><a href="https://libraclass.com"><i class="fa fa-file-alt fs-15"></i>Online Class</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="https://sydmondfoundation.org"> <img src="img/Sydmond-Foundation-Screenshot.jpg" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Explore</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="https://sydmondfoundation.org">Sydmond Foundation </a></h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="fa fa-calendar-alt"></i><span>14 Apr 2022</span></li>
                                        <li class="post-comments"><a href="https://sydmondfoundation.org"><i class="fa fa-file-alt fs-15"></i>Charity Organization</a></li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php require_once('footer.php');?>