<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SWiCS</title>
    <meta name="author" content="Anja Samsom">
    <meta name="description" content="UVM's SWiCS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
    <link rel="stylesheet" media="(max-width: 600px)" href="css/phone.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>

<body>
    <header>
        <img id="mini_logo" src="../images/logo.svg" alt="SWiCS logo" />
        <nav>
            <a class="nav_link <?php
                                if ($pathParts['filename'] == "index") {
                                    print 'active_page';
                                }
                                ?>" href="index.php" href="index.php">Home</a>

            <a class="nav_link  <?php
                                if ($pathParts['filename'] == "who") {
                                    print 'active_page';
                                }
                                ?>" " href=" who.php">Meet Us</a>

            <a class="nav_link  <?php
                                if ($pathParts['filename'] == "photos") {
                                    print 'active_page';
                                }
                                ?>" " href=" photos.php">Photos</a>

            <a class="nav_link  <?php
                                if ($pathParts['filename'] == "meetings") {
                                    print 'active_page';
                                }
                                ?>" " href=" meetings.php">Meetings</a>

            <a class="nav_link  <?php
                                if ($pathParts['filename'] == "involved") {
                                    print 'active_page';
                                }
                                ?>" " href=" involved.php">Get&nbsp;Involved</a>

            <a class="nav_link  <?php
                                if ($pathParts['filename'] == "contact") {
                                    print 'active_page';
                                }
                                ?>" " href=" contact.php">Contact</a>

        </nav>
    </header>