<?php
include'config.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
        <title>Log In, Admin | NGO - We For You Organizatione</title>
<?php include'style.php'; ?>

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-9 col-lg-7 col-md-7">
                        <div class="auth-bg pt-md-5 p-4">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="signin_div text-center">
                                        <img src="assets/images/logo2.png">
                                        <h2 class="text-white">We For You Organization</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-5 col-md-5">
                        <div class="auth-full-page-content d-flex p-5">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h4 class="mb-0">Log In</h4>
                                        </div>
                                        <form class="needs-validation custom-form mt-4 pt-2" novalidate action="" method="POST">
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label"> Registered User Name</label>
                                                <input type="text" class="form-control" name="user_name" placeholder="Enter Valid Name" required>     
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="user_password" placeholder="Enter password" required>     
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-50 waves-effect waves-light text-center" type="submit" name="admin_login">Login</button>
                                            </div>
                                        </form>

                                        <div class="mt-2 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="signup.php" class="text-primary fw-semibold"> Signup </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                </div>
            </div>
        </div>


        <!-- JAVASCRIPT -->
        <?php include'script.php'; ?>

    </body>
</html>

<?php
if(isset($_POST['admin_login'])){
   
    $username = mysqli_real_escape_string($conn, $_POST['user_name']);
    $userpassword = $_POST['user_password'];

    $view_data = "SELECT * FROM admin WHERE admin_name = '$username' AND admin_password = '$userpassword'";
        $result = mysqli_query($conn, $view_data) or die("Query Failed.");
        $data = mysqli_num_rows($result);
        if ($data == 1){
            $_SESSION['admin_name'] = $_POST['user_name'];
            echo '<script> window.location.href = "./";</script>';
        }
        else{
            echo '<script>alert("Login Failed.")</script>';
        }
        
}

?>