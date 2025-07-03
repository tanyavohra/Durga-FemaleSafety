<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
  <link rel="icon" href="favi.jpg" type="image/x-icon">
  <link rel="stylesheet" href="bhilwara.css"> <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- header -->
  <div class="header">
    <nav class="navbar navbar-expand-lg " id="navbg">
      <div class="container-fluid">
        <a href="#">
          <h1 id="logo">DURGA</h1>
        </a>
        <form class="d-flex">
       
          <select name="Countries and its Name" onchange="location = this.value;">
            <option selected>----Select loaction----</option>
            <option value="jaipur.php">jaipur</option>
            <option value="kota.php">kota</option>
            <option value="bhilwara.php">Bhilwara</option>
            <option value="delhi.php">Delhi</option>
            <option value="ganga.php">Ganganagar</option>
        </select>

       
        
          <button class="btn" type="submit">Search</button>
        </form>
        <a href="http://www.ncw.nic.in/helplines">
          <button class="help">HELP</button></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="ImageBase/layout-dashboard.png">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="HOME.php"><img src="ImageBase/house.png" id="home"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact_us/contact.php"><img src="ImageBase/phone.png"></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="ImageBase/lock-keyhole.png">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/project-durga/login.php" id="login">Login</a></li>
                <li><a class="dropdown-item" href="/project-durga/sign.php" id="signup">Sign-Up</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>
  <!-- header end -->
  <!-- content  -->
   
  <div class="content">
    
    <div class="heading">
      <div class="name">Bhilwara</div>
      <div class="rating">
          4.5
      <i class="fa fa-star" aria-hidden="true"></i>
      </div>
      <div class="review"> <a href="/project-durga/review.php"><button type="submit" class="btn"> REVIEW</button></div></a>
  </div>
  
  <!-- COMMENT AND IMAGE1 -->
  
  
   <div class="middle-part">
      <div class="image"><img class="jaipur_image" src="ImageBase/bhilwara.jpg"></div>
      <div class="comment-box">
          <div class="comment">
          <i class="fa fa-comment" aria-hidden="true"></i>
              Comments
          </div>
      </div>
   </div>
   
  
   <!-- MORE PLACES -->
    <div class="images">
      <div class="image1"><div class="name1">Mandal Pond</div></div>
      <div class="image2"> <div class="name2">Sanganer Fort</div></div>
      <div class="image3"><div class="name3">Azad Market</div></div>
    </div>

  </div>
  <!-- content end -->
  <!-- footer -->
  <footer class="footer ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer_para">
          <h2 class="durga_footer">DURGA</h2>
        </div>
        <div class="col-md-3 footer_para">
          <h5>About Us</h5>
          <p>
            The Durga team comprises of a diverse group of passionate individuals committed to creating safer public and private spaces through empowered communities. Each member brings unique expertise and a shared vision for a world where everyone, especially women and girls, can feel secure and respected in every environment.
          </p>
        </div>
        <div class="col-md-3 footer_para">
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li>Email: info@example.com</li>
            <li>Phone: +1233567890</li>
            <ul class="list-inline footer-links ">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://x.com/?lang=en">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </ul>
        </div>
        <!-- footer end -->



</body>

</html>