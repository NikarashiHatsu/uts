<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
	<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
	<title>Materialize - Material Design Admin Template</title>

	<!-- Favicons-->
	<link rel="icon" href="<?= base_url('images/favicon/favicon-32x32.png') ?>" sizes="32x32">
	<!-- Favicons-->
	<link rel="apple-touch-icon-precomposed" href="<?= base_url('images/favicon/apple-touch-icon-152x152.png') ?>">
	<!-- For iPhone -->
	<meta name="msapplication-TileColor" content="#00bcd4">
	<meta name="msapplication-TileImage" content="<?= base_url('images/favicon/mstile-144x144.png') ?>">
	<!-- For Windows Phone -->

	<!-- CORE CSS-->
	<link href="<?= base_url('css/materialize.min.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('css/style.min.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- Custome CSS-->
	<link href="<?= base_url('css/custom/custom-style.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('css/app.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">

	<!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
	<link href="<?= base_url('js/plugins/perfect-scrollbar/perfect-scrollbar.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('js/plugins/jvectormap/jquery-jvectormap.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="<?= base_url('js/plugins/chartist-js/chartist.min.css') ?>" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
    <?php
        // echo $this->include('layouts/loader');
        echo $this->include('layouts/header');
    ?>

	<!-- START MAIN -->
	<div id="main">
		<!-- START WRAPPER -->
		<div class="wrapper">
            <?= $this->include('layouts/sidebar'); ?>

			<section id="content">
				<div class="container p-6">
                    <?= $this->renderSection('content'); ?>
                </div>
            </section>
        </div>
    </div>


	<!-- ================================================
    Scripts
    ================================================ -->

	<script type="text/javascript" src="<?= base_url('js/plugins/jquery-1.11.2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/materialize.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/plugins/chartist-js/chartist.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/plugins/chartjs/chart.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/plugins/sparkline/sparkline-script.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('js/app.js') ?>" defer></script>

    <script>
        $(document).ready(function() {
            // Materialize.toast('<span>You can swipe me too!</span>', 3000);
        })
    </script>
</body>

</html>