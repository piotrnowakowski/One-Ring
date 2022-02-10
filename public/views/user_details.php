<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="public/css/style.css">
<link rel="stylesheet" type="text/css" href="public/css/user_details.css">
<title>User details</title>
<body>
<div class="container">
    <div class="logo">
        <img style="width: 100%;max-height: 100%" src="public/img/logo.svg">
    </div>
    <div class="registration-container">
        <h1>User info</h1>
            <p>email<br></p>
            <p>password<br></p>
            <p>name<br></p>
            <p>surname<br></p>
    </div>
    <div class="wallet-container">
        <h1>Wallet informations</h1>
            <p>Menmonic phrase<br><?= $wallet->getMnemonicPhrase()?></p>
            <p>Private Key<br><?= $wallet->getPrivateKey() ?></p>
            <p>Json File<br><?= $wallet->getWalletJsonName() ?></p>
    </div>

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

</div>
</body>