<?php
// Redirect to script to send email
if (!empty($_POST['email'])) {
    // Sending invitation by email
    header('Location: send_email.php?email='.$_POST['email']);
    exit;
}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {
    $body_class = "delivery_sent";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>MIW Party</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="<?= $body_class ?>">

    <form action="#" method="post">
        <input class="email" type="email" name="email" placeholder="Ton email de star..." required/>
        <label class="submit">
            Inscris-toi !
            <svg><use xlink:href="#vip"></use></svg>
            <input class="submit" type="submit" value="Inscris-toi !" hidden/>
        </label>
    </form>

    <div class="sent_icon">
        <svg><use xlink:href="#sent"></use></svg>
    </div>

    <div hidden>
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="vip" viewBox="0 0 41.494 48.31"><path class="a" d="M139.506,87.124a.708.708,0,0,0-.926.38L136.8,91.745,135.028,87.5a.708.708,0,1,0-1.305.547l2.429,5.8a.708.708,0,0,0,1.305,0l2.429-5.8A.708.708,0,0,0,139.506,87.124Zm0,0" transform="translate(-121.055 -78.854)"/><path class="a" d="M246.618,94.287a.708.708,0,0,0,.708-.708V91.386h2.1a2.158,2.158,0,1,0,0-4.316h-2.813a.708.708,0,0,0-.708.708v5.8A.708.708,0,0,0,246.618,94.287Zm.708-5.8h2.1a.742.742,0,1,1,0,1.485h-2.1Zm0,0" transform="translate(-222.707 -78.855)"/><path class="a" d="M214.228,93.579v-5.8a.708.708,0,1,0-1.415,0v5.8a.708.708,0,1,0,1.415,0Zm0,0" transform="translate(-192.732 -78.855)"/><path class="a" d="M147.95,182.27l-.981,3.02a.16.16,0,0,1-.151.11h-3.175a1.575,1.575,0,0,0-.925,2.849l2.569,1.866a.159.159,0,0,1,.058.178l-.981,3.02a1.575,1.575,0,0,0,2.424,1.761l2.569-1.866a.159.159,0,0,1,.188,0l2.569,1.866a1.575,1.575,0,0,0,2.423-1.761l-.981-3.02a.159.159,0,0,1,.058-.178l2.569-1.866a1.575,1.575,0,0,0-.926-2.849h-3.175a.159.159,0,0,1-.151-.11l-.981-3.02A1.575,1.575,0,0,0,147.95,182.27Zm1.5.327a.146.146,0,0,1,.152.11l.981,3.019a1.571,1.571,0,0,0,1.5,1.088h3.175a.16.16,0,0,1,.094.289l-2.569,1.866a1.57,1.57,0,0,0-.572,1.761l.981,3.02a.159.159,0,0,1-.245.178l-2.569-1.866a1.57,1.57,0,0,0-1.851,0l-2.569,1.866a.16.16,0,0,1-.245-.178l.981-3.02a1.571,1.571,0,0,0-.572-1.761l-2.569-1.866a.16.16,0,0,1,.094-.289h3.175a1.571,1.571,0,0,0,1.5-1.088l.981-3.019A.145.145,0,0,1,149.448,182.6Zm0,0" transform="translate(-128.66 -164.087)"/><path class="a" d="M0,22.195V47.6a.707.707,0,0,0,.708.708h9.646a.708.708,0,1,0,0-1.415H2.962L20.747,34.506,38.532,46.895H13.656a.708.708,0,1,0,0,1.415H40.786a.708.708,0,0,0,.708-.708V22.195a.708.708,0,0,0-.3-.581l-4.922-3.429V13.752a.708.708,0,0,0-1.415,0V25.465l-1.415.986V6.811A.708.708,0,0,0,32.73,6.1a2.567,2.567,0,0,1-2.565-2.565.707.707,0,0,0-.708-.708H12.036a.707.707,0,0,0-.708.708A2.568,2.568,0,0,1,8.764,6.1a.707.707,0,0,0-.708.708v7.154a.708.708,0,1,0,1.415,0V7.455A3.992,3.992,0,0,0,12.68,4.246H28.813a3.991,3.991,0,0,0,3.209,3.209V27.437l-9.473,6.6-1.4-.974a.708.708,0,0,0-.809,0l-1.4.974-9.473-6.6V17.267a.708.708,0,0,0-1.415,0v9.184l-1.415-.986V2.329a.914.914,0,0,1,.913-.913H33.94a.915.915,0,0,1,.913.913v8.027a.708.708,0,0,0,1.415,0V2.329A2.331,2.331,0,0,0,33.94,0H7.554A2.331,2.331,0,0,0,5.225,2.329V18.186L.3,21.614a.707.707,0,0,0-.3.581ZM5.225,19.91v4.569l-3.28-2.284ZM17.706,34.9,1.415,46.247v-22.7ZM40.078,46.247,23.787,34.9,40.078,23.551ZM36.268,19.91l3.279,2.284-3.279,2.284Zm0,0" transform="translate(0)"/></symbol>
            <symbol id="sent" viewBox="0 0 300 253"><g fill="#C30078" fill-rule="nonzero"><path d="M262.302 43.732L227.59 71.976l-13.858-16.229a3.391 3.391 0 10-5.158 4.4l16.009 18.75a3.392 3.392 0 004.719.428l37.282-30.329a3.391 3.391 0 00-4.281-5.261l-.001-.003z"/><path d="M237.8 0c-32.584-.008-59.519 25.398-61.412 57.927H82.767c-11.442.018-21.099 8.514-22.574 19.86a3.381 3.381 0 00-.153 1.611c-.024.431-.039.865-.039 1.3v90.8a22.667 22.667 0 005.255 14.535c.264.506.652.937 1.127 1.253a22.708 22.708 0 0016.385 6.983h135.651a22.7 22.7 0 0016.37-6.968 3.389 3.389 0 001.136-1.261 22.656 22.656 0 005.263-14.542v-48.536c33.266-1.84 59.023-29.825 58.105-63.129C298.375 26.53 271.116.006 237.8 0zM82.767 64.71h93.588a61.234 61.234 0 0016.716 39.069 62.41 62.41 0 004.744 4.524l-38.109 32.323a14.007 14.007 0 01-18.168.008L67.087 77.592a16.013 16.013 0 0115.68-12.882zm0 122.779a15.93 15.93 0 01-9.592-3.205l40.913-41.842a3.392 3.392 0 10-4.848-4.744l-40.516 41.435a15.9 15.9 0 01-1.943-7.632V86.22l70.375 59.59c7.764 6.61 19.178 6.605 26.936-.012l39.235-33.274a60.754 60.754 0 0031.079 10.44v48.537a15.863 15.863 0 01-1.957 7.658L191.69 137.69a3.391 3.391 0 00-4.836 4.753l41.137 41.856a15.909 15.909 0 01-9.571 3.19H82.767zM237.8 116.272a54.165 54.165 0 01-32.4-10.589 3.935 3.935 0 00-.452-.343A55.541 55.541 0 01198 99.12c-17.833-18.878-19.948-47.689-5.063-68.97C207.822 8.87 235.61.978 259.459 11.255c23.85 10.278 37.196 35.898 31.95 61.332-5.245 25.434-27.64 43.683-53.609 43.685v.001z"/></g></symbol>
        </svg>
    </div>

</body>
</html>