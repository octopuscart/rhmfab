<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Fabrics</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->

        <!--theme assets-->

        <link href="<?php echo base_url(); ?>assets/theme/css/style.css" rel="stylesheet" type="text/css"> <!-- Template Stylesheet -->
        <link href="<?php echo base_url(); ?>assets/theme/css/elements-style.css" rel="stylesheet" type="text/css"> <!-- Element Stylesheet -->
        <link href="<?php echo base_url(); ?>assets/theme/css/font-awesome.css" rel="stylesheet" type="text/css"> 
        <link href="<?php echo base_url(); ?>assets/theme/vendor/flexslider/css/flexslider.css" rel="stylesheet" type="text/css"> <!-- FlexSlider Stylesheet -->
        <link href="<?php echo base_url(); ?>assets/theme/vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css"> <!-- Owl Carousel Stylesheet -->
        <link href="<?php echo base_url(); ?>assets/theme/vendor/owl-carousel/css/owl.template.css" rel="stylesheet" type="text/css"> <!-- Owl Carousel Template Stylesheet -->
        <link href="<?php echo base_url(); ?>assets/theme/vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css"> <!-- Magnific Popup Template Stylesheet -->
        <script src="<?php echo base_url(); ?>assets/theme/js/modernizr.js"></script> <!-- Modernizr Library -->
        <link href="https://fonts.googleapis.com/css?family=Sintony" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet"> 
        <!--end of theme assets-->


        <link href="<?php echo base_url(); ?>assets/theme/css/customstyle.css" rel="stylesheet" type="text/css" media="all" />
        <!--custom css style-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/custom_style.css">

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>


        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.css">
        <script src="<?php echo base_url(); ?>assets/theme/noslider/nouislider.min.js" type="text/javascript"></script>

<!--        <link href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>-->





    </head>

    <body ng-app="App">
        <div ng-controller="ShopController">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                        $httpProvider.defaults.headers.post = {};
                });
                        var baseurl = "<?php echo base_url(); ?>index.php/";
                        var imageurlg = "<?php echo imageserver; ?>";
                        var globlecurrency = "<?php echo globle_currency; ?>";
                        var avaiblecredits = 0;</script>
            <!-- start site header -->
          
            <!-- end site header -->


