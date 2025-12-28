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
    <title>Vintage 88 - Home Page</title>
    <link rel="stylesheet" type= "text/css" href="css/user_style.css">
    <!--- font awesome link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!--- box icon link --->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>

     <!--- front page slider --->
    <div class="slider-container">
        <div class="slider">
            <div class="slideBox active">
                <div class="textBox">
                    <h1>we represent ourselves through <br> clothing fashion </h1>
                    <a href="clothing.php" class="btn">shop now</a>
                </div>
                
                <div class="imgBox">
                    <img src="images/slider.jpg">
                </div>
            </div>

            <div class="slideBox">
                <div class="textBox">
                    <h1> different and unique clothes shows <br> my confidence </h1>
                    <a href="clothing.php" class="btn">shop now</a>
                </div>
                
                <div class="imgBox">
                    <img src="images/slider0.jpg">
                </div>
            </div>
        </div>
        <ul class="controls">
            <li onclick="nextSlide();" class="next"> <i class="bx bx-right-arrow-alt"></i></li>
            <li onclick="prevSlide();" class="prev"> <i class="bx bx-left-arrow-alt"></i></li>
        </ul>
    </div>

    <!--- service sec --->
    <div class="service">
        <div class="box-container">
            <!--- item box --->  
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/services.png" class="img1">
                        <img src="images/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>

             <!--- item box --->  
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/services (2).png" class="img1">
                        <img src="images/services (3).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>payment </h4>
                    <span>100% secure</span>
                </div>
            </div>

            <!--- item box --->  
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/services (5).png" class="img1">
                        <img src="images/services (6).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>support </h4>
                    <span>24*7 hours</span>
                </div>
            </div>

             <!--- item box --->  
             <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/services (7).png" class="img1">
                        <img src="images/services (8).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>gift service</h4>
                    <span>support gift service</span>
                </div>
            </div>

             <!--- item box --->  
             <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/service.png" class="img1">
                        <img src="images/service (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>returns </h4>
                    <span>24*7 free returns</span>
                </div>
            </div>
            
            <!--- item box --->  
            <div class="box">
                <div class="icon">
                    <div class="icon-box">
                        <img src="images/services.png" class="img1">
                        <img src="images/services (1).png" class="img2">
                    </div>
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>100% secure</span>
                </div>
            </div>
        </div>
    </div>

    <!--- categories section--->
    <div class="categories">
        <div class="heading">
            <h1>categories features</h1>
            <img src="images/separator-img.png"> 
        </div>

        <div class="box-container">
            <div class="box">
                <img src="images/categories.webp">
                <a href="clothing.php" class="btn">shorts</a>
            </div>

            <div class="box">
                <img src="images/categories0.webp">
                <a href="clothing.php" class="btn">jackets</a>
            </div>

            <div class="box">
                <img src="images/categories1.webp">
                <a href="clothing.php" class="btn">shirts</a>
            </div>

            <div class="box">
                <img src="images/categories2.jpg">
                <a href="clothing.php" class="btn">dress</a>
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