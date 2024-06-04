<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InzoStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #253592;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <h1 class="logo-text text-light">InZoShop</h1>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse container-fluid justify-content-center gap-5 d-flex"
            id="navbarTogglerDemo02">
            <ul class="navbar-nav mb-2 mb-lg-0 "> <!-- Removed me-auto class -->
              <li class="nav-item mx-5">
                <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Produits</a>
              </li>
              <li class="nav-item mx-5">
                <a class="nav-link active text-light fw-bold fs-6" aria-current="page" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    @yield('adminContent')

    <script src="{{asset('assets/js/utilities/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/utilities/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/myScript.js')}}"></script>
</body>
</html>