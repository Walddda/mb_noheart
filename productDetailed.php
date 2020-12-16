<?php if (!isset($_POST['val'])) {
    header("Location: products.html");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheetHeader.css">
    <link rel="stylesheet" href="stylesheetProductDetailed.css">
    <link rel="stylesheet" href="https://use.typekit.net/bbg6boj.css">
    <link rel="shortcut icon" href="pictures/logo_FINAL.svg"/>
    <title>No Heart</title>
    <script language="javascript" type="text/javascript" src="myScript.js" defer></script>
</head>
<body>
    <header class="container headerDesktop">
        <div class="row headerBackground"></div>
        <div class="row logoLine">
            <div class="col-2 black-stripe"></div>
            <div class="logo col-2 col-lg-2 col-md-3">
                <img src="pictures/logo_FINAL.svg">
            </div>
            <div class="col-9 col-lg-8 col-md-7 black-stripe"></div>
        </div>
        
        <div class="row navBarLine2">
            <div class="col-7">
            </div>
            <nav class="col-4">
                <div class="navBar">
                    <a href="index.html">Home</a>
                    <p class="border">.</p>
                    <a href="products.html" class="navBord">Products</a>
                    <p class="border">.</p>
                    <a href="info.html" class="navBord">Info</a>
                </div>
            </nav>
        </div>
    </header>
    <header class="container headerMobile">
        <div class="row headerRowM">
            <div class="col-3 logoM"><img src="pictures/logo_FINAL.svg" class="logoMImg"></div>
            <div class="col-6 spaceM"></div>
            <div class="col-3 burgerM">
                <svg stroke="#B5B5B5" width="55" height="55" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" fill="none"><path xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path></svg>
            </div>
        </div>
    </header>

    

    <div class="mainP">
    <!-- --> 
        <?php //var_dump($_POST);
        ?>
        <section class="topBoxnarrows">
            <article class="arrow"><p class="leftArrow arrowP">&lt;</p></article>
            <article class="productBox">
                <div class="product" id="sigShirt" <?php if ($_POST['val'] != 0) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-3 leftBlock">
                                
                                <!-- Front, Back and Close Up pics from shirt-->
                                <img src="pictures/shirt_front_white_signature.svg" alt="SigShirt" class="productImage white frontPic">
                                <img src="pictures/shirt_back_white.svg" alt="SigShirt" class="productImage backPic">
                                <img src="pictures/closeup_white_signature.svg" alt="SigShirt" class="productImage closePic">
                                
                                <img src="pictures/shirt_front_black_signature.svg" alt="SigShirt" class="productImage black frontPic">
                                <img src="pictures/shirt_back_black.svg" alt="SigShirt" class="productImage backPic">
                                <img src="pictures/closeup_black_signature.svg" alt="SigShirt" class="productImage closePic">
                                
                                <img src="pictures/shirt_front_creme_signature.svg" alt="SigShirt" class="productImage creme frontPic">
                                <img src="pictures/shirt_back_creme.svg" alt="SigShirt" class="productImage backPic">
                                <img src="pictures/closeup_creme_signature.svg" alt="SigShirt" class="productImage closePic">

                                <!-- Buttons to switch from front, back and closeup--> 
                                <div class="container content white">
                                    <div class="row">
                                        <div class="col-4 frontPicBut white" >
                                            <img src="pictures/shirt_front_white_signature.svg" class="pics" alt="Signature Shirt Front">
                                        </div>
                                        <div class="col-4 backPicBut white">
                                            <img src="pictures/shirt_back_white.svg" class="pics" alt="Signature Shirt Back">
                                        </div>
                                        <div class="col-4 closePicBut white">
                                            <img src="pictures/closeup_white_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                        </div>
                                    </div>
                                </div>

                                <div class="container content black">
                                    <div class="row">
                                        <div class="col-4 frontPicBut black" >
                                            <img src="pictures/shirt_front_black_signature.svg" class="pics" alt="Signature Shirt Front">
                                        </div>
                                        <div class="col-4 backPicBut black">
                                            <img src="pictures/shirt_back_black.svg" class="pics" alt="Signature Shirt Back">
                                        </div>
                                        <div class="col-4 closePicBut black">
                                            <img src="pictures/closeup_black_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="container content creme">
                                    <div class="row">
                                        <div class="col-4 frontPicBut creme" >
                                            <img src="pictures/shirt_front_creme_signature.svg" class="pics" alt="Signature Shirt Front">
                                        </div>
                                        <div class="col-4 backPicBut creme">
                                            <img src="pictures/shirt_back_creme.svg" class="pics" alt="Signature Shirt Back">
                                        </div>
                                        <div class="col-4 closePicBut creme">
                                            <img src="pictures/closeup_creme_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                        </div>
                                    </div>
                                </div>

                                <!-- Radio Buttons -->
                                <div class="points">
                                    <label class="control control-radio whiteRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_white"></div>
                                    </label>
                                    <label class="control control-radio blackRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_black"></div>
                                    </label>
                                    <label class="control control-radio cremeRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_creme"></div>
                                    </label>
                                </div>
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-8">
                                <h1> Signature Shirt </h1>

                                <p>
                                    This piece features our signature logo. It features the lettering “no” and “heart” written across the left chest. This design is intentionally minimal, serving as an easy to wear, everyday addition to any wardrobe.
                                </p>
                                <p>
                                    Detailed Information<br> 
                                    - White, Creme or Black<br>
                                    - Regular fit<br>
                                    - Chestprint
                                </p>                                
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="product" id="dystShirt" <?php if ($_POST['val'] != 1) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-3 leftBlock">
                                <img src="pictures/signature_shirt_white.png" alt="SigShirt" class="productImage white">
                                <img src="pictures/signature_shirt_black_forTesting.png" alt="SigShirt" class="productImage black">
                                <img src="pictures/signature_shirt_creme_forTesting.png" alt="SigShirt" class="productImage creme">
                                

                                <div class="points">
                                    <label class="control control-radio whiteRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_white"></div>
                                    </label>
                                    <label class="control control-radio blackRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_black"></div>
                                    </label>
                                    <label class="control control-radio cremeRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_creme"></div>
                                    </label>
                                </div>
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-8">
                                <h1> Dystopian Shirt </h1>
                                <p>
                                    This piece channels the collection’s dystopian theme, with a print of a deserted city in the shape of a broken heart on the back of the T-shirt. It features the brand logo as a small detail on the front.
                                </p>
                                <p>
                                    Detailed Information<br> 
                                    - White, Creme or Black<br>
                                    - Regular fit <br>
                                    - Backprint
                                </p>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product" id="dystHood" <?php if ($_POST['val'] != 2) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-3 leftBlock">
                                <img src="pictures/signature_shirt_white.png" alt="SigShirt" class="productImage white">
                                <img src="pictures/signature_shirt_black_forTesting.png" alt="SigShirt" class="productImage black">
                                <img src="pictures/signature_shirt_creme_forTesting.png" alt="SigShirt" class="productImage creme">
                                

                                <div class="points">
                                    <label class="control control-radio whiteRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_white"></div>
                                    </label>
                                    <label class="control control-radio blackRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_black"></div>
                                    </label>
                                    <label class="control control-radio cremeRad">
                                            <input type="radio" name="radio" />
                                        <div class="control_indicator control_indicator_creme"></div>
                                    </label>
                                </div>
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-8">
                                <h1> Dystopian Hoodie </h1>
                                <p>
                                    This piece channels the collection’s dystopian theme, with a print of a deserted city in the shape of a broken heart on the back of the hoodie. It features the brand logo as a small detail on the front.
                                </p>
                                <p>
                                    Detailed Information<br> 
                                    - White, Creme or Black<br>
                                    - Slightly oversized fit <br>
                                    - Backprint
                                </p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="arrow"><p class="rightArrow arrowP">&gt;</p></article>
        </section>
    </div>
</body>
</html>