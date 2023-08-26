<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9 = '';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>
<?php if (isset($_GET['id-ter']) && !empty($_GET['id-ter'])) {
    $user_id = $_GET['id-ter'];
} else {
    header("location:all-users");
} ?>
<?php
$msg = '';
//update wallet address
if (isset($_POST['subW'])) {
    $wallet_address = mysqli_real_escape_string($link, htmlentities($_POST['wallet']));
    $E_address = mysqli_real_escape_string($link, htmlentities($_POST['walletE']));
    $pm = mysqli_real_escape_string($link, htmlentities($_POST['pm']));
    if (!empty($wallet_address)) {
        $fieldW = array('wallet_address', 'ethereum_wallet_address', 'perfectmoney');
        $valueW = array($wallet_address, $E_address, $pm);
        $msg = $cal->update($user_tb, $fieldW, $valueW, 'email', $user_id);
    }
}
?>
<?php
if (isset($_POST['subP'])) {
    $pic_name  = $_FILES['pic']['name'];
    $pic_tmp = $_FILES['pic']['tmp_name'];
    $pic_size = $_FILES['pic']['size'];
    $passportIn = $cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
    if (!empty($pic_name)) {
        $gen_Num = $bassic->randGenerator();
        $extension_Name = $bassic->extentionName($pic_name);
        $new_name = $gen_Num . $extension_Name;
        $path = '../../photo/' . $new_name;
        $picvalidation = $bassic->picVlidator($pic_name, $pic_size);
        if (empty($picvalidation)) {
            $bassic->unlinkFile($passportIn, '../photo/');
            $upl = $bassic->uploadImage($pic_tmp, $path);
            if (empty($upl)) {
                $fieldP = array('passport');
                $valueP = array($new_name);
                $msg = $cal->update($user_tb, $fieldP, $valueP, 'email', $user_id);
            } else {
                $msg = $upl;
            }
        } else {
            $msg = $picvalidation;
        }
    } else {
        $msg = 'Please fill all fields!';
    }
}
?>
<?php
if (isset($_POST['sub'])) {
    $name = mysqli_real_escape_string($link, htmlentities($_POST['name']));
    $sex = mysqli_real_escape_string($link, htmlentities($_POST['sex']));
    $country = mysqli_real_escape_string($link, htmlentities($_POST['country']));
    $phone = mysqli_real_escape_string($link, htmlentities($_POST['phone']));
    $referral = mysqli_real_escape_string($link, htmlentities($_POST['referral']));
    $email = mysqli_real_escape_string($link, htmlentities($_POST['email']));
    $email_activation = mysqli_real_escape_string($link, htmlentities($_POST['email_activation']));
    $payment_activation_status = mysqli_real_escape_string($link, htmlentities($_POST['payment_activation_status']));
    $dob = mysqli_real_escape_string($link, htmlentities($_POST['dob']));
    $employment_status = mysqli_real_escape_string($link, htmlentities($_POST['employment_status']));
    $experience_level = mysqli_real_escape_string($link, htmlentities($_POST['experience_level']));
    $learning_device = mysqli_real_escape_string($link, htmlentities($_POST['learning_device']));
    $learning_hours = mysqli_real_escape_string($link, htmlentities($_POST['learning_hours']));
    $payment_method = mysqli_real_escape_string($link, htmlentities($_POST['payment_method']));
    $hear_about_us = mysqli_real_escape_string($link, htmlentities($_POST['hear_about_us']));
    $learning_interest = mysqli_real_escape_string($link, htmlentities($_POST['learning_interest']));
    //$amount_paid = mysqli_real_escape_string($link, htmlentities($_POST['amount_paid']));
    //$actual_amount = mysqli_real_escape_string($link, htmlentities($_POST['actual_amount']));

    if (!empty($name) && !empty($phone)) {
        $fieldA = array('first_name', 'sex', 'country', 'phone', 'email_activation', 'payment_activation_status', 'dob', 'employment_status', 'experience_level', 'learning_device', 'learning_hours', 'payment_method', 'hear_about_us', 'learning_interest');
        $valueA = array($name, $sex, $country, $phone, $email_activation, $payment_activation_status, $dob, $employment_status, $experience_level, $learning_device, $learning_hours, $payment_method, $hear_about_us, $learning_interest);
        $msg = $cal->update($user_tb, $fieldA, $valueA, 'email', $user_id);
    } else {
        $msg = 'Please fill all fields';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Users Profile | The Best Bitcoin Mining Company';
require_once('head.php') ?>

<body>
    <!-- container section start -->
    <section id="container" class="" style="margin-bottom:100px;">
        <?php require_once('header.php') ?>
        <?php require_once('sidebar.php') ?>
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i> Profile</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
                            <li><i class="fa fa-laptop"></i> My Profile</li>
                        </ol>
                    </div>
                </div>

                <?php if (!empty($msg)) { ?>
                    <div class="row">
                        <div id="go" class=" col-lg-12">
                            <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
                        </div>
                    </div>
                <?php } ?>


                <div class="row">
                    <!-- profile-widget -->
                    <div class="col-lg-12">
                        <div class="profile-widget profile-widget-info">
                            <div class="panel-body">
                                <div class="col-lg-2 col-sm-2">
                                    <h4><?php print @'Hi ' . $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?></h4>
                                    <div class="follow-ava">
                                        <img src="../../photo/<?php if ($cal->selectFrmDB($user_tb, 'passport', 'email', $user_id) == 'passport') {
                                                                    print 'avata.png';
                                                                } else {
                                                                    print @$cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
                                                                } ?>" alt="profile picture">
                                    </div>

                                </div>
                                <div class="col-lg-10 col-sm-10 follow-info">
                                    <p>Hello I’m <?php print $cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>, a proud member of <?php print @$siteName; ?>.</p>
                                    <p><i class="fa fa-envelope"></i> Email: <?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?></p>
                                    <p><i class="fa fa-twitter"></i> Phone: <?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?></p>
                                    <h6>
                                        <p><i class="icon_clock_alt"></i> Date Reg.: <?php print @$cal->selectFrmDB($user_tb, 'date_reg', 'email', $user_id); ?></p>
                                        <p><i class="icon_calendar"></i> Country: <?php print @$cal->selectFrmDB($user_tb, 'country', 'email', $user_id); ?></p>
                                        <span><i class="icon_pin_alt"></i> Referral Link: <a target="_blank" href="<?php print $siteLink; ?>?ref=<?php print @$cal->selectFrmDB($user_tb, 'client_username', 'email', $user_id); ?>"><u> <?php print $siteLink; ?>?ref=<?php print @$cal->selectFrmDB($user_tb, 'client_username', 'email', $user_id); ?></u></a></span>
                                    </h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">



                            <div class="panel-body">
                                <div class="tab-content">



                                    <!-- edit-profile -->
                                    <div id="edit-profile" class="">
                                        <section class="panel">
                                            <div class="panel-body bio-graph-info">


                                                <h1> Profile Picture Info</h1>
                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Profile Picture</label>
                                                        <div class="col-lg-6">
                                                            <input name="pic" type="file">
                                                        </div>

                                                        <div style="margin-top: 20px;" class="col-lg-6">
                                                            <img src="../../photo/<?php if ($cal->selectFrmDB($user_tb, 'passport', 'email', $user_id) == 'passport') {
                                                                                        print 'avata.png';
                                                                                    } else {
                                                                                        print @$cal->selectFrmDB($user_tb, 'passport', 'email', $user_id);
                                                                                    } ?>" width="90" height="83" alt="passport-segaminer">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="subP" class="btn btn-primary">Update Profile Picture</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <h1> Profile Info</h1>

                                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Name</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'first_name', 'email', $user_id); ?>" class="form-control" id="f-name" name="name" placeholder=" ">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Sex</label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" name="sex" id="sex">
                                                                <option selected="selected" value="">Select your Gender</option>
                                                                <?php $sex = $cal->selectFrmDB($user_tb, 'sex', 'email', $user_id); ?>
                                                                <option <?php if ($sex == 'Male') echo 'selected="selected"'; ?> value="Male">Male</option>
                                                                <option <?php if ($sex == 'Female') echo 'selected="selected"'; ?> value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Country</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php print @$cal->selectFrmDB($user_tb, 'country', 'email', $user_id); ?>" class="form-control" id="l-name" name="country" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Email</label>
                                                        <div class="col-lg-6">
                                                            <input readonly type="text" name="email" value="<?php print @$cal->selectFrmDB($user_tb, 'email', 'email', $user_id); ?>" class="form-control" id="email" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Phone</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="phone" value="<?php print @$cal->selectFrmDB($user_tb, 'phone', 'email', $user_id); ?>" class="form-control" id="mobile" placeholder=" ">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">your Referral</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="referral" value="<?php print @$cal->selectFrmDB($user_tb, 'referral_username', 'email', $user_id); ?>" class="form-control" id="url" placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Payment Status </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="payment_activation_status" value="<?php print @$cal->selectFrmDB($user_tb, 'payment_activation_status', 'email', $user_id); ?>" class="form-control" id="payment_activation_status" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Date of Birth </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="dob" value="<?php print @$cal->selectFrmDB($user_tb, 'dob', 'email', $user_id); ?>" class="form-control" id="dob" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Employment Status </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="employment_status" value="<?php print @$cal->selectFrmDB($user_tb, 'employment_status', 'email', $user_id); ?>" class="form-control" id="employment_status" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Experience Level </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="experience_level" value="<?php print @$cal->selectFrmDB($user_tb, 'experience_level', 'email', $user_id); ?>" class="form-control" id="experience_level" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Learning Hours </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="learning_hours" value="<?php print @$cal->selectFrmDB($user_tb, 'learning_hours', 'email', $user_id); ?>" class="form-control" id="learning_hours" placeholder="">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Learning Interest</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="learning_interest" value="<?php print @$cal->selectFrmDB($user_tb, 'learning_interest', 'email', $user_id); ?>" class="form-control" id="learning_interest" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Payment Method</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="payment_method" value="<?php print @$cal->selectFrmDB($user_tb, 'payment_method', 'email', $user_id); ?>" class="form-control" id="payment_method" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Hear About us</label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="hear_about_us" value="<?php print @$cal->selectFrmDB($user_tb, 'hear_about_us', 'email', $user_id); ?>" class="form-control" id="hear_about_us" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Learning Device </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="learning_device" value="<?php print @$cal->selectFrmDB($user_tb, 'learning_device', 'email', $user_id); ?>" class="form-control" id="learning_device" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Email Activation</label>
                                                        <div class="col-lg-6">
                                                            <select class="form-control" name="email_activation" id="email_activation">
                                                                <option selected="selected" value="">Select Status</option>
                                                                <?php $email_activation = $cal->selectFrmDB($user_tb, 'email_activation', 'email', $user_id); ?>
                                                                <option <?php if ($email_activation == 'yes') echo 'selected="selected"'; ?> value="yes">Yes</option>
                                                                <option <?php if ($email_activation == 'no') echo 'selected="selected"'; ?> value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div style="display: none;" class="form-group">
                                                        <label class="col-lg-2 control-label">Amount Paid </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="amount_paid" value="<?php print @$cal->selectFrmDB($user_tb, 'amount_paid', 'email', $user_id); ?>" class="form-control" id="amount_paid" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div style="display: none;" class="form-group">
                                                        <label class="col-lg-2 control-label">Actual Amount </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="actual_amount" value="<?php print @$cal->selectFrmDB($user_tb, 'actual_amount', 'email', $user_id); ?>" class="form-control" id="actual_amount" placeholder="">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" name="sub" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>

                                            </div>
                                            </form>
                                    </div>
                        </section>
                    </div>

                </div>
                </div>
            </section>
            </div>
            </div>
            <!-- page end-->
        </section>

        <!--main content end-->
    </section>
    <!-- container section start -->
    </section>
    <!-- javascripts -->
    <?php require_once('jsfiles.php') ?>
    <!-- charts scripts -->
</body>

</html>