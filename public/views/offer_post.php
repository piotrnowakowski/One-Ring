<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/offer_post.css?v=<?php echo time(); ?>">

    <title>registration</title>
</head>
<body>
    <div class="container">

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
            <form action="offer_post" method="POST" enctype="multipart/form-data">
                <input name="login" type="text" placeholder=" Login" required>
                <input name="password" type="password" placeholder=" Password" required>
                <input name="price" type="number" placeholder=" Price" required>
                <input name="date-start" type="date" placeholder=" Start date" required>
                <input type="time" name="time-start" min="00:00" max="24:00" placeholder="time-start" required>
                <input name="date-end" type="date" placeholder=" End date" required>
                <input type="time" name="time-end" min="00:00" max="24:00" placeholder="time-end" required>
                <input type="checkbox" id="Netflix" name="1" value="Netflix">
                <label for="1"> Netflix </label>
                <input type="checkbox" id="HBO GO" name="2" value="HBO GO">
                <label for="2"> HBO GO </label>
                <input type="checkbox" id="Amazon Prime" name="3" value="Amazon Prime">
                <label for="3"> Amazon Prime </label>
                <button name="add_transaction_button" type="submit"> ADD </button>
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