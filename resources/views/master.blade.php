<html>
  <head>
      <meta charset="utf-8">
      <title>Media</title>
        <link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
  <body>
<h1 class="header"><a class="header" href="/">Media</a> </h1>
      <div class="row">
      <div class="col-md-12">
        <nav class="navColor navbar">

                <ul class="nav navbar-nav">
                  <li class="dropdown move">
                    <a class="dropdown-toggle navColor" data-toggle="dropdown" href="#">Visa alla
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/mobiles">Mobiler</a></li>
                        <li><a href="/tablets">Surfplattor</a></li>
                        <li><a href="/computers">Datorer</a></li>
                      </ul>
                    </li>

                    <li class="moveLeft"><a class="navColor" href="/login" style="margin-left: 600px;"><span class="glyphicon glyphicon-home"></span></a></li>
                </ul>

            </nav>
          </div>
          </div>
      <div class="container">
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">

         @yield('content')
      </div>
      <div class="col-md-3"></div>
    </div>
    </div>
  </body>
</html>
