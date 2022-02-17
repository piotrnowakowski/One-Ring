<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/registration_form.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="public/css/style.css?v=<?php echo time(); ?>">


    <title>registration</title>
</head>
<body>
    <div class="container">
        <div class="logo-reg">
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
            <form action="registration_form" method="POST" enctype="multipart/form-data">
                <input name="email" type="text" placeholder=" email@email.com">
                <input name="name" type="text" placeholder=" name">
                <input name="surname" type="text" placeholder=" surname">
                <input name="nick" type="text" placeholder=" nick">
                <input name="password" type="password" placeholder=" password">
                <button name="add_user_button" type="submit">Register</button>
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