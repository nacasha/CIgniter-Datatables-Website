<!DOCTYPE html>
<html lang="en">
<head>
    <title>CIgniter Datatables | <?= $title ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/prism/prism.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/elegant_font/css/style.css'); ?>">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/my-styles.css'); ?>">

    <!-- Datatables Bootstrap CSS -->
    <link id="theme-style" rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>

<body class="body-<?= $color ?>">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="<?php echo base_url('') ?>">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">CIgniter</span> <span class="text-bold">Datatables</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon <?= $icon ?>"></i> <?= $title ?></h1>
                    <div class="meta"><i class="far fa-clock"></i> Last updated: <?= $updated ?></div>
                </div><!--//doc-header-->

                <?php $this->load->view($TEMPLATE_RENDER) ?>

            </div><!--//container-->
        </div><!--//doc-wrapper-->
    </div><!--//page-wrapper-->

    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Web Templates Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>

        </div><!--//container-->
    </footer><!--//footer-->


    <!-- Main Javascript -->
    <script type="text/javascript" src="<?= base_url('assets/plugins/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/prism/prism.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/plugins/stickyfill/dist/stickyfill.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>
</html>

