<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img style="width: 100%;max-height: 100%" src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="loginform" action="login" method="POST">
                <header>
                    <div class="messages">
                        <?php if(isset($messages))
                            {
                                foreach($messages as $message)
                                echo $message;
                            }
                            ?>
                    </div>
                </header>
                <input name="email" type="text" placeholder=" email@email.com">
                <input name="password" type="password" placeholder=" password">
                <button type="submit">LOGIN</button>
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