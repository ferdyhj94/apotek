<!DOCTYPE html>
<Html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COnpatible" content="IE-edge">
	<title>Sistem Informasi Apotek</title>
	
  
	<link rel="stylesheet" type="text/css" href="custom.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

	<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">
        <!-- <img src="http://enwake-igorsa8.rhcloud.com/resources/img/logo.png"> -->
    </a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{URL('/home')}}">Home</a></li>
      <li><a href="#">About</a></li>
      <li><button type="button" class="btn btn-primary" onclick="window.location.href='#login'">Log in</button></li>
    </ul>
  </div>
</div>
@yield('content')



<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>



</body>
</Html>