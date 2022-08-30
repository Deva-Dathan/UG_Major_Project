
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>404 worker | UKIE WEB</title>
    <meta name="author" content="ukieweb" />
    <meta name="keywords" content="404 page, worker, css3, template, html5 template, ukieweb" />
    <meta name="description" content="404 - Page Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Libs CSS -->
    <link type="text/css" media="all" href="<?php echo base_url('assets/bootstrap-4.3.1/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <!-- Template CSS -->

    <!-- Favicons -->

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />
<style>
/* ==============================================

Template: 404 Worker
Version: 1.2
Author:	Ukieweb

 - General setting
 - Button
 - Wrapper
 - Number - 404
 - Info
 - Footer
 - Animationload
 - Animated setting

================================================ */


/* ------------------
    General setting
-------------------- */
*{
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
    font-weight: 300;
}
html{
    height: 100%;
}
body{
    position: relative;
    height: 90%;
    background-color: #232a4b;
}

h1, h2, h3, h4, h5, h6{
    color: #ffffff;
}

p{
    font-weight: 300;
}

img{
    background-size: auto;
}

.error{
    border-color: red !important;
}

::-webkit-input-placeholder { /* WebKit browsers */
    color:    #ffffff;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #ffffff;
    opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #ffffff;
    opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #ffffff;
}

.container{
    position: relative;
}

/* ------------------
    Button
-------------------- */
.btn{
    font-size: 18px;
    font-weight: 300;
    color: #ffffff;
    border: 0px solid;
    border-bottom: 2px solid;
    border-color: #12172e;
    padding: 10px 41px;
    border-radius: 5px;
    background: none;
    display: inline-block;
    margin: 10px 0;
    background-color: #00a9e1;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    text-decoration: none;
    cursor: pointer;
}

.btn:hover{
    background: #0090c0;
    color: #ffffff;
    text-decoration: none;
}

/* ------------------
    Wrapper
-------------------- */
#wrapper{
    min-height: 100%;
    height: 100%;
    width: 100%;
}

.brick{
    position: absolute;
    top: 135px;
    left: -20px;
    width: 435px;
    height: 210px;
    background-image: url("<?php echo base_url('assets/img/wall-1.png'); ?>");
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}

/* ------------------
    Number - 404
--------------------*/
.number{
    position: relative;
    z-index: 100;
    text-align: right;
    margin-top: 79px;
}

.number .four{
    width: 230px;
    height: 292px;
    display: inline-block;
    background-image: url("<?php echo base_url('assets/img/four.png'); ?>");
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: 19;
    position: relative;
}

.number .zero{
    width: 230px;
    height: 292px;
    display: inline-block;
    background-image: url("<?php echo base_url('assets/img/zero.png'); ?>");
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: 0px 20px;
    position: relative;
    z-index: 18;
    -moz-animation: 4s ease 0s normal none infinite zero;
    -moz-transform-origin: center top;
    -webkit-animation:zero 4s infinite ease-in-out;
    -webkit-transform-origin:top;
    -o-animation: 4s ease 0s normal none infinite zero;
    -o-transform-origin: center top;
    -o-animation:zero 4s infinite ease-in-out;
    -o-transform-origin:top;
    -ms-animation: 4s ease 0s normal none infinite zero;
    -ms-transform-origin: center top;
    -ms-animation:zero 4s infinite ease-in-out;
    -ms-transform-origin:top;
    animation: 4s ease 0s normal none infinite zero;
    transform-origin: center top;
    animation:zero 4s infinite ease-in-out;
    transform-origin:top;
}

.number .zero .nail{
    width: 30px;
    height: 50px;
    top: 6px;
    left: 115px;
    background-image: url("<?php echo base_url('assets/img/nail.png'); ?>");
    background-repeat: no-repeat;
    background-size: 100%;
    position: absolute;
}

@-moz-keyframes zero {
    0%{-moz-transform:rotate(-2deg)}
    50%{-moz-transform:rotate(2deg)}
    100%{-moz-transform:rotate(-2deg)}
}

@-webkit-keyframes zero {
    0%{-webkit-transform:rotate(-2deg)}
    50%{-webkit-transform:rotate(2deg)}
    100%{-webkit-transform:rotate(-2deg)}
}

@-o-keyframes zero {
    0%{-o-transform:rotate(-2deg)}
    50%{-o-transform:rotate(2deg)}
    100%{-o-transform:rotate(-2deg)}
}

@-ms-keyframes zero {
    0%{-ms-transform:rotate(-2deg)}
    50%{-ms-transform:rotate(2deg)}
    100%{-ms-transform:rotate(-2deg)}
}

@keyframes zero {
    0%{transform:rotate(-2deg)}
    50%{transform:rotate(2deg)}
    100%{transform:rotate(-2deg)}
}

/* ------------------
    Info
--------------------*/
.info{
    margin-left: 460px;
    position: relative;
    z-index: 999;

}

.info h2{
    font-size: 50px;
    font-weight: 300;
    color: #ffc938;
}

.info p{
    font-size: 20px;
    color: #ffffff;
}


/* ------------------
    Footer
--------------------*/
#footer{
    width: 100%;
    text-align: center;
    height: 375px;
    margin-top: -375px;
}

.worker{
    position: absolute;
    left: 0;
    top: 4px;
    width: 300px;
    height: 371px;
    background-size: 100%;
    background-image: url("<?php echo base_url('assets/img/worker.png'); ?>");
    background-repeat: no-repeat;
    background-position: center;
    z-index: 10;
}

.tools{
    position: absolute;
    right: 0;
    top: 176px;
    width: 730px;
    height: 199px;
    background-size: 100%;
    background-image: url("<?php echo base_url('assets/img/tools.png'); ?>");
    background-repeat: no-repeat;
    background-position: center;
}

/* ------------------
    Animationload
--------------------*/
.animationload {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ffffff;
    z-index: 999999;
}



/* ------------------
    Animated setting
--------------------*/
.animated{
    visibility: hidden;
}
.visible{
    visibility: visible;
}


@media (max-width: 1200px) {

.info {
	margin-left: 300px;
}

}

@media (max-width: 992px) {

.info {
	margin-left: 0;
	text-align: center;
}
#wrapper{
	min-height: 0px;
	height: auto;

}
#footer {
	height: auto;
	margin-top: 0;
}

}

@media (max-width: 768px) {
.brick {
	width: 256px;
}
.number {
	text-align: center;
}
.number .four {
	width: 123px;
	height: 157px;
}
.number .zero {
	width: 130px;
	height: 157px;
}
.number .zero .nail {
	width: 18px;
	top: 12px;
	left: 64px;
}

.worker {
	left: 20px;
	top: 7px;
	width: 200px;
	height: 249px;
}

.tools {
	right: 8px;
	top: 166px;
	width: 330px;
	height: 90px;
}

.info h2 {
	font-size: 30px;
}

.info p {
	font-size: 16px;
}

}

@media (max-width: 440px) {
.brick {
	width: 156px;
}
.number {
	text-align: center;
	
}
.number .four {
	width: 80px;
	height: 103px;
}
.number .zero {
	width: 85px;
	height: 112px;
}
.number .zero .nail {
	width: 11px;
	top: 14px;
	left: 44px;
}
}
::-webkit-scrollbar
{
    display:none;
}
</style>
</head>
<body>

    <!-- Load page -->

    <!-- End load page -->


    <!-- Content Wrapper -->
    <div id="wrapper">
        <div class="container">

            <!-- brick of wall -->
            <div class="brick"></div>
            <!-- end brick of wall -->

            <!-- Number -->
            <div class="number">
                <div class="four"></div>
                <div class="zero">
                    <div class="nail"></div>
                </div>
                <div class="four"></div>
            </div>
            <!-- end Number -->

            <!-- Info -->
            <div class="info">
                <h2>Something is wrong</h2>
                <p>The page you are looking for was moved, removed, renamed or might never existed.</p>
                <a href="<?php echo base_url(); ?>home/login" class="btn">Go Home</a>
            </div>
            <!-- end Info -->

        </div>
        <!-- end container -->
    </div>
    <!-- end Content Wrapper -->

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <!-- Worker -->
            <div class="worker"></div>
            <!-- Tools -->
            <div class="tools"></div>
        </div>
        <!-- end container -->
    </footer>
    <!-- end Footer -->

    <!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="<?php echo base_url('assets/js/modernizr.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-4.3.1/js/bootstrap.min.js'); ?>">
    
    
<script>$(window).on("load", function(e) {

"use strict";


$(".animationload").delay(400).fadeOut("fast");

});</script>
</body>
</html>