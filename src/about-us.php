<?php
 include 'components/connect.php';

 if (isset($_COOKIE['user_id'])){
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage 88 - About Us Page</title>
    <link rel="stylesheet" type= "text/css" href="css/user_style.css">
    <!--- font awesome link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--- box icon link --->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <!--- about --->
    <div class="banner_aboutus">
        <div class="detail">
            <h1>about us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iste ducimus enim nisi. <br> Ratione quae beatae eos possimus pariatur exercitationem at illum accusantium quo ipsa consequuntur, dolore tempore, minus fuga.</p>
            <span> <a href="home.php">home</a> <i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>

    </div>

    <!--- mission --->
    <div class="mission">
        <div class="box-container">
           <div class="box">
                <div class="heading">
                    <h1>our mission</h1>
                    <img src="images/separator-img.png">
                </div>
                
                <div class="detail">
                    <div class="img-box">
                        <img src="images/mission.jpg">
                    </div>

                    <div>
                        <h2>mskamsakmaksasaks</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium assumenda asperiores nisi, quisquam ullam consectetur perspiciatis. Accusantium exercitationem excepturi deserunt consectetur? Laboriosam, fugit error neque expedita odio at fuga obcaecati?</p>
                    </div>
                </div>

                <div class="detail">
                    <div class="img-box">
                        <img src="images/mission0.jpg">
                    </div>

                    <div>
                        <h2>mskamsakmaksasaks</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium assumenda asperiores nisi, quisquam ullam consectetur perspiciatis. Accusantium exercitationem excepturi deserunt consectetur? Laboriosam, fugit error neque expedita odio at fuga obcaecati?</p>
                    </div>
                </div>

                <div class="detail">
                    <div class="img-box">
                        <img src="images/mission1.png">
                    </div>

                    <div>
                        <h2>mskamsakmaksasaks</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium assumenda asperiores nisi, quisquam ullam consectetur perspiciatis. Accusantium exercitationem excepturi deserunt consectetur? Laboriosam, fugit error neque expedita odio at fuga obcaecati?</p>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="images/form2.png" alt="" class="img">
            </div>
        </div>
    </div>

    <?php include 'components/footer.php'; ?>
     <!--- sweetaleart link --->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--- custom js link link --->
    <script src="js/user_script.js"></script>

    <?php include 'components/alert.php'; ?>
</body>
</html>