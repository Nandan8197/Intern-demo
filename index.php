<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-commerce</title>
    <?php  include("./includes/header.php") ?>
 
  </head>
  <body>
    <!-- Navbar start  -->
   <?php include("./includes/nav_bar.php")?>
    <!-- Navbar end  -->

    <!-- section one start -->
    <div class="container-fluid section-1">
      <div class="row">
        <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
          <h1 class="section-1-heading text-center text-white">Welcome to Nandan's E-commerce</h1>
          <a href="#products" class="btn btn-outline-light"> Explore our products </a>

        </div>
        <div class="col-sm-12 col-md-6">
          <dotlottie-player  class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 600px; height: 600px;" loop autoplay></dotlottie-player>
        </div>
      </div>
    </div>
 <!-- section one end -->
 <hr>
 
 <!-- section two start  -->
 <div class="container">
  <div class="row">
    <h2 class="text-dark text-center">Categories</h2>

<!-- categories card one start  -->
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="./Asset/Images/electronics.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Electronics </h5>
          <p class="card-text">
            <ul>
              <li>Mobile</li>
              <li>Laptop</li>
              <li>Charger</li>
              <li>Camara</li>
            </ul>
          </p>
          <a href="#" class="btn btn-primary">Click here</a>
        </div>
      </div>
    </div>
    <!-- categories card one end -->

    <!-- categories card two start  -->
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="./Asset/Images/cosemtics.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">cosemtics</h5>
          <p class="card-text">
            <ul>
              <li>Cream</li>
              <li>Lipstick</li>
              <li>Powder</li>
              <li>oil</li>
            </ul>
          </p>
          <a href="#" class="btn btn-primary">Explore more</a>
        </div>
      </div>
    </div>
    <!-- categories card two end -->

    <!-- categories card three start  -->
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="./Asset/Images/Grosery.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Groceries</h5>
          <p class="card-text">
            <ul>
              <li>Dairy</li>
              <li>Snacks</li>
              <li>Breakfast</li>
              <li>Meat</li>
            </ul>
          </p>
          <a href="#" class="btn btn-primary">Explore more</a>
        </div>
      </div>
    </div>
    <!-- categories card three end -->
    <!-- section two end  -->
    
  </div>
</div>
<hr>
<!-- section three start  -->
<div id="products" class="container">
  <div class="row">
    <h2 class="text-dark text-center">Products </h2>


  <!-- section two card one start  -->
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>


    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>
    <!-- animation code  -->

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <!-- custom script -->
    <script src="./Asset/JS/main.js"></script>
  </body>
</html>
