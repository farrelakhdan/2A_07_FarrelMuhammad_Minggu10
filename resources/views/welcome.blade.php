<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('link_rel')
  <link rel="stylesheet" href="css/navbarStyle.css">
  <title>Biodata</title>
</head>
<body>
  <header>
    <div class="logo">
      <h4>HELLO</h4>
    </div>
    <ul class="nav-links">
      <li>
        <a href="home">HOME</a>
      </li>
      <li>
        <a href="about">ABOUT</a>
      </li>
      <li>
        <a href="work">WORK</a>
      </li>
      <li>
        <a href="contact">CONTACT</a>
      </li>
      <li>
        <a href="adminLogout">LOGOUT</a>
      </li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
</header>
  <script src="js/app.js"></script>
  @yield('content')
  <footer class="main-footer small-text">
    <strong>Copyright &copy; 2021 <a href="#">Arriansoft</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</body>
</html>