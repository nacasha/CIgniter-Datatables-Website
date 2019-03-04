<!DOCTYPE html>
<html lang="en">
<head>
    <title>CIgniter Datatables</title>
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
    <link rel="stylesheet" href="<?= base_url('assets/plugins/elegant_font/css/style.css'); ?>">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
    <link id="theme-style" rel="stylesheet" href="<?= base_url('assets/css/my-styles.css'); ?>">

</head>

<body class="landing-page">

	<!-- GITHUB BUTTON JS -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header class="header text-center">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <span aria-hidden="true" class="icon_documents_alt icon"></span>
                        <span class="text-highlight">Cigniter</span> <span class="text-bold">Datatables</span>
                    </h1>
                </div><!--//branding-->
                <div class="tagline">
                    <p>CodeIgniter library for Datatables server-side processing / AJAX</p>
                    <p>Easy to use <i class="fas fa-heart"></i></p>
                </div><!--//tagline-->
                <div class="social-container">
	                <!-- Replace with your Github Button -->
	                <div class="github-btn mb-2">
                        <a class="github-button" href="https://github.com/nacasha/Cigniter-Datatables" data-size="large" data-show-count="true"
                            aria-label="Star nacasha/Cigniter-Datatables on GitHub">Star</a>
                        <a class="github-button" href="https://github.com/nacasha" data-size="large" aria-label="Follow @nacasha on GitHub">
                            Follow @nacasha
                        </a>
                    </div>
                 </div><!--//social-container-->
            </div><!--//container-->
        </header><!--//header-->

        <section class="cards-section text-center">
            <div class="container">
                <h2 class="title">Getting started is easy!</h2>
                <div class="intro">
                    <p>Welcome to prettyDocs. This landing page is an example of how you can use a card view to present segments of your documentation. You can customise the icon fonts based on your needs.</p>
                    <div class="cta-container">
                        <a class="btn btn-primary btn-cta" href="https://github.com/nacasha/CIgniter-Datatables/archive/master.zip" target="_blank"><i class="fas fa-cloud-download-alt"></i> Download Now</a>
                    </div><!--//cta-container-->
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <i class="icon fa fa-paper-plane"></i>
                            </div><!--//icon-holder-->
                            <h3 class="title">Quick Start</h3>
                            <p class="intro">Demo example, consectetuer adipiscing elit</p>
                            <a class="link" href="<?php echo base_url('start') ?>"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-pink item-2 col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_puzzle_alt"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Library API</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="<?php echo base_url('api') ?>"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item item-blue col-lg-4 col-6">
                        <div class="item-inner">
                            <div class="icon-holder">
                                <span aria-hidden="true" class="icon icon_table"></span>
                            </div><!--//icon-holder-->
                            <h3 class="title">Showscase</h3>
                            <p class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                            <a class="link" href="<?php echo base_url('showcase') ?>"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//cards-->

                <div class="intro features-section">
                    <section id="ui-components" class="doc-section">
                        <h2 class="section-title">Features</h2>
                        <div class="section-block">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <ul class="list list-unstyled features">
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Easy to use <span class="fas fa-heart"></span>
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Generates Datatable and JSON for server side processing in just one controller.
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Multiple Datatables in one page.
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Use CodeIgniter Query Builder Class to produce query (support all functions).
                                                <a href="https://www.codeigniter.com/userguide3/database/query_builder.html" target="_blank">Read Documentation</a>
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Support columns rendering/formatting.
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Able to define searchable table columns.
                                            </div>
                                        </li>
                                        <li><i class="fas fa-check"></i>
                                            <div>
                                                Configurable datatables options.
                                                <a href="https://datatables.net/reference/option/" target="_blank">Read Documentation</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//section-block-->
                    </section>
                </div>

                <!--//intro-->
            </div><!--//container-->
        </section><!--//cards-section-->
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
    <script type="text/javascript" src="<?= base_url('assets/plugins/stickyfill/dist/stickyfill.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>
</html>

