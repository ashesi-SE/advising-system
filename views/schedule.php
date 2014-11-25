<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Home</title>
      <link href="../views/css/bootstrap.css" rel="stylesheet">
      <link href="../views/css/fonts/FontAwesome/font-awesome-4.0.3.min.css" rel="stylesheet">
      <link href="../views/css/style.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-default" role="navigation">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Advisory System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Contact</a></li>

               </ul>

               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Register</a></li>
                  <li>
                     <a href="index.php">Login</span></a>

                  </li>
               </ul>
            </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
      </nav>

      <div class="container-fluid">
         <div id="feedback_div" class="row">
            <div class="col-md-9 col-md-offset-3">
               <h2>Feedback from Advisor</h2>
               <div >

                  <p id ="feedback_box">
                  <ol>
                     <li> Create a time table</li>
                     <li> Stop doing your Assignments </li>
                     <li> Don't go for friday discussion </li>
                  </ol>

                  </p>
               </div>


            </div>
            <div id="date_div" class="col-md-9 col-md-offset-3">
               <ul class="list-unstyled">
                  <li><b>Set Meeting Time:</b><input type="date" name="meeting_time" id="datepicker" class="form-control input-sm"></li>
                  <li class="text-left"><a href="mailto:advisor.name@ashesi.edu.gh" class=" btn btn-default btn-sm"> Send Advisor Message</a></li>
               </ul>

            </div>
         </div>

      </div>

      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-md-offset-3">
                  <p class="text-muted">&copy; 2014 - Team SMAKK</p>
               </div>
            </div>

         </div>
      </div>


      <script src="../views/js/jquery-1.11.0.js"></script>
      <script src="../views/js/bootstrap.js"></script>

   </body>
</html>
