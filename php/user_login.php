<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Guitar Benter</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/style.css">
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </head>
  <body class="bg-light">
    <div class="container-fluid">
      <div class="row">
          <div class="col-12 p-0">
              <header class="py-3 text-white bg-dark">
                  <h1 class="text-monospace text-center"><a href="index.html">Guitar Benter</a></h1>
              </header>
          </div>   
      </div>
      <div class="row">
        <nav class="navbar navbar-light">
          <form action="" method="">
              <input type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit"><img src="../resources/icons/lente.png" height="30" length="30"></button>
          </form>  
          <div class="float-right">
            <ul class="d-flex flex-wrap pt-3 nodot">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/profilo.png" height="30" length="30"></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="../resources/icons/desideri.png" height="30" length="30"></a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/notifica.png" height="30" length="30"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="../resources/icons/carrello.png" height="30" length="30"></a>
                </li>
            </ul>
          </div>
        </nav> 
      </div>
      <div class="row p-5">
        <div class="col-1 col-md-2 col-lg-3"></div>
        <div class="col-10 col-md-8 col-lg-6">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="show_password">
              <label class="form-check-label" for="show_password">Show password</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="account_type" id="consumer" value="consumer">
              <label class="form-check-label" for="consumer">Consumer</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="account_type" id="seller" value="seller">
              <label class="form-check-label" for="seller">Seller</label>
            </div>
            <button type="submit" class="btn btn-dark float-end m-1">Login</button>
            <button type="submit" class="btn btn-dark float-end m-1">Register</button>
          </form>
        </div>
        <div class="col-1 col-md-2 col-lg-3"></div>
      </div>
      <div class="row">
        <footer class="py-3 text-white small bg-dark text-center">
          <div class="row">
            <div class="col-md-3 col-6">
              <h6 class="text-monospace text-center">Where we are</h6>
              <p>Vivamus neque purus, euismod tristique interdum sed, volutpat ut lectus. </p>
            </div>
            <div class="col-md-3 col-6">
              <h6 class="text-monospace text-center">Contacts</h6>
              <p>Vivamus neque purus, euismod tristique interdum sed, volutpat ut lectus.</p>
            </div>
            <div class="col-md-3 col-6">
              <h6 class="text-monospace text-center">Infos</h6>
              <p>Vivamus neque purus, euismod tristique interdum sed, volutpat ut lectus.</p>
            </div>
            <div class="col-md-3 col-6">
              <h6 class="text-monospace text-center">How we work</h6>
              <p>Vivamus neque purus, euismod tristique interdum sed, volutpat ut lectus. </p>
            </div>
          </div>
        </footer>  
      </div>
    </div>
  </body>
</html>