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
    <link rel="stylesheet" href="https://use.typekit.net/qpx5mzd.css">
    <link rel="shortcut icon" href="pictures/logo/logo_FINAL.svg"/>
    <title>No Heart</title>
    <script language="javascript" type="text/javascript" src="myScript.js" defer></script>
</head>
<body>
    <header class="container headerDesktop">
        <div class="row headerBackground"></div>
        <div class="row logoLine">
            <div class="col-2 black-stripe"></div>
            <div class="logo linePicture col-2 col-lg-2 col-md-3">
                <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="430 500 1080 1"><defs><style>.cls-1{fill:#16019a;}.cls-2{fill:#bac9e3;stroke:#16019a;stroke-miterlimit:10;stroke-width:2px;}</style></defs><path class="cls-1" d="M659.89,328.74c0-75.43,45-123.14,125.41-123.14,80.88,0,125.86,47.71,125.86,123.14V508.67H864.81V328.74c0-50-27.26-80.42-79.51-80.42-51.8,0-79.06,30.44-79.06,80.42V508.67H659.89Z"/><path class="cls-1" d="M950.24,360.09c0-89,65.43-154.49,158.12-154.49S1266.49,271,1266.49,360.09s-65.44,154.49-158.13,154.49S950.24,449.15,950.24,360.09Zm269.44,0c0-64.52-45.43-111.77-111.32-111.77S997,295.57,997,360.09s45.44,111.78,111.32,111.78S1219.68,424.61,1219.68,360.09Z"/><path class="cls-2" d="M691.55,737.17v4.09H605.64v-4.09c24.54-.41,28.64-12.69,28.64-24.55V602.16c0-61.37-44.19-65.46-61.37-65.46-15.55,0-61.37,4.09-61.37,65.46V712.62c0,12.27,4.1,24.55,28.64,24.55v4.09H454.27v-4.09c24.55,0,28.64-12.28,28.64-24.55V438.52c0-18-9.41-22.91-36-8.18l-2.05-4.09,62.59-36.82h4.09V573.52c12.28-38,49.1-40.91,61.37-40.91,16.36,0,90,4.09,90,83v97C663.32,724.89,667.41,737.17,691.55,737.17Z"/><path class="cls-2" d="M905.1,688.07c0,32.73-45,57.28-102.28,57.28-56.45,0-102.27-49.91-102.27-106.37s45.82-106.37,102.27-106.37c56,0,66.69,27,81.83,36.82,10.22,6.55,17.59,4.5,26.59-.41l6.13-3.68,2,4.09L809,633.66c-4.5,2.87-9.41,5.73-13.91,8.18a150.75,150.75,0,0,1,36.41-4.09C876.46,637.75,905.1,659.44,905.1,688.07ZM733.28,639c0,18.82,2,34,5.32,46.23,1.22-5.73,4.09-10.64,8.59-15.55h-.41l.82-.82c13.5-14.31,37.22-25.77,56-36.81l26.19-15.14c17.59-11,22.09-17.59,22.09-35.18,0-28.64-28.64-45-49.1-45S733.28,544.89,733.28,639Zm143.18,49.09c0-24.54-12.27-46.23-45-46.23-26.59-.41-44.18,4.91-58.5,13.5-23.73,14.73-38.46,28.64-26.59,51.14,16,31.09,42.55,34.78,56.45,34.78C839.64,741.26,876.46,733.07,876.46,688.07Z"/><path class="cls-2" d="M1119.87,737.17v4.09H1062.6V713c-7.37,19.64-25,32.32-57.28,32.32-36.82,0-73.64-16.37-73.64-61.37s40.92-65.46,94.1-65.46c32.73,0,45-20.45,45-40.91s-8.18-40.91-57.27-40.91-61.37,36.82-61.37,61.37h-4.09V532.61h4.09c0,8.18,2.05,12.28,11.05,12.28,6.54,0,21.68-12.28,50.32-12.28,65.45,0,90,23.73,90,45,0,24.55-24.55,45-77.73,45-49.5,0-61.37,25.77-61.37,61.36s10.23,57.28,40.91,57.28c36.82,0,57.28-20.46,57.28-53.19,0-18.82-9.41-23.73-36-8.18l-2-4.09L1087.14,639h4.09v73.64C1091.23,724.89,1095.33,737.17,1119.87,737.17Z"/><path class="cls-2" d="M1340,573.52l-93.28,55.23-2-4.09,7.37-4.09c10.23-7,25-18.82,24.54-38.86.41-28.64-16-45-36.81-45-16.37,0-44.6,4.09-45,65.46V712.62c.41,12.27,4.5,24.55,28.64,24.55v4.09h-85.91v-4.09c25,0,29-12.28,28.64-24.55V581.71c0-18.41-9.82-23.32-36-8.19l-2-4.09,62.59-36.82h4.09v35.6c9.41-33.55,32.32-35.6,45-35.6,29,0,50.72,17.59,61.36,30.69,11.46,12.68,18,16.77,34.37,7.77l2.45-1.64Z"/><path class="cls-2" d="M1477,719.57c-6.13,10.64-22.5,25.78-45.81,25.78-56.46,0-65-53.6-65.46-85.91v-94.1c0-12.27-4.09-24.55-28.64-24.55V536.7h52c-17.18-4.91-22.91-14.72-23.32-36.82.41-18.81-9.82-23.72-36-8.18l-2-4.09,62.6-36.82h4.09v26.59c.41,59.32,20.86,59.32,63,59.32h2.45v4.09H1423c-23.72,0-28.63,12.28-28.63,24.55v94.1c-.41,61.77,25.36,77.73,45,77.73,11,0,23.32-4.1,34.77-20.46Z"/></svg>
            </div>
            <div class="col-9 col-lg-8 col-md-7 black-stripe"></div>
        </div>

        <div class="row navBarLine2">
            <div class="col-7">
            </div>
            <nav class="col-4">
                <div class="navBar">
                    <a href="index.html">home</a>
                    <p class="border">.</p>
                    <a href="products.html" class="navBord curSecU">products</a>
                    <p class="border">.</p>
                    <a href="info.html" class="navBord">info</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Header for Mobile -->
    <header class="container headerMobile">
        <div class="row headerRowM">
            <div class="col-3 logoM">
              <object class="logoMImg" data="pictures/logo/logo_FINAL.svg" type="image/svg+xml" title="noheartLogo" alt="Logo"></object>
            </div>
            <div class="col-6 spaceM"></div>
            <div class="col-3 burgerM">
                <div id="navToggle" class="nav-toggle">
                    <img id="navClosed" class="navIcon" src="https://s.svgbox.net/hero-solid.svg?ic=menu&fill=16019a" width="40" height="40" alt="hamburger menu">
                    <img id="navOpen" class="navIcon hidden" src="https://s.svgbox.net/hero-solid.svg?ic=x&fill=16019a" width="40" height="40" alt="close hamburger">
                 </div>
            </div>
        </div>
    </header>

     <!-- mobile nav bar -->
     <div id="menue" class="menue">
        <ul>
          <li><a href="index.html">
          <img src="https://s.svgbox.net/materialui.svg?ic=home&fill=16019a" width="32" height="32"><p class="spaceLi linkTo">home</p>
          </a></li>
          <li><a href="products.html">
          <img src="https://s.svgbox.net/hero-solid.svg?ic=collection&fill=16019a" width="32" height="32"><p class="spaceLi linkTo curSecU">products</p></a></li>
          <li><a href="info.html">
          <img src="https://s.svgbox.net/hero-solid.svg?ic=information-circle&fill=16019a" width="32" height="32"><p class="spaceLi linkTo">info</p>
          </a></li>
        </ul>
    </div>

    <div class="mainP" id="mainP">
        <?php //var_dump($_POST);
        ?>
        <!-- Images for mobile -->
        <div class="mobileFunkt imageBoxM">
            <div class="signatureShirtImages imageProductM" <?php if ($_POST['val'] != 0) {
                    echo 'style="display:none"';}?>>
                <div class="picturesM white">
                    <img src="pictures/signatureShirt/shirt_front_white_signature.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/signatureShirt/shirt_back_white.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/signatureShirt/closeup/closeup_white_signature.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            
                <div class="picturesM black">
                    <img src="pictures/signatureShirt/shirt_front_black_signature.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/signatureShirt/shirt_back_black.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/signatureShirt/closeup/closeup_black_signature.svg" alt="SigShirt" class="productImageM closePicM">
                </div>

                <div class="picturesM creme">
                    <img src="pictures/signatureShirt/shirt_front_creme_signature.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/signatureShirt/shirt_back_creme.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/signatureShirt/closeup/closeup_creme_signature.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            </div>
            <div class="dystopianShirtImages imageProductM" <?php if ($_POST['val'] != 1) {
                    echo 'style="display:none"';}?>>
                <div class="picturesM white">
                    <img src="pictures/dystopianShirt/shirt_front_white_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianShirt/shirt_back_white_dystopian.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianShirt/closeup/closeup_white_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            
                <div class="picturesM black">
                    <img src="pictures/dystopianShirt/shirt_front_black_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianShirt/shirt_back_black_dystopian.svg"alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianShirt/closeup/closeup_black_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>

                <div class="picturesM creme">
                    <img src="pictures/dystopianShirt/shirt_front_creme_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianShirt/shirt_back_creme_dystopian.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianShirt/closeup/closeup_creme_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            </div>
            <div class="dystopianHoodieImages imageProductM" <?php if ($_POST['val'] != 2) {
                    echo 'style="display:none"';}?>>
                <div class="picturesM white">
                    <img src="pictures/dystopianHoodie/hoodie_front_white_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianHoodie/hoodie_back_white_dystopian.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianHoodie/closeup/closeup_white_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            
                <div class="picturesM black">
                    <img src="pictures/dystopianHoodie/hoodie_front_black_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianHoodie/hoodie_back_black_dystopian.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianHoodie/closeup/closeup_black_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>

                <div class="picturesM creme">
                    <img src="pictures/dystopianHoodie/hoodie_front_creme_dystopian.svg" alt="SigShirt" class="productImageM frontPicM">
                    <img src="pictures/dystopianHoodie/hoodie_back_creme_dystopian.svg" alt="SigShirt" class="productImageM backPicM">
                    <img src="pictures/dystopianHoodie/closeup/closeup_creme_dystopian.svg" alt="SigShirt" class="productImageM closePicM">
                </div>
            </div>
        </div>
        <section class="topBoxnarrows">
            <article class="arrow desktopFunkt"><p class="leftArrow arrowP desktopFunkt">&lt;</p></article>
            <article class="arrow mobileFunkt"><p class="leftArrowM arrowP mobileFunkt">&lt;</p></article>
            <article class="productBox">
                <div class="product" id="sigShirt" <?php if ($_POST['val'] != 0) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-3 leftBlock">
                                <div class="desktopFunkt">
                                    <!-- Front, Back and Close Up pics from shirt-->
                                    <img src="pictures/signatureShirt/shirt_front_white_signature.svg" alt="SigShirt" class="productImage white frontPic">
                                    <img src="pictures/signatureShirt/shirt_back_white.svg" alt="SigShirt" class="productImage backPic">
                                    <img src="pictures/signatureShirt/closeup/closeup_white_signature.svg" alt="SigShirt" class="productImage closePic">

                                    <img src="pictures/signatureShirt/shirt_front_black_signature.svg" alt="SigShirt" class="productImage black frontPic">
                                    <img src="pictures/signatureShirt/shirt_back_black.svg" alt="SigShirt" class="productImage backPic">
                                    <img src="pictures/signatureShirt/closeup/closeup_black_signature.svg" alt="SigShirt" class="productImage closePic">

                                    <img src="pictures/signatureShirt/shirt_front_creme_signature.svg" alt="SigShirt" class="productImage creme frontPic">
                                    <img src="pictures/signatureShirt/shirt_back_creme.svg" alt="SigShirt" class="productImage backPic">
                                    <img src="pictures/signatureShirt/closeup/closeup_creme_signature.svg" alt="SigShirt" class="productImage closePic">

                                    <!-- Buttons to switch from front, back and closeup-->
                                        <!-- White Buttons Signature Shirt -->
                                    <div class="container content white desktopFunkt">
                                        <div class="row">
                                            <div class="col-4 frontPicBut white" >
                                                <img src="pictures/signatureShirt/shirt_front_white_signature_preview.svg" class="pics" alt="Signature Shirt White Front">
                                            </div>
                                            <div class="col-4 backPicBut white">
                                                <img src="pictures/signatureShirt/shirt_back_white_preview.svg" class="pics" alt="Signature Shirt White Front">
                                            </div>
                                            <div class="col-4 closePicBut white">
                                                <img src="pictures/signatureShirt/closeup/closeup_white_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                            </div>
                                        </div>
                                    </div>

                                        <!-- Black Buttons Signature Shirt -->
                                    <div class="container content black desktopFunkt">
                                        <div class="row">
                                            <div class="col-4 frontPicBut black" >
                                                <img src="pictures/signatureShirt/shirt_front_black_signature.svg" class="pics" alt="Signature Shirt Front">
                                            </div>
                                            <div class="col-4 backPicBut black">
                                                <img src="pictures/signatureShirt/shirt_back_black.svg" class="pics" alt="Signature Shirt Back">
                                            </div>
                                            <div class="col-4 closePicBut black">
                                                <img src="pictures/signatureShirt/closeup/closeup_black_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                            </div>
                                        </div>
                                    </div>

                                        <!-- Creme Buttons Signature Shirt -->
                                    <div class="container content creme desktopFunkt">
                                        <div class="row">
                                            <div class="col-4 frontPicBut creme" >
                                                <img src="pictures/signatureShirt/shirt_front_creme_signature_preview.svg" class="pics" alt="Signature Shirt Front">
                                            </div>
                                            
                                            <div class="col-4 backPicBut creme">
                                                <img src="pictures/signatureShirt/shirt_back_creme_preview.svg" class="pics" alt="Signature Shirt Back">
                                            
                                            </div>
                                            
                                            <div class="col-4 closePicBut creme">
                                                <img src="pictures/signatureShirt/closeup/closeup_creme_signature.svg" class="pics" alt="Signature Shirt Closeup">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Radio Buttons -->
                                        <!-- White Radio Buttons -->
                                    <div class="points">
                                        <label class="control control-radio whiteRad">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_white"></div>
                                        </label>
                                        
                                        <!-- Black Radio Button -->
                                        <label class="control control-radio blackRad">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_black"></div>
                                        </label>

                                        <!-- Creme Radio Button -->
                                        <label class="control control-radio cremeRad">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_creme"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="mobileFunkt radPointsM">
                                    <div class="pointsM">
                                        <label class="control control-radio whiteRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_white"></div>
                                        </label>
                                        
                                        <!-- Black Radio Button -->
                                        <label class="control control-radio blackRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_black"></div>
                                        </label>

                                        <!-- Creme Radio Button -->
                                        <label class="control control-radio cremeRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_creme"></div>
                                        </label>
                                    </div>
                                </div>
                                <h1>Signature Shirt</h1>

                                <p>
                                    This piece features our signature logo. <br>It features the lettering “no” and “heart” written across the left chest. <br>This design is intentionally minimal, serving as an easy to wear, everyday addition to any wardrobe.
                                </p>
                                <p class="detP">
                                    <h3> Detailed Information </h3>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> White, Creme or Black<br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Regular fit<br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Chestprint
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="product" id="dystShirt" <?php if ($_POST['val'] != 1) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-3 leftBlock">
                                <div class="desktopFunkt">

                                    <!-- Front, Back and Close Up pics from shirt-->
                                    <img src="pictures/dystopianShirt/shirt_front_white_dystopian.svg" alt="Dystopian Shirt White Front" class="productImage white frontPic">
                                    <img src="pictures/dystopianShirt/shirt_back_white_dystopian.svg" alt="Dystopian Shirt White Back" class="productImage backPic">
                                    <img src="pictures/dystopianShirt/closeup/closeup_white_dystopian.svg" alt="Dystopian Shirt White Closeup" class="productImage closePic">

                                    <img src="pictures/dystopianShirt/shirt_front_black_dystopian.svg" alt="Dystopian Shirt Black Front" class="productImage black frontPic">
                                    <img src="pictures/dystopianShirt/shirt_back_black_dystopian.svg" alt="Dystopian Shirt Black Back" class="productImage backPic">
                                    <img src="pictures/dystopianShirt/closeup/closeup_black_dystopian.svg" alt="Dystopian Shirt Black Closeup" class="productImage closePic">

                                    <img src="pictures/dystopianShirt/shirt_front_creme_dystopian.svg" alt="Dystopian Shirt Creme Fron" class="productImage creme frontPic">
                                    <img src="pictures/dystopianShirt/shirt_back_creme_dystopian.svg" alt="Dystopian Shirt Creme Back" class="productImage backPic">
                                    <img src="pictures/dystopianShirt/closeup/closeup_creme_dystopian.svg" alt="Dystopian Shirt Creme Closeup" class="productImage closePic">

                                    <!-- Buttons to switch from front, back and closeup-->
                                        <!-- White Buttons Signature Shirt -->
                                    <div class="container content white">
                                        <div class="row">
                                            <div class="col-4 frontPicBut white" >
                                                <img src="pictures/dystopianShirt/shirt_front_white_dystopian_preview.svg" class="pics" alt="Dystopian Shirt Button White Front">
                                            </div>
                                            <div class="col-4 backPicBut white">
                                                <img src="pictures/dystopianShirt/shirt_back_white_dystopian_preview.svg" class="pics" alt="Dystopian Shirt Button White Back">
                                            </div>
                                            <div class="col-4 closePicBut white">
                                                <img src="pictures/dystopianShirt/closeup/closeup_white_dystopian.svg" class="pics" alt="Dystopian Shirt Button White Closeup">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container content black">
                                        <div class="row">
                                            <div class="col-4 frontPicBut black" >
                                                <img src="pictures/dystopianShirt/shirt_front_black_dystopian.svg" class="pics" alt="Dystopian Shirt Button Black Front">
                                            </div>
                                            <div class="col-4 backPicBut black">
                                                <img src="pictures/dystopianShirt/shirt_back_black_dystopian.svg" class="pics" alt="Dystopian Shirt Button Black Back">
                                            </div>
                                            <div class="col-4 closePicBut black">
                                                <img src="pictures/dystopianShirt/closeup/closeup_black_dystopian.svg" class="pics" alt="Dystopian Shirt Button Black Closeup">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container content creme">
                                        <div class="row">
                                            <div class="col-4 frontPicBut creme" >
                                                <img src="pictures/dystopianShirt/shirt_front_creme_dystopian_preview.svg" class="pics" alt="Dystopian Shirt Button Creme Front">
                                            </div>
                                            <div class="col-4 backPicBut creme">
                                                <img src="pictures/dystopianShirt/shirt_back_creme_dystopian_preview.svg" class="pics" alt="Dystopian Shirt Button Creme Back">
                                            </div>
                                            <div class="col-4 closePicBut creme">
                                                <img src="pictures/dystopianShirt/closeup/closeup_creme_dystopian.svg" class="pics" alt="Dystopian Shirt Button Creme Closeup">
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
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="mobileFunkt radPointsM">
                                    <div class="pointsM">
                                        <label class="control control-radio whiteRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_white"></div>
                                        </label>
                                        
                                        <!-- Black Radio Button -->
                                        <label class="control control-radio blackRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_black"></div>
                                        </label>

                                        <!-- Creme Radio Button -->
                                        <label class="control control-radio cremeRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_creme"></div>
                                        </label>
                                    </div>
                                </div>
                                <h1> Dystopian Shirt </h1>
                                <p>
                                This piece channels the collection’s dystopian theme, 
                                with a print of a dystopian city in the shape of a broken heart on the back of the T-shirt. 
                                <br>This design is intentionally made, to serve as an every day fit, well combined with cargo pants.
                                This piece serves your everyday wear.

                                    </p>
                                <p class="detP">
                                    <h3>Detailed Information</h3>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> White, Creme or Black<br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Regular fit <br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Backprint
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product" id="dystHood" <?php if ($_POST['val'] != 2) {
                    echo 'style="display:none"';}?>>
                    <div class="container">
                        <div class="row prodBoxRow">
                            <div class="col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-3 leftBlock">
                                <div class="desktopFunkt">




                                    <!-- Front, Back and Close Up pics from Hoodie-->
                                    <img src="pictures/dystopianHoodie/hoodie_front_white_dystopian.svg" alt="Dystopian Hoodie White Front" class="productImage white frontPic hoodPics">
                                    <img src="pictures/dystopianHoodie/hoodie_back_white_dystopian.svg" alt="Dystopian Hoodie White Back" class="productImage backPic hoodPics">
                                    <img src="pictures/dystopianHoodie/closeup/closeup_white_dystopian.svg" alt="Dystopian Hoodie White Closeup" class="productImage closePic">

                                    <img src="pictures/dystopianHoodie/hoodie_front_black_dystopian.svg" alt="Dystopian Hoodie Black Front" class="productImage black frontPic hoodPics">
                                    <img src="pictures/dystopianHoodie/hoodie_back_black_dystopian.svg" alt="Dystopian Hoodie Black Back" class="productImage backPic hoodPics">
                                    <img src="pictures/dystopianHoodie/closeup/closeup_black_dystopian.svg" alt="Dystopian Hoodie Black Closeup" class="productImage closePic">

                                    <img src="pictures/dystopianHoodie/hoodie_front_creme_dystopian.svg" alt="Dystopian Hoodie Creme Front" class="productImage creme frontPic hoodPics">
                                    <img src="pictures/dystopianHoodie/hoodie_back_creme_dystopian.svg" alt="Dystopian Hoodie Creme Back" class="productImage backPic hoodPics">
                                    <img src="pictures/dystopianHoodie/closeup/closeup_creme_dystopian.svg" alt="Dystopian Hoodie Creme Closeup" class="productImage closePic">

                                    <!-- Buttons to switch from front, back and closeup-->
                                    <div class="container content white">
                                        <div class="row">
                                            <div class="col-4 frontPicBut white" >
                                                <img src="pictures/dystopianHoodie/hoodie_front_white_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button White Front">
                                            </div>
                                            <div class="col-4 backPicBut white">
                                                <img src="pictures/dystopianHoodie/hoodie_back_white_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button White Back">
                                            </div>
                                            <div class="col-4 closePicBut white">
                                                <img src="pictures/dystopianHoodie/closeup/closeup_white_dystopian.svg" class="pics hoodCloseUpBut" alt="Dystopian Hoodie Button White Closeup">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container content black">
                                        <div class="row">
                                            <div class="col-4 frontPicBut black" >
                                                <img src="pictures/dystopianHoodie/hoodie_front_black_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button Black Front">
                                            </div>
                                            <div class="col-4 backPicBut black">
                                                <img src="pictures/dystopianHoodie/hoodie_back_black_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button Black Back">
                                            </div>
                                            <div class="col-4 closePicBut black">
                                                <img src="pictures/dystopianHoodie/closeup/closeup_black_dystopian.svg" class="pics hoodCloseUpBut" alt="Dystopian Hoodie Button Black Closeup">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container content creme">
                                        <div class="row">
                                            <div class="col-4 frontPicBut creme" >
                                                <img src="pictures/dystopianHoodie/hoodie_front_creme_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button Creme Front">
                                            </div>
                                            <div class="col-4 backPicBut creme">
                                                <img src="pictures/dystopianHoodie/hoodie_back_creme_dystopian_preview.svg" class="pics" alt="Dystopian Hoodie Button Creme Back">
                                            </div>
                                            <div class="col-4 closePicBut creme">
                                                <img src="pictures/dystopianHoodie/closeup/closeup_creme_dystopian.svg" class="pics hoodCloseUpBut" alt="Dystopian Hoodie Button Creme Closeup">
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
                            </div>

                            <!-- Vertical Line which seperates shirts with text-->
                            <div class="col-1 lineDiv">
                                <p class="line">.</p>
                            </div>

                            <!-- Right side, text and detailed information-->
                            <div class="productDesc col-12 col-sm-12 col-xs-12 col-md-12 col-lg-12 col-xl-8">
                                <div class="mobileFunkt radPointsM">
                                    <div class="pointsM">
                                        <label class="control control-radio whiteRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_white"></div>
                                        </label>
                                        
                                        <!-- Black Radio Button -->
                                        <label class="control control-radio blackRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_black"></div>
                                        </label>

                                        <!-- Creme Radio Button -->
                                        <label class="control control-radio cremeRadM">
                                                <input type="radio" name="radio" />
                                            <div class="control_indicator control_indicator_creme"></div>
                                        </label>
                                    </div>
                                </div>
                                <h1> Dystopian Hoodie </h1>
                                <p>
                                This piece channels the collection’s dystopian theme, 
                                with a print of a dystopian city in the shape of a broken heart on the back of the T-shirt. 
                                <br>This design is intentionally made, to serve as an every day fit, well combined with cargo pants.
                                This piece serves your everyday wear.
                                </p>
                                <p class="detP">
                                    <h3>Detailed Information</h3>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> White, Creme or Black<br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Slightly oversized fit <br>
                                    <img class ="heart" src="pictures/contactDetails/icons/herz_blau_thick.svg"/> Backprint
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="arrow desktopFunkt"><p class="rightArrow arrowP desktopFunkt">&gt;</p></article>
            <article class="arrow mobileFunkt"><p class="rightArrowM arrowP mobileFunkt">&gt;</p></article>
        </section>
    </div>
    <script>
        const navToggle = document.querySelector('#navToggle');
        const nav = document.querySelector('#menue');
        const navIcon = document.querySelectorAll('.navIcon');
        const mainP = document.querySelector('#mainP');

        navToggle.addEventListener("click", () => {
            nav.classList.toggle('open');
            navIcon.forEach(icon => {
                icon.classList.toggle('hidden')
            });
            mainP.classList.toggle('rutsch');
        })
    </script>
</body>
</html>
