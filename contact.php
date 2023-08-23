<?php require_once('lib.php');

function contactUsMail($name, $email, $subject, $message, $phone)
{
    $to  = 'chrischikabox@gmail.com';
    $subject = 'Client is trying to contact you';
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h6 align="center"><img src="https://centadesk.com/img/logo-main.png" /></h6>
<div>
<h4>' . $subject . '</h4>
<p> ' . $message . '</p>
<p>
<strong>Client Contact Details:</strong><br />
Name: ' . $name . '<br />
Email: ' . $email . '<br />
Phone: ' . $phone . '
</p>
 </div>
</body>
</html>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Centadesk <info@centadesk.com>' . "\r\n";
    //$retval = @mail($to, $subject, $content, $headers);
    if ($retval = true) {
        autoReplyMail($name, $email, $subject);
        return  'Mail sent successfully';
    } else {
        return 'Internal error. Mail fail to send';
    }
}

function autoReplyMail($name, $email, $subj)
{
    $to  = $email;
    $subject = 'AutoReply Centadesk';
    $message = 'Your message has been received. Thanks for contacting us. We will get back to you as soon as posible.';
    $content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h6 align="center"><img src="https://centadesk.com/img/logo-main.png" /></h6>
<div>
<p>
<strong>Hi ' . $name . '</strong><br />
</p>
<p> ' . $message . '</p>
<br />
<p> Best Regards<br />
Suppot Team
</p>
<br />
<p>For more detail contact us:<p>
<p>Email:info@centadesk.com</p>
<p>Phone: +2348098862800 </p>
 </div>
</body>
</html>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Centadesk <info@centadesk.com>' . "\r\n";
    //$retval = @mail($to, $subject, $content, $headers);
    if ($retval = true) {
        return   'Mail sent successfully';
    } else {
        return  'Internal error. Mail fail to send';
    }
}
$msg = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message)) {
        $msg = contactUsMail($name, $email, $subject, $message, $phone);
    } else {
        $msg = 'Please fill all necessary fields';
    }
}


$title = 'Contact '.$siteName.' | Ui/Ux Designer in Nigeria, Enugu, Abuja, Lagos';
$description = 'Best UI/UX company in Nigeria, Enugu, Lagos, Abuja';
$keyword = 'website development company in Enugu, Web Design, Android App Development, ICT Training Centres in Enugu, Web Designers in Nigeria, Computer Training Centers in Enugu, Website Design Company';
require_once('head.php'); ?>
    <body>
<div class="content-wrapper">

    <?php require_once('header.php');?>

    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="assets/img/photos/bg3.jpg">
        <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-1 mb-3 text-white">Get in Touch</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb text-white">
                            <li class="breadcrumb-item"> <a href="./"> Home &nbsp; </a> </li>
                            <li class=" active" aria-current="page"> | Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-light angled upper-end">
        <div class="container pb-11">
            <div class="row mb-14 mb-md-16">
                <div class="col-xl-10 mx-auto mt-n19">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-6 align-self-stretch">
                                <div class="map map-full rounded-top rounded-lg-start">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.760239458032!2d7.494344214035901!3d6.424843226086617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a16f213d43b7%3A0xf02ff4e98e39792d!2s3%20Kenyatta%20St%2C%20Uwani%20400105%2C%20Enugu!5e0!3m2!1sen!2sng!4v1657396504943!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-10 p-md-11 p-lg-14">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa fa-map-marker"></i> </div>
                                        </div>
                                        <div class="align-self-start justify-content-start">
                                            <h5 class="mb-1">Address</h5>
                                            <address><?php print $siteAddress;?></address>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa fa-phone"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">Phone</h5>
                                            <p><?php print $sitePhone?></p>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row">
                                        <div>
                                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="fa fa-envelope"></i> </div>
                                        </div>
                                        <div>
                                            <h5 class="mb-1">E-mail</h5>
                                            <p class="mb-0"><a href="mailto:<?php print $siteEmail;?>" class="link-body"><span class="__cf_email__" ><?php print $siteEmail;?></span></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center">Drop Us a message</h2>
                    <p class="lead text-center mb-10">Reach out to us from our contact form and we will get back to you shortly.</p>
                    <!--<form class="contact-form" enctype="multipart/form-data" method="post" action="" novalidate>
                        <?php if (!empty($msg)) { ?>
                            <div id="message" class="alert alert-success alert-dismissible"><?php print $msg; ?></div>
                        <?php } ?>
                        <div class="messages"></div>
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                                    <label for="form_name">Name *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your first name. </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_phone" type="text" name="phone" class="form-control" placeholder="08000012300" required>
                                    <label for="form_lastname">Phone *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your last name. </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                                    <label for="form_email">Email *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please provide a valid email address. </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject *" required>
                                    <label for="form_subject">Subject *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please select a department. </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                                    <label for="form_message">Message *</label>
                                    <div class="valid-feedback"> Looks good! </div>
                                    <div class="invalid-feedback"> Please enter your messsage. </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <input type="submit" name="submit" class="btn btn-primary rounded-pill mb-3" value="Send message">
                                <p class="text-muted"><strong>*</strong> These fields are required.</p>
                            </div>
                        </div>
                    </form>-->
                    <div class="col-12 text-center">
                                <a href="https://wa.me/08098862800?text=Am contacting you for enquires."><input type="submit" name="submit" class="btn btn-primary rounded-pill mb-3" value="Send message"></a>
                                <p class="text-muted"><strong>*</strong> Let's Talk.</p>
                            </div>

                </div>
            </div>
        </div>
    </section>

</div>
<?php require_once('footer.php');?>