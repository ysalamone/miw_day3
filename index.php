<?php
// Boilerplate for exercice DAY 3 at university MIW 05
// Code is bad and poor... but just enough for skills students :-) 

// Redirect to script to send email
if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php?email='.$_POST['email']);
    exit;

}

$body_class = "";

// Display delivery status, (tips anti-refreshing) 
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {

    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}



?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf8"/>
    <title>MIW Party</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body class="<?= $body_class ?>">

<form action="#" method="post">
    <input type="email" name="email" placeholder="Ton email de star..." required/>
    <input type="submit" value="Submit"/>
</form>

</body>
</html>