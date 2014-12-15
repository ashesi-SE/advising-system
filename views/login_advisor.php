<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Log In</title>
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
               <a class="navbar-brand" href="#"> Advisory System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">Contact</a></li>

               </ul>

               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Register</a></li>
                  <!--  <li>
                     <a href="#">Login</span></a>
                    
                   </li> -->
               </ul>
            </div><!-- /.navbar-collapse -->
         </div>
      </nav>

      <div class="container-fluid">
         <div id="feedback_div" class="row">
            <div class="col-md-9 col-md-offset-3">
               <section id="loginForm">
                  <h4>Use a local account to log in.</h4>
                  <div class="form-group">
                     <div class="col-md-10">
                        <label class="control-label">Username</label>
                        <input id="username" type="text" class="form-control" placeholder="username">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-10">
                        <label class="control-label">Password:</label>
                        <input id="password" type="password" class="form-control" placeholder="password">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-10">
                        <div class="checkbox">
                           <input type="checkbox">
                           <label>Remember Me</label>
                           <a href="#"><input type="submit" value="Log in" class="btn btn-default btn-sm" onclick="login()"/></a>

                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-md-10">
                        <p>
                           <a href="#">Register</a> if you don't have a local account.
                        </p>
                     </div>
                  </div>
               </section>
            </div>
         </div>

      </div>
   </body>
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-9 col-md-offset-3">
                  <p class="text-muted">&copy; 2014 - Team SMAKK</p>
               </div>
            </div>

         </div>
      </div>
   </footer>

   <script src="../views/js/jquery-1.11.0.js"></script>
   <script src="../views/js/bootstrap.min.js"></script>
   <script src="../controllers/del.js"></script>
</html>
