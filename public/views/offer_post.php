<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/offer_post.css">

    <title>registration</title>
</head>
<body>
    <div class="container">

        <div class="registration-container">
            <form2>
                <input name="login" type="text" placeholder=" Login" required>
                <input name="password" type="password" placeholder=" Password" required>
                <input name="price" type="number" placeholder=" Price" required>
                <input name="date-start" type="date" placeholder=" Start date" required>
                <input name="date-end" type="date" placeholder=" End date" required>

                <input type="time" id="time-start" name="appt" min="00:00" max="24:00" placeholder="time-start" required>
                <input type="time" id="time-end" name="appt" min="00:00" max="24:00" placeholder="time-end" required>

                <button> ADD </button>
            </form2>
        </div>
        <div class="platform-form-container">
            <form>
                <input type="checkbox" id="Netflix" name="1" value="Netflix">
                <label for="1"> Netflix </label>
                <input type="checkbox" id="HBO GO" name="2" value="HBO GO">
                <label for="2"> HBO GO </label>
                <input type="checkbox" id="Hulu" name="3" value="Hulu">
                <label for="3"> Hulu </label>
                <input type="checkbox" id="Disney Plus" name="4" value="Disney Plus">
                <label for="4"> Disney Plus </label>
                <input type="checkbox" id="Amazon Prime" name="5" value="Amazon Prime">
                <label for="5"> Amazon Prime </label>
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