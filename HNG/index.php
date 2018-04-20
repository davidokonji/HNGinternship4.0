<?php
/**
 * Created by PhpStorm.
 * User: DavidOkonji
 * Date: 4/19/18
 * Time: 11:45 PM
 */
date_default_timezone_set('Africa/Lagos');
$actual_time = date("l, M Y");
$act = date("h:i:s");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1">
    <title>Hng challange 4.0</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<!--    <span style="float: left;background: #333;padding: 1px 10px 8px 14px " ><a href="#" class="logo"><img src="hotelng.png" alt="hotel.ng logo" width="70px" height="40px" ></a></span>-->
    <nav class="navbar">
        <ul>
            <li style="float: left;padding-left: 20px">
                <a href="#" class="logo"><img src="hotelng.png" alt="hotel.ng logo" width="70px" height="40px" ></a>
            </li>
            <li >
                <a href="#" class="click">Click me.</a>
            </li>
        </ul>
    </nav>

    <div class="details">
        <p>HNG Internship.</p>
        <p>Stage 1</p>
        <p><?php echo $actual_time; ?></p>
        <p><?php echo $act;?></p>
    </div>
</div>
</body>
</html>
