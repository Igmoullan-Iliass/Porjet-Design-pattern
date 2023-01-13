<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>HOME </title>
    <style>
      .shadow-blue { text-shadow: 2px 2px 5px rgb(40, 40, 199);}

    </style>

</head>

<body>

    <!-- Navbar -->


    <div class="container ">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <h2 class="shadow-blue" style=" font-family: 'Brush Script MT', cursive;font-size: 40px; "> Rendez-vous</h2>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">services</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">info</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">help</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2 rounded-pill">Login</button>
          <a href="#Sign-up" ><button type="button" class="btn btn-primary rounded-pill" >Sign-up</button></a>
        </div>
      </header>
    </div>

    <!-- main  -->
    <main class="container-fluid " >

      <!-- main 1 -->
      <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
          <h1 class="display-5 fw-bold text-white shadow-blue " style=" font-family: 'Brush Script MT', cursive; " >Rendez-vous</h1>
          <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">management software and online appointment booking.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Prend un Render-vous</button>

                
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title " id="staticBackdropLabel">Pris de rendez-vous </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 rounded-pill" action="<?php echo e(url('rv')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>    
                        <div class="col-sm-4">
                                <label  class="form-label">username</label>
                                <input type="text" class="form-control rounded-pill" name="username">
                              </div>
                            <div class="col-sm-4">
                              <label  class="form-label">Email</label>
                              <input type="email" class="form-control rounded-pill" name="email">
                            </div>


                            <div class="col-sm-4">
                              <label  class="form-label">tel</label>
                              <input type="text" class="form-control rounded-pill" name="tel" placeholder="+212 6...">
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label">city</label>
                                <select name="city" class="form-select rounded-pill">
                                  <option selected>Choose...</option>
                                  <option>Marrakech</option>
                                  <option>casa</option>
                                </select>
                              </div>

                            <div class="col-sm-4">
                              <label  class="form-label">date de rendez vous </label>
                              <input type="date" class="form-control rounded-pill" name="daterv">
                            </div>

                            <div class="col-sm-4">
                                <label class="form-label">temps</label>
                                <select name="time" class="form-select rounded-pill">
                                  <option selected>Choose...</option>
                                  <option>09:00</option>
                                  <option>09:15</option>
                                  <option>09:30</option>
                                  <option>09:45</option>
                                  <option>10:00</option>
                                  <option>10:15</option>
                                  <option>10:30</option>
                                </select>
                              </div>
                              <input type="submit" class="btn btn-primary rounded-pill" value="Prendre le rendez vous">
                          </form>
                    </div>
                    <div class="modal-footer col-md-12 text-center ">
                      
                      <button type="button" class="btn btn-primary rounded-pill  ">prendez rendez vous </button>
                    </div>
                  </div>
                </div>
              </div>

              
              <a href="#Sign-up"><button type="button" class="btn btn-outline-light btn-lg px-4 rounded-pill">connectez-vous</button></a>
            </div>
          </div>
        </div>
      </div>
      <!-- sing up  -->
      <div class="container col-xl-10 col-xxl-8 px-4 py-5 " id="Sign-up">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Make an Appointment </h1>
             <img src="/images\img1.gif" alt="calender"  width="" height="auto" class="col-8 fs-4">
          </div>
          <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-pill" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-pill" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary rounded-pill" type="submit">Sign up</button>
              <hr class="my-4">
              <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- footer  -->
    <div class="container-fluid bg-dark ">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
          </ul>
          <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
      </div>



</body>
</html>
<?php /**PATH C:\xampp5\htdocs\Porjet-Design-pattern\resources\views/welcome.blade.php ENDPATH**/ ?>