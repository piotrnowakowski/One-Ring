
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/reservation.css?v=<?php echo time(); ?>">

    <title>registration</title>
</head>
<body>
    <div class="container">
        <section class="reservation-container">
        <?php foreach ($transactions as $transaction): ?>
            <div id="reservation-1">
                <div class = "lista-informacji">
                    <h1><?= $transaction->getStreamingSite()?></h1>
                    <p>Price<br><?= $transaction->getPrice()?></p>
                    <p>Start time<br><?= $transaction->getTimeStart()?></p>
                    <p>End time<br> <?= $transaction->getTimeEnd()?></p>
                    <button>Buy</button>
                </div>
            </div>
        <?php endforeach; ?>
        </section>
        
        <div class="bottom-line">
            <div class="writing">
                <p style="margin: unset">© One Ring</p>
            </div>
 
            <div class="pictures">
                <img src="public/img/facebook.svg" width="25vw" height="25vw">
                <img src="public/img/instagram.svg" width="25vw" height="25vw">
                <img src="public/img/twitter.svg" width="25vw" height="25vw">
            </div>

    </div>
</body>