<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Pan Tadeusz</title>
</head>
<body class="bg-secondary">
    <header class="container text-center">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Menu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">
                        <ul>
                            <li><a class="text-decoration-none text-light" href="./k1.html">Księga 1</a></li>
                            <li><a class="text-decoration-none text-light" href="./k2.html">Księga 2</a></li>
                            <li><a class="text-decoration-none text-light" href="./k3.html">Księga 3</a></li>
                            <li><a class="text-decoration-none text-light" href="./k4.html">Księga 4</a></li>
                            <li><a class="text-decoration-none text-light" href="./k5.html">Księga 5</a></li>
                            <li><a class="text-decoration-none text-light" href="./k6.html">Księga 6</a></li>
                            <li><a class="text-decoration-none text-light" href="./k7.html">Księga 7</a></li>
                            <li><a class="text-decoration-none text-light" href="./k8.html">Księga 8</a></li>
                            <li><a class="text-decoration-none text-light" href="./k9.html">Księga 9</a></li>
                            <li><a class="text-decoration-none text-light" href="./k10.html">Księga 10</a></li>
                            <li><a class="text-decoration-none text-light" href="./k11.html">Księga 11</a></li>
                            <li><a class="text-decoration-none text-light" href="./k12.html">Księga 12</a></li>
                        </ul>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    <h1>Pan Tadeusz, czyli ostatni zajazd na Litwie</h1>
    </header>
        <div class="container">
            <div class="row">
                <div class="col-4">
    <div >
        <h2>Spis treści</h2>
        <ul>
        <li><a style="text-decoration: none; color: white;" href="./index.php">Strona Główna</li>
        <?php
            for($k=1; $k<=12; $k++)
              {
                print("<li><a class='text-decoration-none text-light' href='./index.php?k=$k&name=ind'>Księga $k</a></li>");
              }
              ?>
        </ul>
    </div>
    </div>
    <div class="col-8">
    </div>
        </div>
            </div>
    <div>
        <center><?php 
            if(isset($_GET['k']))
            {
            $k = $_GET['k'];
            include_once("./k$k.html");
            }else
            {
              print('<img src="./pan tadeusz.jfif" alt="Pan Tadeusz :)">');
            }
        ?></center>
    </div>
    <footer class="text-center bg-warning">
        <p>&copy Jakub Bąbol &copy</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>