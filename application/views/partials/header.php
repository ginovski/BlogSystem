<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $user_info['fullname']?></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>" >

    <link rel="icon" href="<?php echo base_url().'assets/images/favicon/favicon.ico'?>">

    <script src="<?php echo base_url().'assets/scripts/jquery-2.1.4.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/bootstrap.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/less.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/comments-color-change.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/smooth-scroll.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/progress-bar-width.js'?>" ></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(). 'home'?>"><?php echo $user_info['fullname']?> <small><?php echo $user_info['profession']?></small></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-link"><a href="<?php echo base_url(). 'home'?>">Home</a></li>
                    <li class="nav-link"><a href="#">Portfolio</a></li>
                    <li class="nav-link"><a href="<?php echo base_url(). 'newsletter/subscribe'?>">Newsletter</a></li>
                    <li class="nav-link"><a href="<?php echo base_url(). 'home/about'?>">About</a></li>
                    <li class="nav-link"><a href="<?php echo base_url(). 'contact'?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="wrapper">