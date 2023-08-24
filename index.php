<?php //require_once('lib.php');
require_once('include.php');
$title = $siteName . ' | Software development company';
$description = $siteName . ': ICT company in Nigeria, provides organizations with professional ICT training, consulting services, and software development solutions';
$keyword = 'Digital Marketing Company, IT Consulting Firms, ICT Training Academy, Web Design, Mobile Apps, Digital Marketer, ICT Consultancy, SEO, Node.js, Python, HTML, CSS, Javascript, JQuery, PHP, Laravel, Codeigniter, Graphics, Animation, Flutter, Ui/UX Design';
require_once('head.php');
?>

<body>
    <div class="content-wrapper">
        <?php require_once('header.php'); ?>

        <section class="wrapper bg-gradient-primary">
            <div class="container pt-10 pt-md-14 pb-12 text-center">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="img/centadesk-creative-hub-academy-Innovate.jpg" alt="" /></figure>
                    </div>
                    <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
                        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Grow Your Business with Our Solutions.</h1>
                        <p class="lead fs-lg mb-7">Web Development, Mobile App Development, Desktop, SEO, Digital Marketing, Blockchain, IOT, IT Training & Consulting.<br>
                        </p>
                        <span><a href="contact" class="btn btn-primary rounded-pill me-2">Request a quote</a></span>
                    </div>
                </div>
            </div>
        </section>


        <section class="wrapper bg-soft-primary angled upper-end">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7">
                        <h2 class="fs-36 text-uppercase text-line text-primary mb-3">Our Schools</h2>
                        <h3 class="display-4 mb-9">Get ready to revolutionize the world of tech.</h3>
                    </div>

                </div>

                <div class="swiper-container blog grid-view" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="assets/img/photos/b4.jpg" alt="" /></a>
                                    </figure>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="assets/img/photos/b5.jpg" alt="" /></a>
                                    </figure>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="assets/img/photos/b6.jpg" alt="" /></a>
                                    </figure>
                                </article>
                            </div>

                            <div class="swiper-slide">
                                <article>
                                    <figure class="overlay overlay-1 hover-scale rounded mb-6"><a href="#"> <img src="assets/img/photos/b7.jpg" alt="" /></a>
                                    </figure>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-0 py-md-0">

                <hr style="display: none;" class="my-14 my-md-10" />
                <div style="display: none;" class="row text-center">
                    <div class="col-xl-10 mx-auto">
                        <h2 class="fs-30 text-uppercase text-dark mb-3">Our Schools</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 mx-auto">

                        <?php $sql = query_sql("SELECT * FROM $course_cat_tb ORDER BY id DESC");
                        $i = 1;
                        if (mysqli_num_rows($sql) > 0) {
                            while ($row = mysqli_fetch_assoc($sql)) { ?>

                                <option value="<?php print $row['course_id']; ?>"><?php print $row['title']; ?></option>

                        <?php }
                        } ?>

                        <div class="job-list mb-10">
                            <h3 class="mb-4">Product School</h3>

                            <a href="creativehubacademy/" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">PD</span> Product Design (UI/UX) </span>
                                    </span>

                                </div>
                            </a>

                            <a href="https://api.whatsapp.com/send?phone=2348098862800&text=Hello,%20I%20have%20a%20question%20about%20http%3A%2F%2Flocalhost%2Fcentadesk.com%2F" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">PM</span> Product Management </span>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="job-list mb-10">
                            <h3 class="mb-4">Design School</h3>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">GD</span> Graphics Design </span>
                                    </span>

                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">BM</span> Branding </span>
                                    </span>
                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-yellow text-white w-9 h-9 fs-17 me-3">WD</span> Front End Web Design </span>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="job-list">
                            <h3 class="mb-4">SoftWare Development School</h3>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">WD</span> Web Development (Full-Stack) </span>
                                    </span>
                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">FD</span> Front End Web Development</span>
                                    </span>
                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">BD</span> Back End Web Development</span>
                                    </span>
                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-orange text-white w-9 h-9 fs-17 me-3">MD</span> Mobile APP Development </span>
                                    </span>
                                </div>
                            </a>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-orange text-white w-9 h-9 fs-17 me-3">PS</span> Python Scripting </span>
                                    </span>
                                </div>
                            </a>


                        </div>

                        <div class="job-list">
                            <h3 class="mb-4">Data School</h3>

                            <a href="#" class="card mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar bg-purple text-white w-9 h-9 fs-17 me-3">DA</span> Data Analysis </span>
                                    </span>
                                </div>
                            </a>



                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="wrapper bg-light">
            <div class="container pt-14 pt-md-16">
                <div class="row text-center">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">What We Do?</h2>
                        <h3 class="display-4 mb-10 px-xl-10">The service we offer is specifically designed to meet your needs.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="position-relative">
                    <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
                    <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5 text-center">
                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4>SEO Services</h4>
                                    <a href="services" class="hover link-yellow">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>Web Development</h4>
                                    <a href="services" class="hover link-red">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/smartphone.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4>App Development</h4>
                                    <a href="services" class="hover link-yellow">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>Web Design</h4>
                                    <a href="services" class="hover link-red">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                    <h4>Social Engagement</h4>
                                    <a href="services" class="hover link-green">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/tools.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                    <h4>ICT Training</h4>
                                    <a href="services" class="hover link-blue">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>UI/UX</h4>
                                    <a href="services" class="hover link-red">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/microphone.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                    <h4>Content Marketing</h4>
                                    <a href="services" class="hover link-blue">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/server.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>Blockchain</h4>
                                    <a href="services" class="hover link-red">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/headphone-2.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                    <h4>ICT Consultancy</h4>
                                    <a href="services" class="hover link-blue">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/shopping-cart.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                                    <h4>Digital Marketing</h4>
                                    <a href="services" class="hover link-red">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <img src="assets/img/icons/lineal/laptop.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
                                    <h4>Desktop App</h4>
                                    <a href="services" class="hover link-blue">Learn More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-gradient-reverse-primary">
            <div class="container py-16 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <figure><img class="w-auto" src="assets/img/illustrations/i3.png" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Take Action</h2>
                        <h3 class="display-4 mb-5">Wonder how much faster your business can go? </h3>
                        <p class="mb-7">We deliver maximum business value in today’s fierce digital market. Give use a try today.</p>
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-floating input-group">
                                    <a href="contact"><button class="btn btn-primary" type="button">Contact Us</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light angled upper-start lower-start">
            <div class="container py-14 pt-md-17 pb-md-15">
                <div class="row gx-md-8 gx-xl-12 gy-10 mb-14 mb-md-18 align-items-center">

                    <div class="col-lg-6">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Our Strategy</h2>
                        <h3 class="display-4 mb-5">Here are 3 working steps to organize your business projects.</h3>
                        <p>We develop complete projects and provide top-notch online, mobile, and IT solutions thanks to our significant competence in a variety of business fields and our in-depth understanding of contemporary technology.
                        </p>
                        <p class="mb-6">We create unique software products that are catered to the unique business requirements of our clients and support them every step of the way, from conception to execution.</p>
                        <p class="mb-6">Our strong foundation, adaptability, and complete openness helped us establish ourselves as a reliable technological partner for our clients. The name <?php print $siteName; ?> is a byword for premium goods and services.</p>
                        <a href="about" class="btn btn-primary rounded-pill mb-0">Learn More</a>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow-lg me-lg-6">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">01</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Real-Time Communication</h4>
                                        <p class="mb-0">For real-time cooperation, our programmers operate within your near shore time zone. We want to create a genuine "branch location" atmosphere. We employ frequent management and progress reports to integrate accountability and openness into our methodology.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-lg ms-lg-13 mt-6">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">02</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Scalable Business Model</h4>
                                        <p class="mb-0">We collaborate with you to identify the areas that will benefit you the most. Our adaptable business model allows you the freedom to change the size of your committed team at any stage of the lifecycle in accordance with your demands.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-lg mx-lg-6 mt-6">
                            <div class="card-body p-6">
                                <div class="d-flex flex-row">
                                    <div>
                                        <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span class="number">03</span></span>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Finalize Product</h4>
                                        <p class="mb-0">Utilize distributed ledger technology and blockchain to enable reliable data interchange and process automation outside of the box.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-lg-22 mb-xl-24 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="assets/img/illustrations/i6.png" alt="" /></figure>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Why Choose Us?</h2>
                        <h3 class="display-4 mb-7">We bring solutions to make life easier for our clients.</h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">

                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><em class="fa fa-plus-circle text-primary"></em> Effectiveness </button>
                                </div>

                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>- A team with a wide range of skills and years of industry experience.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><em class="fa fa-plus-circle text-primary"></em> Top-Notch Support </button>
                                </div>

                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>- Excellent customer service and assistance was given.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><em class="fa fa-plus-circle text-primary"></em> Innovation </button>
                                </div>

                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>- Developing cutting-edge solutions for our clients while utilizing the most recent technology.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><em class="fa fa-plus-circle text-primary"></em> Quality </button>
                                </div>

                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>- Careful attention to detail to create applications of the highest caliber.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-gradient-primary">
            <div class="container py-14 pt-md-16 pb-md-18">
                <div class="position-relative mt-8 mt-lg-n23 mt-xl-n25">
                    <div class="row text-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                            <h2 class="fs-16 text-uppercase text-muted mb-3">Happy Clients</h2>
                            <h3 class="display-4 mb-10 px-md-13 px-lg-4 px-xl-0">Hear what our clients have to say.</h3>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="shape bg-dot blue rellax w-16 h-17" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem; z-index: 0;"></div>
                        <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem; z-index: 0;"></div>
                        <div class="row grid-view gy-6 gy-xl-0">
                            <div class="col-md-6 col-xl-3">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <img class="rounded-circle w-15 mb-4" src="img/Aneke-Micheal-Web-Developer.jpg" alt="" />
                                        <h4 class="mb-1">Aneke Micheal</h4>
                                        <div class="meta mb-2">Content Developer</div>
                                        <p class="mb-2"><?php print $siteName; ?> is the best place you can think of when talk about TECH. They have experts who are well trained to handle your projects. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <img class="rounded-circle w-15 mb-4" src="img/Eze-Daniel-Ifeanyi.jpg" alt="" />
                                        <h4 class="mb-1">Daniel Ifeanyi</h4>
                                        <div class="meta mb-2">Musician</div>
                                        <p class="mb-2">You can always identify a tech expert by their ability to communicate with ICT related issues and that is what you get here at <?php print $siteName; ?>.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <img class="rounded-circle w-15 mb-4" src="img/Nnamani-Okechukwu-Felix.jpg" alt="" />
                                        <h4 class="mb-1">Okechukwu Felix</h4>
                                        <div class="meta mb-2">Hotel Manager</div>
                                        <p class="mb-2"> One of the best ICT firms in the south east. Visit them today and have a new and better experience when it come to ICT services.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card shadow-lg">
                                    <div class="card-body">
                                        <img class="rounded-circle w-15 mb-4" src="img/Edewor-Onyedika-Goodman.jpg" alt="" />
                                        <h4 class="mb-1">Edewor Goodman</h4>
                                        <div class="meta mb-2">Software Developer</div>
                                        <p class="mb-2">Working with this awesome team is one of the best experience i have got in my years in the tech field. They are simply amazing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light pb-8">
            <div class="container">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <figure><img class="w-auto" src="assets/img/illustrations/i8.png" alt="" /></figure>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Our Solutions</h2>
                        <h3 class="display-4 mb-5">We make your process stress-free for you to have the perfect control.</h3>
                        <p class="mb-6">We deliver highly scalable, flexible, and interoperable online, mobile, desktop, and hybrid applications by leveraging our knowledge with industry-specific technologies.</p>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="fa fa-check"></i></span><span>Website Development </span></li>
                                    <li class="mt-3"><span><i class="fa fa-check"></i></span><span>Software Development </span></li>
                                </ul>
                            </div>

                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                    <li><span><i class="fa fa-check"></i></span><span>ICT Consultancy and research </span></li>
                                    <li class="mt-3"><span><i class="fa fa-check"></i></span><span>Search Engine Optimization </span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section s class="wrapper bg-light angled upper-end lower-end">
            <div class="container py-14 pt-md-14 pb-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-14 align-items-center">
                    <div class="col-lg-7">
                        <figure><img class="w-auto" src="assets/img/illustrations/i5.png" alt="" /></figure>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="fs-16 text-uppercase text-muted mb-3">Let’s Talk</h2>
                        <h3 class="display-4 mb-3">Let's make something great together. We are trusted by over 500+ clients.</h3>
                        <p>Our goal is to help businesses by developing specialized technology solutions. In our opinion, the best approach to prepare for these changes is to be equipped with the necessary skills and technological know-how to march the tides. As the world rapidly becomes a global community, technological advancements are making their imprint.</p>
                        <a href="contact" class="btn btn-primary rounded-pill mt-2">Join Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light angled upper-end">
            <div class="container py-14 py-md-16">
                <div class="row">
                    <div class="col-lg-9 col-xl-8 col-xxl-7">
                        <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Our Products</h2>
                        <h3 class="display-4 mb-9">Check out some of our awesome projects with creative ideas and great design.</h3>
                    </div>
                </div>
                <!-- /.row -->
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

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
    <?php require_once('footer.php'); ?>