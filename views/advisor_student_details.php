<!DOCTYPE html>
<?php
session_start();
$student_name = $_REQUEST['student_name'];
$student_id = $_REQUEST['student_id'];
//$faculty_id = $_SESSION['faculty_id']; 
include_once '../models/student_has_advisor_class.php';
$obj = new student_has_advisor_class();
$student_has_advisor_id = "";
$obj->get_student_has_advisor_by_studet_id($student_id);
$row = $obj->fetch();
if ($row) {
    $student_has_advisor_id = $row['student_has_advisor_id'];
}
?>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Advisory System</title>

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
                                Dashboard <small>Student Details</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">put # of msgs here</div>
                                            <div>Messages</div>
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
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">put # of advis here</div>
                                            <div>Advisees</div>
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
                </div>
                <!-- /.row -->

                <!--               <div class="row">
                                  <div class="col-lg-12">
                                     <div class="panel panel-default">
                                        <div class="panel-heading">
                                           <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                                        </div>
                                        <div class="panel-body">
                                           <div id="morris-area-chart"></div>
                                        </div>
                                     </div>
                                  </div>
                               </div>-->
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Photo</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Personal Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge"><?php
                                            if (isset($_REQUEST['student_name'])) {
                                                print $_REQUEST['student_name'];
                                            }
                                            ?></span>
                                        <i class="fa fa-fw fa-calendar"></i> Name
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">44</span>
                                        <i class="fa fa-fw fa-comment"></i> Age
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">+233244813169</span>
                                        <i class="fa fa-fw fa-truck"></i> Phone Number
                                    </a>
                                    <!--                           <a href="#" class="list-group-item">
                                                                  <span class="badge">46 minutes ago</span>
                                                                  <i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
                                                               </a>
                                                               <a href="#" class="list-group-item">
                                                                  <span class="badge">1 hour ago</span>
                                                                  <i class="fa fa-fw fa-user"></i> A new user has been added
                                                               </a>
                                                               <a href="#" class="list-group-item">
                                                                  <span class="badge">2 hours ago</span>
                                                                  <i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
                                                               </a>
                                                               <a href="#" class="list-group-item">
                                                                  <span class="badge">yesterday</span>
                                                                  <i class="fa fa-fw fa-globe"></i> Saved the world
                                                               </a>
                                                               <a href="#" class="list-group-item">
                                                                  <span class="badge">two days ago</span>
                                                                  <i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
                                                               </a>
                                                            </div>-->
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

                <div class="row">
                    <!--               <div class="col-lg-4">
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Photo</h3>
                                         </div>
                                         <div class="panel-body">
                                            <div id="morris-donut-chart"></div>
                                            <div class="text-right">
                                               <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                         </div>
                                      </div>-->
                    <!--               </div>-->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Summary Notes</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <div  class="list-group-item">
                                        <i class="fa fa-fw fa-calendar"></i> 19-10-2014
                                        <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                        <i class="fa fa-fw fa-calendar"></i> 29-10-2014
                                        <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>

                <!--Courses-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Course List</h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Current Courses <i class="fa fa-fw fa-caret-down"></i></a>
                                        <ul id="demo1" class="collapse">
                                            <li>
                                                <a href="#"> Math</a>
                                            </li>
                                            <li>
                                                <a href="#"> Phy</a>
                                            </li>
                                            <li>
                                                <a href="#"> Chem</a>
                                            </li>
                                            <li>
                                                <a href="#"> Bio</a>
                                            </li>
                                            <li>
                                                <a href="#"> Geo</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="list-group">
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Course List</h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Current Courses <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div  class="list-group-item">
                                                    <i class="fa fa-fw fa-calendar"></i> 19-10-2014
                                                    <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                                    <i class="fa fa-fw fa-calendar"></i> 29-10-2014
                                                    <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                                </div>
                                            </li>
                                            <li><div  class="list-group-item">
                                                    <i class="fa fa-fw fa-calendar"></i> 19-10-2014
                                                    <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                                    <i class="fa fa-fw fa-calendar"></i> 29-10-2014
                                                    <textarea style="width: 100%; max-width: 100%">1. Student need serious help </textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="list-group">
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.row -->



                </div>

                <!--Messages from student-->

                <div class="row">
                    <!--               <div class="col-lg-4">
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Photo</h3>
                                         </div>
                                         <div class="panel-body">
                                            <div id="morris-donut-chart"></div>
                                            <div class="text-right">
                                               <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                         </div>
                                      </div>-->
                    <!--               </div>-->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Messages From Student</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <?php
                                        include_once '../models/message.php';
                                        $obj = new message();
                                        $obj ->get_messages_to_advisor_by_id($student_id);
                                        $row = $obj->fetch();
                                        echo"<textarea style='width: 88%'> $row[message]</textarea>";
                                        ?>
                                       <!--<textarea style="width: 88%"> dsfsf safd</textarea>-->
                                        <i class="fa fa-fw fa-calendar"></i> 19-10-2014
                                    </div>
                                    <div class="text-right">
                                        <a onclick="showAllMessages()" data-toggle="modal" data-target="#myModal">View All Messages <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                  <div class="col-lg-4">
                                             <div class="panel panel-default">
                                                <div class="panel-heading">
                                                   <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                                                </div>
                                                <div class="panel-body">
                                                   <div class="table-responsive">
                                                      <table class="table table-bordered table-hover table-striped">
                                                         <thead>
                                                            <tr>
                                                               <th>Order #</th>
                                                               <th>Order Date</th>
                                                               <th>Order Time</th>
                                                               <th>Amount (USD)</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>3326</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:29 PM</td>
                                                               <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3325</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:20 PM</td>
                                                               <td>$234.34</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3324</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:03 PM</td>
                                                               <td>$724.17</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3323</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:00 PM</td>
                                                               <td>$23.71</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3322</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:49 PM</td>
                                                               <td>$8345.23</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3321</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:23 PM</td>
                                                               <td>$245.12</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3320</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:15 PM</td>
                                                               <td>$5663.54</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3319</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:13 PM</td>
                                                               <td>$943.45</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="text-right">
                                                      <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>-->
                    </div>
                    <!-- /.row -->

                </div>

                <div class="row">
                    <!--               <div class="col-lg-4">
                                      <div class="panel panel-default">
                                         <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Photo</h3>
                                         </div>
                                         <div class="panel-body">
                                            <div id="morris-donut-chart"></div>
                                            <div class="text-right">
                                               <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                         </div>
                                      </div>-->
                    <!--               </div>-->   
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Message To Student</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <div  class="list-group-item">
                                        <textarea id= "message_student" style="width: 100%" placeholder="Input message to send"> </textarea>
                                        <!--<i class="fa fa-fw fa-calendar"></i>-->
                                        <button onclick ="send_message_to_student(<?php print $student_has_advisor_id ?>)" class="btn btn-success btn-block">Send</button>
                                    </div>
                                    <div class="text-right">
                                        <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                  <div class="col-lg-4">
                                             <div class="panel panel-default">
                                                <div class="panel-heading">
                                                   <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                                                </div>
                                                <div class="panel-body">
                                                   <div class="table-responsive">
                                                      <table class="table table-bordered table-hover table-striped">
                                                         <thead>
                                                            <tr>
                                                               <th>Order #</th>
                                                               <th>Order Date</th>
                                                               <th>Order Time</th>
                                                               <th>Amount (USD)</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>3326</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:29 PM</td>
                                                               <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3325</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:20 PM</td>
                                                               <td>$234.34</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3324</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:03 PM</td>
                                                               <td>$724.17</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3323</td>
                                                               <td>10/21/2013</td>
                                                               <td>3:00 PM</td>
                                                               <td>$23.71</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3322</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:49 PM</td>
                                                               <td>$8345.23</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3321</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:23 PM</td>
                                                               <td>$245.12</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3320</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:15 PM</td>
                                                               <td>$5663.54</td>
                                                            </tr>
                                                            <tr>
                                                               <td>3319</td>
                                                               <td>10/21/2013</td>
                                                               <td>2:13 PM</td>
                                                               <td>$943.45</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <div class="text-right">
                                                      <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>-->
                    </div>
                    <!-- /.row -->

                </div>


                <div id="myModal" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">These are messages from <?php print $student_name?></h4>
                        </div>   
                        <div class="modal-body">  
            <!--                <p>Do you want to save changes you made to document before closing?</p>
                            <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>-->
                            <ul class="list-group">
                                <?php
                                include_once '../models/message.php';
                                        $obj = new message();
                                        $obj ->get_messages_to_advisor_by_id($student_id);
                                        $row = $obj->fetch();
                                        while ($row)
                                        {
                                            echo "<li class='list-group-item'>$row[message]";
//                                                    $messages = $row['message'];
                                                    $row = $obj->fetch();
                                        }
                                            
                                            ?>  
<!--                                
                                <li class="list-group-item">Documents</li>        
                                <li class="list-group-item">Music</li>
                                <li class="list-group-item">Videos</li>-->
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
        <script src="js/del.js" type="text/javascript"></script>
        <script src="../controllers/korkor.js" type="text/javascript"></script>
    </body>

</html>
