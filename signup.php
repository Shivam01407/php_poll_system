<?php

// include "dbconfig.php";

if (!empty($_POST)) {
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $email = isset($_POST['email']) ? $_post['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    echo ("values are". $fname);

}



?>


<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"
></script>
    <title>Sign Up</title>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-6">
                    <div class="card" style="border-radius: 1rem;">
                        <!-- <div class="row g-0"> -->
                        <div class="col-md-6 col-lg-12 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-4 text-black">

                                <form style="padding: 35px" action="signup.php" method="POST">

                                    <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Sign up </h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="fname" name="fname" class="form-control" />
                                                <label class="form-label" for="fname">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text"  id="lname" name="lname" class="form-control" />
                                                <label class="form-label" for="lname">Last name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="email">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password"  id="password" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="button">Sign up</button>
                                    </div>
                                    <div style="padding-top:15px">
                                        <p class="mb-1 pb-lg-1" style="color: #393f81;">Already have an account? <a href="#!" style="color: #393f81;">Click here</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>