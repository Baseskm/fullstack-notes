<html>
    <head>
        <title>[Nineveh Department]</title>
        <link rel="stylesheet" media="screen" href="css/bootstrap.css" />
        <link rel="stylesheet" media="screen" href="css/nineveh.css" />
</head>
    <body>
      <div class="container-narrow">
        <div class="header">
          <div class="navbar navbar-fixed-top">
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                                  <li><a href="login.php">Login</a></li>
                              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="body-content">


<div class="row">
  <div class="col-lg-12">
    <h1>Log in</h1>
  </div>
  <div class="col-lg-8 col-offset-1">
      
    <form action="login.php" method="POST" class="form-horizontal">
      <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="username"  class="form-control"  autofocus="true">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password"  class="form-control"  >
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="rememberme"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-default">Log in</button>
    </form>
  </div>
</div>

<!-- @admin! MySQL is been installed.. please fix the login page! ~amrois -->

        </div>
      </div>


    </body>
</html>


