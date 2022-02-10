<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/registration_form.css">
    <link rel="stylesheet" type="text/css" href="public/css/add_wallet.css">

    <title>Add Wallet</title>
</head>
<body>
<div class="container">
    <div class="logo">
        <img style="width: 100%;max-height: 100%" src="public/img/logo.svg">
    </div>
    <div class="registration-container">
        <header>
            <div class="messages" >
                <?php if(isset($messages))
                {
                    foreach($messages as $message)
                        echo $message;
                }
                ?>
            </div>
        </header>
        <form action="add_wallet" method="POST" enctype="multipart/form-data">
            <textarea name="mnemonic_phrase" rows="4" type="text" placeholder=" Enter mnemonic phrase"></textarea>
            <input name="private-key" type="text" placeholder=" Enter private key">
            <input name="json_file" type="file" placeholder=" Upload JSON file">
            <button name="add_wallet_button" type="submit">Add wallet</button>
        </form>
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