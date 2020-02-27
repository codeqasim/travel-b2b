<!DOCTYPE html>
<html lang="en" dir="#rtl">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Travel</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles/rtl.css" />-->
</head>
<body>
<header class="sticky">
    <nav>
        <div class="contain flex flex-content-between row-rtl">
            <div class="c2 p0 rtl-align-right">
                <div class="logo">
                    <a href="<?php echo base_url(); ?>">
                    <img alt="logo" src="<?php echo base_url(); ?>assets/img/logo.png" />
                    B2B Booking
                    </a>
                </div>
                <div class="bars show-m">
                <input id="bars" type="checkbox" hidden>
                <label for="bars">
                 <div></div>
                </label>
                    
                    <?php include 'menu.php'; ?>
                </div>
            </div>
            <?php include 'menu.php'; ?>
        </div>
    </nav>
</header>