<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <?php include "helpers/_styles.php";?>
   
    
</head>

<body>
    <?php include "helpers/_navbar.php";?>
    <?php include "helpers/_inputHelper.php"; ?>
    <div class="container">
            <div class="row mt-3">
                <div class="offset-md-3 col-md-6 ">
                    <h3>Registration
                        </ <form method="post"></h3>
                        
                        <?php create_input("email", "Email", "email");?>
                        <?php create_input("phone", "Phone", "text");?>
                        <?php create_input("password", "Password", "password");?>
                        <?php create_input("confirmPassword", "ConfirmPassword", "password");?>
                        <?php create_input("photo", "Photo", "file");?>
                        
                        

                        <!-- <div class="form-group">
                            <input type="text" 
                            class="form-control"
                             name="email" 
                             placeholder="Your Email *"
                             value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" 
                            class="form-control"
                             name="phone" 
                             placeholder="Your Phone*"
                             value="" />
                        </div>
                        <div class="form-group">
                            <input type="password"
                            class="form-control"
                            placeholder="Your Password *"
                            value="" />
                        </div>
                        -->

                        



                        
                        <div class="form-group">
                            <input type="submit" class="btn-success" value="Реєстрація"/>
                        </div>
                        <div class="form-group">
                            <a href="login.php" class="ForgetPwd"> Go to Login </a>
                        </div>
                        </form>
                </div>

            </div>
    </div>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>