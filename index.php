<!DOCTYPE html>
<html>
<head>
<title></title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@700;800&display=swap" rel="stylesheet">



</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rohan Rohokale</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/SAIRAM.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/background.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/205608.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>

  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<img src="images/1.jpg"class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4"> I Am Rohan Rohokale.</h2>
<p class="py-3">WhatsApp Status, Quotes and SMS in Marathi : Marathi is a superb language.
 I am also Marathi.</p>
   <a href="about.php" class="btn btn-success">check More </a>
</div>
</div>
</div>
</section>
   <section class="my-5">
       <div class="py-5">
<h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
<div  class="row">
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Rohan Rohokale</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Rohan Rohokale</h4>
    <p class="card-text">Instagram</p>
    <a href="www.facebook/rohanrohokale.com" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-12">
<div class="card">
  <img class="card-img-top" src="images/3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Rohan Rohokale</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>
</div>
</div>
</section>
<div class="w-50 m-auto">
<form action="userinfo.php" method="POST">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" autocomplete="off" class="form-control"> 





</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" autocomplete="off" class="form-control"> 
</div>





<div class="form-group">
<label>Mobile</label>
<input type="text" name="mobile" autocomplete="off" class="form-control"> 



</div>
<div class="form-group">
<label>Comments</label>
<textarea class="form-control" name="comment"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>
<br>


<footer>
<p class="p-3 bg-dark text-white text-center">Design By Rohan Rohokale</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>