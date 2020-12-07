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
    <link rel="stylesheet" href="https://use.typekit.net/owz8zel.css">
    <title>No Heart</title>
    <script language="javascript" type="text/javascript" src="myScript.js" defer></script>
</head>
<body>
    <header class="container ">
        <div class="row logoLine">
            <div class="col-1 black-stripe"></div>
            <div class="logo col-2 col-lg-2 col-md-3"><img src="pictures/logo_blau_2.png"></div>
            <div class="col-9 col-lg-9 col-md-8 black-stripe"></div>
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

    <div class="mainP">
        <?php var_dump($_POST);
        ?>
        <section class="topBoxnarrows">
            <article class="arrow"><p class="leftArrow arrowP">&lt;</p></article>
            <article class="productBox">
                <div class="product" id="sigShirt" <?php if ($_POST['val'] != 0) {
                    echo 'style="display:none"';}?>>
                    <img src="pictures/signature_shirt_black_forTesting.png" alt="SigShirt" class="productImage">
                    <div class="productDesc">
                        <p>
                            This piece features our signature logo, split into two parts. Cut in a regular fit from pure cotton, it features the lettering “no” and “heart” written across both chest halves respectively. This minimal but bold design reflects on the ever-growing divide in modern society.
                        </p>
                        <p>
                            Detailed Information
                        </p>
                        <p>
                        • White, Creme or Black<br>• Chestprint
                        </p>
                    </div>
                </div>
                <div class="product" id="dystShirt" <?php if ($_POST['val'] != 1) {
                    echo 'style="display:none"';}?>>
                    <img src="pictures/black-shirt-dystopian-back.png" alt="DystShirt" class="productImage">
                    <div class="productDesc">
                        <p>
                            This piece channels the collection’s dystopian theme, with a print of a deserted city in the shape of a heart on the back of the T-shirt. It features the brand logo as a small detail aswell.
                        </p>
                        <p>
                            Detailed Information
                        </p>
                        <p>
                        • White, Creme or Black<br>• Backprint
                        </p>
                    </div>
                </div>
                <div class="product" id="dystHood" <?php if ($_POST['val'] != 2) {
                    echo 'style="display:none"';}?>>
                    <img src="" alt="DystHood" class="productImage">
                    <div class="productDesc">
                        <p>
                            This piece channels the collection’s dystopian theme, with a print of a deserted city in the shape of a heart on the back of the T-shirt. It features the brand logo as a small detail aswell.
                        </p>
                        <p>
                            Detailed Information
                        </p>
                        <p>
                        • White, Creme or Black<br>• Backprint
                        </p>
                    </div>
                </div>
            </article>
            <article class="arrow"><p class="rightArrow arrowP">&gt;</p></article>
        </section>
    </div>
    <div class="left">Pfeil</div>
        <div class="b" id="b1">Inhalt1</div>
        <div class="b" id="b2">Inhalt2</div>
        <div class="b" id="b3">Inhalt3</div>
        <div class="b" id="b4">Inhalt4</div>
        <div class="right">Pfeil</div>
</body>
</html>