<?php
session_start();
$advisor_id = 0;
if (isset($_SESSION['faculty_id'])) {
   $advisor_id = $_SESSION['faculty_id'];
   $advisor_name = $_SESSION['username'];
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

      <title>Advisor | Reports</title>

      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="css/sb-admin.css" rel="stylesheet">

      <!-- Morris Charts CSS -->
      <link href="css/plugins/morris.css" rel="stylesheet">

      <!-- Custom Fonts -->
      <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <!--my css to make it sidebar scrollable-->
      <link href="css/del.css" rel="stylesheet" type="text/css"/>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

   </head>

   <body>

      <div id="wrapper">

         <?php
         include 'nav_bar.php';
         ?>
          
          <div id="page-wrapper">

            <div class="container-fluid">

               <!-- Page Heading -->
               <div class="row">
                  <div class="col-lg-12">
                     <h1 class="page-header">
                        Send report <small>to your Head of Department</small>
                     </h1>
                     <ol class="breadcrumb">
                        <li class="active">
                           <i class="fa fa-cloud-upload"></i> Please be sure to save MS Word documents as PDFs before uploading
                        </li>
                     </ol>
                  </div>
               </div>
               <!-- /row -->
               <div class="col-lg-6 col-md-6 col-lg-offset-3">
                     <div class="panel panel-primary">
                        <div class="panel-heading">
                           <div class="row">
                              <div class="col-xs-3">
                                 <i class="fa fa-tasks fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                 <div class="huge">Upload your documents here</div>
                                 <!--<div>Messages</div>-->
                              </div>
                           </div>
                        </div>
                        
                           <div class="panel-footer">
                               <div>
                                      <form action="advisor_upload.php" method="post" enctype="multipart/form-data"> 
                                        <input class="btn btn-primary" type="file" name="myFile">
                                        <br>
                                        <input class="btn btn-success" type="submit" value="Upload">
                                      </form>

                     <?php
                     if (isset($_REQUEST['wtv'])) {
                        
                        include_once '../models/advisor_upload_class.php';
                        
                        $obj = new advisor_upload_class();
                        $obj->add_report_from_advisor($advisor_id, $_REQUEST['path']);
                        
                        print("Uploaded");
                     }
                     ?>
                                        
                              </div>
                              
                           </div>
                        
                     </div>
                  </div>
            </div>
              <!--container -->
          </div>
          <!-- /page wrapper -->
      </div>
       <!-- /wrapper -->
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
</html>