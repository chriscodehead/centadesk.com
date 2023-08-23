<div style="width: 100%; font-size: 13px; padding-top: 3px; padding-bottom: 3px;"><a href="tel:<?php print $sitePhone;?>"><em style="padding-left: 50px;" class="fa fa-phone"></em> <?php print $sitePhone;?></a> | <a href="mailto:<?php print $siteEmail;?>"><em class="fa fa-envelope"></em> <?php print $siteEmail;?></a></div>

<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="./">
                    <img src="img/logo-main.png" srcset="./img/logo-main.png 2x" alt="" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0"><?php print $siteName;?></h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"><em class="fa fa-close"></em></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-bs-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="about">About Us</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="team">Our Team</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="career">Career & Jobs</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="portfolio">Portfolio</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blockchain">Blockchain</a>
                        </li>
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link" href="insight">Insight</a>
                        </li>-->
                    </ul>
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:<?php print $siteEmail;?>" class="link-inverse"><span class="__cf_email__" data-cfemail="9ff6f1f9f0dffaf2fef6f3b1fcf0f2"><?php print $siteEmail;?></span></a>
                            <br /> <?php print $sitePhone;?> <br />
                            <nav class="nav social social-white mt-4">
                                <a target="_blank" href="https://twitter.com/centadesk"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="https://web.facebook.com/centadesk"><i class="fa fa-facebook-f"></i></a>
                                <a target="_blank" href="https://instagram.com/centadesk"><i class="fa fa-instagram"></i></a>
                                <a target="_blank" href="https://linkedin.com/centadesk"><i class="fa fa-linkedin"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCUiZ6uTAzA4j40LVbLVKqIA"><i class="fa fa-youtube"></i></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item dropdown language-select text-uppercase">
                        <a href="contact"><button class="btn btn-primary fs-10">Request Quote</button></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="fa fa-gear"></i></a></li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0"><img src="img/logo-white-main.png" width="150"></h3>
            <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-close"></i></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p class="fs-15">Problem-solving is one of the most vital and basic skill which is required by every one of us in the 21st century. At <?php print $siteName;?> that what we are all about solving your day to day needs.</p>
            </div>
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> <?php print $siteAddress;?> </address>
                <a href="mailto:<?php print $siteEmail;?>"><span class="__cf_email__" data-cfemail="c5acaba3aa85a0a8a4aca9eba6aaa8"><?php print $siteEmail;?></span></a><br /> <a href="tel:<?php print $sitePhone;?>"><?php print $sitePhone;?></a>
            </div>

            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a target="_blank" href="https://twitter.com/centadesk"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="https://web.facebook.com/centadesk"><i class="fa fa-facebook-f"></i></a>
                    <a target="_blank" href="https://instagram.com/centadesk"><i class="fa fa-instagram"></i></a>
                    <a target="_blank" href="https://linkedin.com/centadesk"><i class="fa fa-linkedin"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCUiZ6uTAzA4j40LVbLVKqIA"><i class="fa fa-youtube"></i></a>
                </nav>
            </div>
        </div>
    </div>
</header>