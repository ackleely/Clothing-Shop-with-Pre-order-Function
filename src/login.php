<?php
    include 'components/connect.php';

    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    }else{
        $user_id = '';
    }

    if (isset($_POST['submit'])){

        $email = $_POST['email'];
        $email = filter_var($email , FILTER_SANITIZE_STRING);

        $pass = sha1($_POST['pass']);
        $pass = filter_var($pass , FILTER_SANITIZE_STRING);

        $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
        $select_user->execute([$email, $pass]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($select_user->rowCount() > 0){
            setcookie('user_id', $row['id'], time() + 60*60*24*30, '/');
            header('location:home.php');
        } else {
           $warning_msg[] = 'incorrect email or password';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage 88 - User Login Page</title>

    <link rel="stylesheet" type= "text/css" href="css/user_style.css">
    <!--- font awesome link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--- box icon link --->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner_login">
        <div class="detail">
            <h1>login</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste ducimus enim nisi. <br> Ratione quae beatae eos possimus pariatur exercitationem at illum accusantium quo ipsa consequuntur, dolore tempore, minus fuga.</p>
            <span> <a href="home.php">home</a> <i class="bx bx-right-arrow-alt"></i>login</span>
        </div>
    </div>

    <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data" class="login">
            <h3>LOGIN HERE NOW!</h3>

            <div class="input-field">
                <p>Your Email <span>*</span></p>
                <input type="email" name="email" placeholder="Enter Your Email" maxlength="50" required class="box">
            </div>

            <div class="input-field">
                <p>Your Password <span>*</span></p>
                <input type="password" name="pass" placeholder="Enter Your Password" maxlength="50" required class="box">
            </div>

           
            <p class="link"> Do not have an Account? <a href="register.php"> Register Now </a></p>
            <input type="submit" name="submit" value="Login Now!" class="btn">
        </form>
    </div>




    <?php include 'components/footer.php'; ?>
    <!--- sweetaleart link --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--- custom js link link --->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html>