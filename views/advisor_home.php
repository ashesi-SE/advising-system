<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Advisor | Home</title>

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
         include_once './nav_bar.php';
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
                  <div class="col-lg-6 col-md-6">
                     <div class="panel panel-red">
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover table-striped" id="dataTables-example">  
                                 <thead>
                                    <tr>
                                       <th> #</th>
                                       <th> Free Date</th>
                                       <!--<th> Select</th>-->
                                       <!--<th>Amount (USD)</th>-->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>3323</td>
                                       <td>
                                          <!--<div class='col-sm-6'>-->
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                          <!--</div>-->
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select1"/></td>-->
                                       <!--<td>$23.71</td>-->
                                    </tr>
                                    <tr>
                                       <td>3322</td>
                                       <td>
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker2'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select2"/></td>-->
                                       <!--<td>$8345.23</td>-->
                                    </tr>
                                    <tr>
                                       <td>3321</td>
                                       <td>
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker3'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select3"/></td>-->
                                        <!--<td>$245.12</td>-->
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!--                           <div class="text-right">
                                                         <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                                      </div>-->
                        </div>
                        <a href="#">
                           <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="panel panel-red">
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover table-striped" id="dataTables-example1">  
                                 <thead>
                                    <tr>
                                       <th> #</th>
                                       <th> Free Date</th>
                                       <!--<th> Select</th>-->
                                       <!--<th>Amount (USD)</th>-->
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>3323</td>
                                       <td>
                                          <!--<div class='col-sm-6'>-->
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker4'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                          <!--</div>-->
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select1"/></td>-->
                                       <!--<td>$23.71</td>-->
                                    </tr>
                                    <tr>
                                       <td>3322</td>
                                       <td>
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker5'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select2"/></td>-->
                                       <!--<td>$8345.23</td>-->
                                    </tr>
                                    <tr>
                                       <td>3321</td>
                                       <td>
                                          <div class="form-group">
                                             <div class='input-group date' id='datetimepicker6'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                             </div>
                                          </div>
                                       </td>
                                       <!--<td><input type="checkbox" id="freedate_select3"/></td>-->
                                        <!--<td>$245.12</td>-->
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!--                           <div class="text-right">
                                                         <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                                      </div>-->
                        </div>
                        <a href="#">
                           <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <!--                  <div class="col-lg-3 col-md-6">
                                       <div class="panel panel-yellow">
                                          <div class="panel-heading">
                                             <div class="row">
                                                <div class="col-xs-3">
                                                   <i class="fa fa-shopping-cart fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                   <div class="huge">124</div>
                                                   <div>New Orders!</div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#">
                                             <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                       <div class="panel panel-red">
                                          <div class="panel-heading">
                                             <div class="row">
                                                <div class="col-xs-3">
                                                   <i class="fa fa-support fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                   <div class="huge">13</div>
                                                   <div>Support Tickets!</div>
                                                </div>
                                             </div>
                                          </div>
                                          <a href="#">
                                             <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                             </div>
                                          </a>
                                       </div>-->
               </div>


               <div class="row">
<!--                  <div class="col-lg-12">


                     <div class="embed-responsive embed-responsive-4by3 col-sm-8 col-sm-offset-1">
                        <iframe src="https://www.google.com/calendar/embed?height=450&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=bcj7o45ohqnvmdf5vd0esq94n4%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=Africa%2FAccra" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>
                     </div>

                  </div>-->
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
