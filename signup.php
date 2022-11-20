<?php include("includes/header.php") ?>


    <div class="mt-5"></div>

    


    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="includes/signupValidation.php" method="POST">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign up with</p>
                            <button type="button" class="btn btn-dark btn-floating mx-1">
                                <i class="fa fa-facebook"></i>
                            </button>

                            <button type="button" class="btn btn-dark btn-floating mx-1">
                                <i class="fa fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-dark btn-floating mx-1">
                                <i class="fa fa-google"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>


                        <!-- First name -->
                        <div class="form-outline mb-3">
                            <input type="text" id="form3Example3" class="form-control form-control-sm"
                                placeholder="First Name" name="fName" required/>
                            <!-- <label class="form-label" for="form3Example3">First Name</label> -->
                        </div>

                        <!-- Last Name -->
                        <div class="form-outline mb-3">
                            <input type="text" id="form3Example3" class="form-control form-control-sm"
                                placeholder="Last Name" name="lName" required/>
                            <!-- <label class="form-label" for="form3Example3">Last Name</label> -->
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-3">
                            <input type="email" id="form3Example3" class="form-control form-control-sm"
                                placeholder="Email" name="email" required/>
                            <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                        </div>

                        <!-- Mobile -->
                        <div class="form-outline mb-3">
                            <input type="tel" id="form3Example3" class="form-control form-control-sm"
                                placeholder="Mobile No." name="contact" required/>
                            <!-- <label class="form-label" for="form3Example3">Mobile No.</label> -->
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-sm"
                                placeholder="Password" name="pwd" required/>
                            <!-- <label class="form-label" for="form3Example4">Password</label> -->
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="register">Register</button>
                                <?php 
                                    if(isset($_GET['message'])){
                                ?>
                                    <p><?php echo $_GET['message'];  ?></p>
                                    <?php
                                    }
                                 ?>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                                    class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- ********* Registration Ends *******   -->


    <?php include("includes/footer.php") ?>
