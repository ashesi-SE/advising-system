<?php
$faculty_id = 0;

if (isset($_SESSION['faculty_id'])) {
   $faculty_id = $_SESSION['faculty_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title> HOD | Reports</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="css/sb-admin.css" rel="stylesheet">

      <!-- Morris Charts CSS -->
      <link href="css/plugins/morris.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

   </head>

   <body>

      <div id="wrapper">

         <!-- Navigation -->
         <?php
         include_once './nav_bar_hod.php';
         ?>

         <div id="page-wrapper">

            <div class="container-fluid">

               <!-- Page Heading -->
               <div class="row">
                  <div class="col-lg-12">
                     <h1 class="page-header">
                        Calender <small>Your Schedule for the Month</small>
                     </h1>
                     <ol class="breadcrumb">
                        <li class="active">
                           <i class="fa fa-dashboard"></i> Meeting times with advisees
                        </li>
                     </ol>


                  </div>
               </div>

               <div class="row">
                   <div class="col-lg-6 col-md-6 col-lg-offset-3">
                     <div class="panel panel-danger">
                        <div class="panel-heading">
                           <div class="row">
                              <div class="col-xs-3">
                                 <i class="fa fa-tasks fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                 <div class="huge">Send Report</div>
                                 <!--<div>Messages</div>-->
                              </div>
                           </div>
                        </div>
                        
                           <div class="panel-footer">
                               <form action="upload.php" method="post" enctype="multipart/form-data"> 
                                  <input class="btn btn-danger" type="file" name="myFile">
                                  <br>
                                  <input class="btn btn-success" type="submit" value="Upload">
                               </form>

                     <?php
                     if (isset($_REQUEST['wtv'])) {
                        
                        include_once '../models/uploader_class.php';
                        
                        $obj = new uploader_class();
                        $obj->uploader($advisor_id, $_REQUEST['path']);
                        
                        print("Uploaded");
                     }
                     ?>
                                        
                              </div>
                              
                           </div>
                        
                     </div>
                  </div>
                  
               </div>


               <div class="row">
                  <div class="col-lg-12">


                  </div>
               </div>
               <!--            </div>-->
               <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

         </div>
         <!-- /#page-wrapper -->

      </div>
      <!-- /#wrapper -->


   </body>

   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-md-offset-1">
                  <p class="text-muted">&copy; 2014 - Team SMAKK</p>
               </div>
            </div>

         </div>
      </div>
   </footer>

   <!-- jQuery -->
   <script src="js/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-1.11.0.js" type="text/javascript"></script>
   <script src="js/jquery.dataTables.js" type="text/javascript"></script>
   <script src="js/dataTables.bootstrap.js" type="text/javascript"></script>

   <!-- Morris Charts JavaScript -->
<!--   <script src="js/plugins/morris/raphael.min.js"></script>
   <script src="js/plugins/morris/morris.min.js"></script>
   <script src="js/plugins/morris/morris-data.js"></script>-->
   <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

   <script src="js/del.js" type="text/javascript"></script>

   <script>

      $(document).ready(function () {
//            debugger
//         $('#dataTables-example').dataTable();
//         $('#dataTables-example1').dataTable();
      });


      $(function () {
//            debugger
         $('#datetimepicker1').datetimepicker();
         $('#datetimepicker2').datetimepicker();
         $('#datetimepicker3').datetimepicker();
         $('#datetimepicker4').datetimepicker();
         $('#datetimepicker5').datetimepicker();
         $('#datetimepicker6').datetimepicker();
      });
   </script>


</html>
