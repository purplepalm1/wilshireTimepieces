<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Watches | Wilshire Timepieces</title>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/card.css">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Wilshire Timepieces">
    <meta property="og:description" content="Wilshire Timepieces watches are inspired by the halcyon era of watchmaking, when bold colours and contrasting textures were combined with the very best craftsmanship.">
    <?php require_once './header.php'; ?>
    <div class="bg-wht" id="first-block">
        <section class="bg-blue header-specs-page">
            <div class="container">
                <div class="text-part txt-center">
                    <div class="title txt-upper font-book">Automatic Watches</div>
                </div>
            </div>
        </section>
        <br>
        <p class="txt-center">Coming soon..</p>
        <br>
        <br>
<!--         <section class="cards-row container">
            <?php
            $images = array('DarkBrown', 'NavyBlue', 'Silver', 'White');
            $price = array('170.99', '120.15', '190.00', '150.80');
            $name = array('CROOMS', 'LANDER III', 'HECLA TITANIUM', 'HUDSON');
            for ($i = 0; $i < 21; $i++) { ?>
                <div class="card txt-center">
                    <a href="./product-page.php">
                        <div class="img-part">
                            <div class="link-slider">
                                <img src="./images/product/View-01-<?= $images[$i % 4] ?>.jpg" alt="">
                            </div>
                        </div>
                        <div class="title"><?= $name[$i % 4] ?></div>
                    </a>
                    <div class="description">The Wilshire Timepieces Chronograph Sport is the official timing watch of the
                        2019 Bernina
                        Gran Turismo – an iconic hill race across the famous Bernina pass, high up in the Swiss Alps.</div>
                    <div class="price">$<?= $price[$i % 4] ?></div>
                </div>
            <?php } ?>
        </section> -->
    </div>
    <?php include './footer.php'; ?>
    </body>

</html>