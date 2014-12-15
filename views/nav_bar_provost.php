<?php
session_start();

$advisor_id = 0;
if (isset($_SESSION['faculty_id'])) {

   $advisor_id = $_SESSION['faculty_id'];
   $advisor_name = $_SESSION['username'];
}
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">The Advisory System</a>
   </div>
   <!-- Top Menu Items -->
   <ul class="nav navbar-right top-nav">
      <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php print($_SESSION['firstname'] . " " . $_SESSION['lastname']) ?> <b class="caret"></b></a>

         <ul class="dropdown-menu">
            <!--            <li class="divider"></li>-->
            <li>
               <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
            </li>
         </ul>
      </li>
      <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
   </ul>

   <!--////////////////////////////////////////////////////////////////////////////////////////////
   ////////////////////////////////////////////////////////////////////////////-->

   <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
   <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav bs-docs-sidebar" id="sidebar">
         <li class="active">
            <a href="provost_home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
         </li>
         <li>
            <a href="provost_home.php"><i class="fa fa-fw fa-wrench"></i> Advisors & Advisees</a>
         </li>
         <li>
            <a href="provost_assign.php"><i class="fa fa-fw fa-edit"></i> Assign Students</a>
         </li>
         <li>
            <a href="view_reports_from_hod.php"><i class="fa fa-fw fa-edit"></i> View Reports</a>
         </li>
         <!--         <li>
                     <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Student List <i class="fa fa-fw fa-caret-down"></i></a>
                     <ul id="demo" class="collapse">
                  </li>
         <?php
//                        print "dafaf";
//                        $advisor_id = 1;
         include_once '../models/advisor_class.php';
         $adv_obj = new advisor_class();
         if ($adv_obj->get_advisees($advisor_id)) {
            $row = $adv_obj->fetch();

            while ($row) {

<<<<<<< HEAD
<<<<<<< HEAD
               print "<li>" . "<a href='advisor_student_details.php?student_name=" . $row["first_name"] . " " . $row["last_name"] ."&student_id=".$row['student_id']. "'>" . "<i class='fa fa-fw fa-bar-chart-o'></i>";
=======
               print "<li>" . "<a href='advisor_student_details.php?student_name=" . $row["first_name"] . " " . $row["last_name"] . "'>" . "<i class='fa fa-fw fa-bar-chart-o'></i>";
>>>>>>> origin/messages_plus_hod
=======
               print "<li>" . "<a href='advisor_student_details.php?student_name=" . $row["first_name"] . " " . $row["last_name"] ."&student_id=".$row['student_id']. "'>" . "<i class='fa fa-fw fa-bar-chart-o'></i>";
>>>>>>> 60f55b0fa66cdc4e78d246a9063614faf6eef817
               print $row["first_name"] . " " . $row["last_name"];
               print"</a>" . "</li>";

               $row = $adv_obj->fetch();
            }
         }
         ?>
               </ul>
               </li>-->
      </ul>
   </div>
   <!-- /.navbar-collapse -->
</nav>