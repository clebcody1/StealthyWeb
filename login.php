<?php require_once 'inc/head.php'; ?>
<?php require_once 'inc/head.php'; ?>
<?php require_once 'inc/header.php'; ?>


<section class="hero-section">
    <div class="container">
        <div class="align-items-center">
            <div class="d-flex justify-content-center align-items-center vh-100" >
                <form method="post" action="" style="width: 23rem;" class="shadow w-450 p-3 m-2 " >
                    <!-- <Img src="images/Alogo.jpg" style="width:100px;" class="rounded mx-auto d-block" alt="logo"> -->
                    <h3 class="fw-bold mb-3 my pb-3 d-flex justify-content-center " style="letter-spacing: 1px; color: white;">LOGIN</h3>
                    <div class="form-outline mb-4">
                        <label class="form-label  fw-medium color" style="letter-spacing: 1px; color: white;" >Username</label>
                        <input type="text" name="username" class="form-control form-control" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label  fw-medium color"style="letter-spacing: 1px; color: white;">Password</label>
                        <input type="password" name="password" class="form-control form-control" />
                    </div>
                    <a href="users/forgetPassword.php" class="text-decoration-none color"style="letter-spacing: 1px; color: white;">Forgot Password?</a>
                    <div class="pt-1 mb-3 d-flex justify-content-center ">
                        <input type="submit" name="login" class="btn" value="Login" />
                    </div>
                    Already had an account?<a href="register.php" class="text-decoration-none bg-primary"style="letter-spacing: 1px; color: white;">register?</a>
                </form>
            </div>
        </div>
    </div>

</section>
<?php require_once 'inc/footer.php';?>