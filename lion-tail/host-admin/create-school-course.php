<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova2aa = 'active';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php require_once('../../emails_lib.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>

<?php
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
  if (query_sql("DELETE FROM $school_course_tb WHERE `id`='" . $_GET['delete'] . "' LIMIT 1")) {
    $msg = 'Delete process was successful!';
    header("location:edit-school-course?done=" . $msg);
  } else {
    $msg = 'Info Faild to delete!';
    header("location:edit-school-course?done=" . $msg);
  }
}
?>

<?php
$msg = '';
$img_error2 = '';
$img_error = '';

if (isset($_POST['post'])) {
  $covercode = $_POST['covercode'];
  $title = $_POST['title'];
  $url = $_POST['url'];
  $course_cat = $_POST['course_cat'];
  if (!empty($covercode) && !empty($url) && !empty($title) && !empty($course_cat)) {

    $fieldup = array("id", "course_cat", "title", "url", "cover", "date_add");
    $valueup = array(null, $course_cat, $title, $url, $covercode, $bassic->getDate2());
    $update = $cal->insertDataB($school_course_tb, $fieldup, $valueup);
    if (!empty($update)) {
      $sel = mysqli_query($link, "SELECT * FROM user_tb");
      while ($row = mysqli_fetch_array($sel)) {
        //$email_call->MailDispatcha($row['email'], $msg, $title, $download);
      }
      //$msg = $update;
      if ($update == 'Registration was successful. Proceed to login!') {
        $msg = 'Created Successfully!';
      } else {
        $msg = $update;
      }
    } else {/*do nothing*/
    }
  } else {
    $msg = 'Please fill all fields';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Upload Course | ';
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
            <h3 class="page-header"><i class="fa fa-laptop"></i> Course</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
              <li><i class="fa fa-laptop"></i><a href="view-school-course"> View School Courses</a></li>
            </ol>
          </div>
        </div>

        <?php if (!empty($msg)) { ?>
          <div class="row">
            <div id="go" class=" col-lg-12">
              <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
            </div>
          </div>
        <?php } else { ?>
          <div class="row">
            <div id="go" class=" col-lg-12">
              <div id="go" class="alert alert-warning" style="text-align: center; color:#000;"><!-- NOTE: All Courses post here will automatically be forwarded to all registered members email in this site ensure you handle with all accuracy. <i id="remove" class="fa fa-remove pull-right"></i> --></div>
            </div>
          </div>
        <?php } ?>
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="" method="post" enctype="multipart/form-data">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tbody>
                  <tr>
                    <td> School</td>
                    <td> <select class="form-control" name="course_cat">
                        <option value="">Select School</option>
                        <?php $sql = query_sql("SELECT * FROM $course_cat_tb ORDER BY id DESC");
                        $i = 1;
                        if (mysqli_num_rows($sql) > 0) {
                          while ($row = mysqli_fetch_assoc($sql)) { ?>

                            <option value="<?php print $row['course_id']; ?>"><?php print $row['title']; ?></option>

                        <?php }
                        } ?>

                      </select>
                      <a href="create-school-category">Create School Category</a>
                    </td>
                  </tr>

                  <tr>
                    <td>Course Title</td>
                    <td><input class="form-control" value="" name="title">
                    </td>
                  </tr>

                  <tr>
                    <td> Cover Code</td>
                    <td> <input name="covercode" type="text" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td> Page Link</td>
                    <td> <input name="url" type="text" class="form-control" id="" /></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="post" value="Post" /></td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div><!--/.row-->



        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>List of courses</h3>
            <?php $select->allSchoolCourse(); ?>
          </div>
        </div>

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