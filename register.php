<?php
$errors = array();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email='';
    if(isset($_POST['email']) and !empty($_POST['email']))
        $email=$_POST['email'];
    else
        $errors['email']="Field is required";
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "helpers/_styles.php"; ?>
</head>
<body>
<?php include "helpers/_navbar.php"; ?>
<?php include "helpers/_inputHelper.php"; ?>

<div class="container">
    <div class="row mt-3">
        <div class="offset-md-3 col-md-6">
            <h3 class="text-center">Реєстрація</h3>
            <?php 
                if(count($errors)!=0)
                {
                    echo '
                    <div class="alert alert-danger" role="alert">
                        Дані вказано не коректно!
                    </div>
                    ';
                }
            ?>
            <form method="post">

                <?php create_input("email", "Email", "email", $errors); ?>

                <?php create_input("phone", "Phone", "text", $errors); ?>

                <?php create_input("password", "Password", "password", $errors); ?>

                <?php create_input("confirm_password", "Confirm_Password", "password", $errors); ?>

                <?php create_input("image", "Image", "file", $errors); ?>


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Реєструватися"/>
                </div>
                <div class="form-group">
                    <a href="login.php" class="ForgetPwd">Перейти в логін</a>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
include "helpers/_scripts.php";
?>
</body>
</html>