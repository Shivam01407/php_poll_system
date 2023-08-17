<?php

include "dbconfig.php";

if (!empty($_POST)) {
    $email = isset($_POST['email']) ?  $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $stmt = $conn->prepare("SELECT id FROM `user` WHERE email = ? AND password = ?");
    $stmt->execute([$email,  $password]);
    $user_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($user_id)) {
        $user_id = $user_id[0]['id'];
        session_start();
        $_SESSION["user_id"] = $user_id;
        header("Location: index.php");
        die();
    } else {
        header("Location: signin.php");
        die();
    }
    
}



?>




<!DOCTYPE html>
<html>

<head>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <title>Sign in</title>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-6">
                    <div class="card" style="border-radius: 1rem;">
                        <!-- <div class="row g-0"> -->
                        <div class="col-md-6 col-lg-12 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form style="padding: 35px" action="signin.php" method="POST">

                                    <h4 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h4>

                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block">Login</button>
                                    </div>
                                    <div style="padding-top:15px">
                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-1 pb-lg-1" style="color: #393f81;">Don't have an account? <a href="signup.php" style="color: #393f81;">Register here</a></p>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

</html>