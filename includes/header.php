<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $business_data['name']; ?> - Cafe & Eatery di Cilacap</title>
    <meta name="description" content="Nikmati suasana nyaman dengan kopi pilihan dan hidangan lezat di <?php echo $business_data['name']; ?>, Cilacap. Buka setiap hari dari jam <?php echo $business_data['hours']; ?>.">
    <meta name="keywords" content="cafe cilacap, coffee shop cilacap, tempat nongkrong cilacap, tabera coffee">
    <meta property="og:title" content="<?php echo $business_data['name']; ?> - Cilacap" />
    <meta property="og:description" content="Suasana nyaman untuk kopi dan makan di Cilacap." />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?php echo $business_data['name']; ?>" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav id="navbar">
        <div class="logo">TABERA</div>
        <ul class="nav-menu" id="navMenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</body>
</html>