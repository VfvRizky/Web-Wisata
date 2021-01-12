<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">

    <title>@yield('title')</title>
  </head>
  <body class ="backgroundbb2">
    <nav class="navbar2 navbar-expand-lg">
      <div class="container">

          <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisata.IN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/balikpapan">Balikpapan</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="/boking">Boking</a>
                </li>
                <li class="nav-item dropdown navbar2">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Wisata
		          </a>
		          <ul class="dropdown-menu dropp" aria-labelledby="navbarDropdown">
		            <li><a class="dropdown-item" href="/lamaru">Pantai Lamaru</a></li>
		            <li><a class="dropdown-item" href="/maggar">Pantai Manggar</a></li>
		            <li><a class="dropdown-item" href="/bengkirai">Bukit Bengkirai</a></li>
		            <li><a class="dropdown-item" href="/danau">Danau Labuan Cermin</a></li>
		            <li><a class="dropdown-item" href="/waduk">Jembatan dan Waduk Manggar</a></li>
		            <li><a class="dropdown-item" href="/kebunraya">Kebun Raya Balikpapan</a></li>
		            <li><a class="dropdown-item" href="manggrove">Manggrove Center Graha Indah</a></li>
		            <li><a class="dropdown-item" href="auri">Pantai Auri Sepinggan</a></li>
		            <li><a class="dropdown-item" href="melawai">Sunset Pantai Melawai</a></li>
		            <li><a class="dropdown-item" href="kemala">Pantai Kemala</a></li>
		            <li><a class="dropdown-item" href="dahor">Dahor Heritage</a></li>
		            <li><a class="dropdown-item" href="beruang">Rumah Beruang</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Boking</a></li>
		          </ul>
		        </li>
              </ul>
              <span class="navbar-text">
                Beta.ver
              </span>
            </div>
          </div>
      </div>
    </nav>

    @yield('container')
          

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
  <footer class="footer-area footer--light">
  <div class="mini-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>© 2021
              <a href="#">Wisata.IN</a>. All rights reserved. Created by
              <a href="#">KELOMPOK 9</a>
            </p>
          </div>

          <div class="go_top">
            <span class="icon-arrow-up"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>