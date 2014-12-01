<!DOCTYPE html>
<?php
session_start();
//$advisor_id = $_SESSION["id"];
$advisor_id = 1;  
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>E-VISOR</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="css/korkor.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">E-VISOR</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <!--            <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
                        <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
                        <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
                        <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li>
                        <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown Item</a></li>
                                <li><a href="#">Another Item</a></li>
                                <li><a href="#">Third Item</a></li>
                                <li><a href="#">Last Item</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <!--            <li class="dropdown messages-dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                        <li class="dropdown-header">7 New Messages</li>
                                        <li class="message-preview">
                                          <a href="#">
                                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                            <span class="name">John Smith:</span>
                                            <span class="message">Hey there, I wanted to ask you something...</span>
                                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                                          </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="message-preview">
                                          <a href="#">
                                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                            <span class="name">John Smith:</span>
                                            <span class="message">Hey there, I wanted to ask you something...</span>
                                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                                          </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="message-preview">
                                          <a href="#">
                                            <span class="avatar"><img src="http://placehold.it/50x50"></span>
                                            <span class="name">John Smith:</span>
                                            <span class="message">Hey there, I wanted to ask you something...</span>
                                            <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                                          </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">View Inbox <span class="badge">7</span></a></li>
                                      </ul>
                                    </li>-->
                        <!--            <li class="dropdown alerts-dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                        <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                                        <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                                        <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                                        <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                                        <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                                        <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View All</a></li>
                                      </ul>
                                    </li>-->
                        <li class="dropdown user-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Kutorkor Kotey-Afutu <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-user"></i> Sign out</a></li>
                <!--                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <!--          <div class="row">
                              <div class="col-lg-9">
                                 
                                  </div>
                              </div>-->
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Welcome to E-VISOR <small>Kutorkor Kotey-Afutu</small></h1>
                        <ol class="breadcrumb">
                            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                        </ol>     
                    </div>

                </div> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong>Reminder!</strong> You have a meeting with your advisor on the 23rd of June 2015  
                        </div>
                        <a href=""  data-toggle="modal" data-target="#basicModal" onclick="showCalender()">    
                            <div class="col-lg-4">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <i class="fa fa-comments fa-5x"></i>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <!--class="announcement-heading"-->
                                                <p id="announcement-heading" >Schedule Meeting</p>
                                                <p class="announcement-text"></p>
                                            </div>
                                        </div>
                                    </div>    
                                                  <!--<a href="#">-->
                                                    <div class="panel-footer announcement-bottom">
                                                      <div class="row">
                                                        <div class="col-xs-6">
                                                          View Mentions
                                                        </div>
                                                        <div class="col-xs-6 text-right">
                                                          <i class="fa fa-arrow-circle-right"></i>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  <!--</a>-->
                                </div>
                            </div>
                        </a>
                    </div> 




                    <div class="col-lg-4">
                        <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">
                            <div class="col-xs-12 col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading top-bar">
                                        <div class="col-md-8 col-xs-8">
                                            <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Miguel</h3>
                                        </div>
                                        <div class="col-md-4 col-xs-4" style="text-align: right;">
                                            <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a>
                                            <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a>
                                        </div>
                                    </div>
                                    <div class="panel-body msg_container_base">
                                        <div class="row msg_container base_sent">
                                            <div class="col-md-10 col-xs-10">
                                                <div class="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">  
                                            </div>
                                        </div>
                                        <div class="row msg_container base_receive">
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                            <div class="col-md-10 col-xs-10">
                                                <div class="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row msg_container base_receive">
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                            <div class="col-xs-10 col-md-10">
                                                <div class="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row msg_container base_sent">
                                            <div class="col-xs-10 col-md-10">
                                                <div class="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                        </div>
                                        <div class="row msg_container base_receive">
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                            <div class="col-xs-10 col-md-10">
                                                <div class="messages msg_receive">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row msg_container base_sent">
                                            <div class="col-md-10 col-xs-10 ">
                                                <div class="messages msg_sent">
                                                    <p>that mongodb thing looks good, huh?
                                                        tiny master db, and huge document store</p>
                                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-2 avatar">
                                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Send your advisor a message..." />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-cog"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" id="new_chat"><span class="glyphicon glyphicon-plus"></span> Novo</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-list"></span> Ver outras</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-remove"></span> Fechar Tudo</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><span class="glyphicon glyphicon-eye-close"></span> Invisivel</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!--pop up calender-->
                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h4 class="modal-title" id="myModalLabel">Select a meeting time with your advisor</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">   
 
                                    <div class="input-group date form_datetime col-lg-8"  data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                        <input class="form-control" size="16" type="text" id="datepicker" value="" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                    </div>
                                    <!--fhg-->
                                    <!--<input type="" id="dtp_input1" value="" /><br/>-->
                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" onclick="check_save_meeting_time(<?php echo $advisor_id ?>)" data-dismiss="modal" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>  
            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script>
        <!-- Page Specific Plugins -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="js/morris/chart-data-morris.js"></script>
        <script src="js/tablesorter/jquery.tablesorter.js"></script>
        <script src="js/tablesorter/tables.js"></script>
        <script src="../controllers/korkor.js" type="text/javascript"></script>
    </body>
</html>
