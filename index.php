<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'models/DB.php';
include_once 'services/Session.php';
Session::initSession();
?>
<html lang="fr" ng-app="courtageApp" ng-controller="connexionCtrl">
    <head>
        <meta charset="UTF-8">
        <title>HellowAnnonce</title>
        <!--Flavicon-->
        <link rel="shortcut icon" href="web/images/HANNOCE/ICONE.png"/>
        <!--CSS-->
        <link href="web/css/sb-admin-2.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/loading-bar.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/metisMenu.min.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/main.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="web/css/price-range.css" rel="stylesheet" type="text/css"/>
        <!--JS-->
        <!--Mon Style-->
        <style>
            .black_title{
                background-color: #40403E;
                border: 1px solid #FE980F; 
                width: 96,5%;
                margin: 0 0 30px;
                padding: 10px;
            }
            .rounded{
                border-radius: 15px;
            }
            .circle{
                border-radius: 50%;
            }
            .box_orange{
                box-shadow: 1px 1px 1px #FE980F;
            }
            .box_grey{
                box-shadow: 1px 1px 1px grey;
            }
            .vatti{
                font-family: verdana,arial,helvetica, sans-serif;
                font-size: 15px;
                font-weight: normal;
                position: relative;
                padding: 4px 4px;
                color: #fff;
                text-align: center;
                z-index: 1;
                border-radius: 1px;
                margin: 1px;
                background: #FE980F;
                -webkit-box-shadow: 0px 0px 3px 2px #999;
                box-shadow: 0px 0px 3px 2px #999;
            }
            #footer .vatti:hover{
                background-color: #FE980F;
                color: black;
                /*font-size: large;*/
            }
            #footer .box_grey:hover{
                border-radius: 15px;
            }
            .fatima{
                box-shadow: 0px 0px 3px 2px #999;
                background-color: #FE980F;
                padding: 8px;
                opacity: 0.8;
            }
            .zoom:hover{
                min-width: 115px;
                min-height: 115px;

            }
            .zoom{
                width: 80px;
                height: 80px;
            }
            .left-sidebar .box_orange:hover{    
                background-color: #FE980F;
                border-color: #000;
                border-radius: 15px;
            }
            body {
                font-family: Helvetica, Arial, sans-serif;
                font-size: 14px;
            }
            .modal{
                border-radius: 100%;
                box-shadow: 1px 3px 3px #FE980F;
                opacity: 0.5;
            }
            .modal .modal-header{
                border-bottom-left-radius: 90%;
                box-shadow: 1px 3px 3px grey;
            }
            .modal .modal-footer{
                border-top-right-radius: 90%;
                box-shadow: 5px 3px 13px gray;
            }
            .panel{
                border-top-left-radius: 100%;
                box-shadow: 1px 3px 3px #fe980f;
            }
            .panel .panel-heading{
                border-top-left-radius: 100%;
                text-align: center;
                box-shadow: 5px 3px 13px gray;
            }
            .panel .panel-footer{
                border-top-right-radius: 70%;
                border-top-left-radius: 70%;
                box-shadow: 5px 3px 13px gray;
            }
            #tront .container{
                box-shadow: 5px 3px 13px gray;
                padding: 15px;
                border-radius: 15px;
            }
            #slider{
                box-shadow: 5px 3px 13px gray;
                margin: 15px;
                border-radius: 15px;
                padding: 15px;
            }
            #loading-bar .bar {
                background: #2c3e50;
            }
            #loading-bar-spinner .spinner-icon {
                border-top-color:  #2c3e50;
                border-left-color: #2c3e50;
            }
            #loading-bar .peg {
                -moz-box-shadow: #2c3e50 1px 0 6px 1px;
                -ms-box-shadow: #2c3e50 1px 0 6px 1px;
                -webkit-box-shadow: #2c3e50 1px 0 6px 1px;
                box-shadow: #2c3e50 1px 0 6px 1px;
            }

        </style>
    </head>
    <body id="corps">
        <?php
        include 'partials/header.php';
        ?>
        <section id="tront">
            <!--<span us-spinner="{radius:30, width:8, length: 16}" class="text-center"></span>-->
            <div class = "container">
                <div class="row" id="">
                    <?php include_once 'partials/leftMenu.php'; ?>
                    <div ng-view id="content"></div>
                </div>
            </div>
        </section>
        <?php
        include 'partials/footer.php';
        ?>

        <!--JS-->
        <script src="web/js/jquery.min.js" type="text/javascript"></script>
        <script src="web/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.9.0b1.js"></script>
        <script src="web/js/jquery.scrollUp.min.js" type="text/javascript"></script>
        <script src="web/js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/vendor/angular.js" type="text/javascript"></script>
        <script src="js/vendor/angular-route.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript" ></script>
        <script src="web/js/gmaps.js" type="text/javascript"></script>
        <script src="web/js/contact.js" type="text/javascript"></script>
        <script src="web/js/price-range.js" type="text/javascript"></script>
        <script src="web/js/main.js" type="text/javascript"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-animate.min.js"></script>
        <script src="js/vendor/loading-bar.js" type="text/javascript"></script>
        <!--<script src="js/vendor/angular-loading-spinner.js" type="text/javascript"></script>-->
        <!--<script src="js/vendor/pageloader.js" type="text/javascript"></script>-->
<!--        <script>
            // Le DOM est pret
            $(document).ready(function () {
                $.pageLoader();
            });
        </script>-->
    </body>
</html>

