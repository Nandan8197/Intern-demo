<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php include("./includes/header.php")?>
  </head>
  <?php include("./includes/nav_bar.php")?>
  <body class="bg-colour">
    <div class="container">
        <div class="row">
            <div class="col-sm col-md-4 mx-auto my-4">
                <!-- Registration form  -->
                <div class="card">
                    <h6 class="card-title text-center">Registration</h6>
                    <hr>
                    <!-- Registration form code  -->
                    <form class="p-2">
                        <!-- Name input  -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type=" text" class="form-control" placeholder="Enter Your Name " name="name">
                        </div>
                        <!-- Name input ends  -->
                        <!-- \number input start  -->
                        <div class="md-3">
                            <label class="form-label">Number</label>
                            <input type="number" class="form-control" placeholder="Enter Your mobile number " name="number">
                        </div>
                        <!-- number input ends  -->
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1"  name="email" placeholder="Enter your email" >
                          
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword" class="form-label">Password</label>
                          <input type="password" class="form-control" placeholder="Enter your password" id="inputPassword" name="Password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm password</label>
                            <input type="password" class="form-control" placeholder="Retype your password" id="confirmPassword" name="cpassword" onkeyup="verify()">
                            <p id="password" class="text-danger" style="display: none;"> </p>

                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <!-- Registration form code end  -->

                </div>
            </div>
        </div>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- custom script -->
    <script src="./Asset/JS/main.js"></script>
  </body>
</html>