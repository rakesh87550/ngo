<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
        <title>Register, Admin | NGO - We For You Organizatione</title>
<?php include'style.php'; ?>

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-5 col-md-5">
                        <div class="auth-full-page-content d-flex p-5">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h4 class="mb-0">Register Account</h4>
                                        </div>
                                        <form class="needs-validation custom-form mt-4 pt-2" novalidate action="" method="POST">
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">User Name</label>
                                                <input type="text" class="form-control" name="user_name" id="useremail" placeholder="Enter email" required>  
                                                <div class="invalid-feedback">
                                                    Please Enter Email
                                                </div>      
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="user_password" id="userpassword" placeholder="Enter password" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Password
                                                </div>       
                                            </div>
                                            <div class="mb-3">
                                                <p class="mb-0">By registering you agree to the We For You <a href=".././" class="text-primary">Terms of Use</a></p>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-50 waves-effect waves-light text-center" type="submit" name="admin_signup">Sign Up</button>
                                            </div>
                                        </form>

                                        <div class="mt-2 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="login.php" class="text-primary fw-semibold"> Login </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
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
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <?php include'script.php'; ?>

    </body>
</html>

<?php
if(isset($_POST['admin_signup'])){
    $u_name = $_POST['user_name'];
    $u_password = $_POST['user_password'];

    $insert_data = "insert into admin(admin_id, admin_name, admin_password, admin_role) values('', '$u_name', '$u_password', '')";
    
    $run_result = mysqli_query($conn, $insert_data);
    if($run_result){
        echo '<script>alert("User Data inserted.")</script>';
    }
    else{
        echo '<script>alert("User Data not inserted.")</script>';
    }
}

?>