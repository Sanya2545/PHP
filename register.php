<?php
$errors = array();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email='';

    if(isset($_POST['email']) and !empty($_POST['email']))
    {
        $email=$_POST['email'];
    }
    else
    {
        $errors['email']="Field is required";
    }
    $password='';
    if(isset($_POST['password']) and !empty($_POST['password']))
    {
        $email=$_POST['password'];
    }    
    else
    {    
        $errors['password']="Field is required";
    }
    $phone = '';
    if(isset($_POST['phone']) and !empty($_POST['phone']))
    {
        $email=$_POST['phone'];
    }
    else
    {
        $errors['phone']="Field is required";
    }
    $confirm_password='';
    if(isset($_POST['confirm_password']) and !empty($_POST['confirm_password']))
    {    
        $email=$_POST['confirm_password'];
    }
    else
    {
        $errors['confirm_password']="Field is required";
    }
    if($password != $confirm_password)
    {
        $errors['confirm_password'] = "Passwords do not match";
    }

    if(count($errors) == 0)
    {
        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
        $file_name = uniqid('300_').'.jpg';
        $file_save_path=$uploaddir.$file_name;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $file_save_path))
        {
            echo "Файл корректен и был успешно загружен.\n";
        }
        else 
        {
            echo "Возможная атака с помощью файловой загрузки!\n";
        }
    }
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
            <form method="post" id = "form_register" enctype="multipart/form-data">

                <?php create_input("email", "Email", "email", $errors); ?>

                <?php create_input("phone", "Phone", "text", $errors); ?>

                <?php create_input("password", "Password", "password", $errors); ?>

                <?php create_input("confirm_password", "Confirm_Password", "password", $errors); ?>

                <?php create_input("image", "Image", "file", $errors); ?>

                <img id = "preview" width = "300px" src="http://immh.kiev.ua/wp-content/uploads/2017/11/default.png"/>
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

<script>
  $(function() {
        $('#form_register #image').on('input', function()
        {
            readURL(this);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    //$(this).parent().append("<img src='"+e.target.result+"'/>");
                     $('#preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    });

</script>

</body>
</html>