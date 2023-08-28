<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9 = '';
$actova23aa = 'active'; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php $bassic->checkLogedINAdmin('login'); ?>

<?php
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
 if (query_sql("DELETE FROM $course_enrollment_tb WHERE `id`='" . $_GET['delete'] . "' LIMIT 1")) {
  $msg = 'Delete process was successful!';
  header("location:edit-student-enrollments?done=" . $msg);
 } else {
  $msg = 'Info Faild to delete!';
  header("location:edit-student-enrollments?done=" . $msg);
 }
}
?>
<?php if (isset($_GET['done']) && !empty($_GET['done'])) {
 $msg = $_GET['done'];
} ?>

<?php
$msg = '';
if (isset($_GET['id']) && !empty($_GET['id'])) {
} else {
 //header("location:message-activater");
}
if (isset($_POST['post'])) {
 $course_cat = $_POST['course_cat'];
 $course_title = $_POST['course_title'];
 $student_email  = $_POST['student_email'];
 $amount_paid  = $_POST['amount_paid'];
 $actual_amount  = $_POST['actual_amount'];
 $enrollment_status  = $_POST['enrollment_status'];
 $batch  = $_POST['batch'];
 $start_date  = $_POST['start_date'];
 $end_date  = $_POST['end_date'];
 $reg_date = $_POST['reg_date'];
 if (!empty($course_cat) && !empty($student_email)) {

  $fieldup = array('course_cat', 'course_title', 'student_email', 'amount_paid', 'actual_amount', 'enrollment_status', 'batch', 'start_date', 'end_date', 'reg_date');
  $valueup = array($course_cat, $course_title, $student_email, $amount_paid, $actual_amount, $enrollment_status, $batch, $start_date, $end_date, $reg_date);
  $update = $cal->update($course_enrollment_tb, $fieldup, $valueup, 'id', $_GET['id']);
  if (!empty($update)) {
   $msg = $update;
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
$title = 'Edit Course Enrollment |';
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
       <li><i class="fa fa-home"></i><a href="edit-student-enrollments">Course Enrollment</a></li>
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


    <?php if (isset($_GET['id']) && !empty($_GET['id'])) { ?>

     <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <form action="" method="post" enctype="multipart/form-data">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
         <tbody>
          <tr>
           <td> Course Category</td>
           <td> <select class="form-control" name="course_cat">
             <?php $cat = $cal->selectFrmDB($course_enrollment_tb, 'course_cat', 'id', $_GET['id']); ?>
             <option value="">Select Category</option>
             <?php $sql = query_sql("SELECT * FROM $course_cat_tb ORDER BY id DESC");
             $i = 1;
             if (mysqli_num_rows($sql) > 0) {
              while ($row = mysqli_fetch_assoc($sql)) { ?>

               <option <?php if ($cat == $row['course_id']) {
                        print 'selected="selected"';
                       } ?> value="<?php print $row['course_id']; ?>"><?php print $row['title']; ?></option>

             <?php }
             } ?>

            </select>
            <a href="create-school-category">Create School Category</a>
           </td>
          </tr>

          <tr>
           <td>Course Title</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'course_title', 'id', $_GET['id']) ?>" name="course_title">
           </td>
          </tr>

          <tr>
           <td>Student Email</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'student_email', 'id', $_GET['id']) ?>" name="student_email">
           </td>
          </tr>

          <tr>
           <td>Amount Paid</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'amount_paid', 'id', $_GET['id']) ?>" name="amount_paid">
           </td>
          </tr>

          <tr>
           <td>Actual Amount</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'actual_amount', 'id', $_GET['id']) ?>" name="actual_amount">
           </td>
          </tr>

          <tr>
           <td>Enrollment Status (eg: yes/no)</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'enrollment_status', 'id', $_GET['id']) ?>" name="enrollment_status">
           </td>
          </tr>

          <tr>
           <td>Batch (eg: 1.0, 2.0, 3.0, ....)</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'batch', 'id', $_GET['id']) ?>" name="batch">
           </td>
          </tr>

          <tr>
           <td>Start Date</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'start_date', 'id', $_GET['id']) ?>" name="start_date">
           </td>
          </tr>

          <tr>
           <td>End Date</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'end_date', 'id', $_GET['id']) ?>" name="end_date">
           </td>
          </tr>

          <tr>
           <td>Registration Date</td>
           <td><input class="form-control" value="<?php echo @$cal->selectFrmDB($course_enrollment_tb, 'reg_date', 'id', $_GET['id']) ?>" name="reg_date">
           </td>
          </tr>


          <tr>
           <td></td>
           <td><input class="btn btn-primary" type="submit" name="post" value="Post" /></td>
          </tr>
         </tbody>
        </table>
       </form>
      </div>
     </div>

    <?php } else {
    } ?>
    <!--/.row-->

    <div class="row">
     <div class="col-md-12 col-lg-12 col-sm-12">
      <div class="panel">
       <div class="panel-heading">Recent Transactions</div>
       <div class="table-responsive">
        <table class="table table-hover manage-u-table">
         <thead>
          <tr>
           <th class="text-center">#</th>
           <th data-priority="1">Course Category</th>
           <th data-priority="3">Course Title </th>
           <th data-priority="1"> Student Email</th>
           <th data-priority="1"> Amount Paid</th>
           <th data-priority="1"> Actual Amount</th>
           <th data-priority="1"> Enrollment Status</th>
           <th data-priority="1"> Batch</th>
           <th data-priority="1"> Start Date</th>
           <th data-priority="1"> End Date</th>
           <th data-priority="1"> Reg. Date</th>
           <th data-priority="1"> Edit</th>
           <th data-priority="1"> Remove</th>
          </tr>
         </thead>
         <tbody>
          <?php $sql = query_sql("SELECT * FROM $course_enrollment_tb ORDER BY id DESC");
          $i = 1;
          if (mysqli_num_rows($sql) > 0) {
           while ($row = mysqli_fetch_assoc($sql)) {
          ?>
            <tr>
             <th class="text-center"><?php print $i; ?></th>
             <td><?php print $row['course_cat']; ?></td>
             <td><?php print $row['course_title']; ?></span></td>
             <td><?php print $row['student_email']; ?> </td>
             <td><?php print $row['amount_paid']; ?> </td>
             <td><?php print $row['actual_amount']; ?> </td>
             <td><?php print $row['enrollment_status']; ?> </td>
             <td><?php print $row['batch']; ?> </td>
             <td><?php print $row['start_date']; ?> </td>
             <td><?php print $row['end_date']; ?> </td>
             <td><?php print $row['reg_date']; ?> </td>
             <td><a href="edit-student-enrollments?id=<?php print $row['id']; ?>"><i class="btn btn-default fa fa-edit"></i></a></td>
             <td><a data-toggle="modal" href="#myModullDEL<?php print $row['id']; ?>" title="Remove"><i class="btn btn-default fa fa-trash-o"></i></a></td>
            </tr>


            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModullDEL<?php print $row['id']; ?>" class="modal fade">
             <div class="modal-dialog">
              <div class="modal-content">
               <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete Data ?</h4>
               </div>
               <div class="modal-body">
                <p>Are you sure you want to delete this data</p>
               </div>
               <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <a href="edit-student-enrollments?del=<?php print $row['id']; ?>">
                 <span class="btn btn-theme">Delete</span>
                </a>
               </div>
              </div>
             </div>
            </div>
            <!-- modal -->


           <?php $i++;
           }
          } else { ?><tr>
            <td colspan="5">
             <h3>No data found!</h3>
            </td>
           </tr>
          <?php } ?>
         </tbody>
        </table>
       </div>
      </div>
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