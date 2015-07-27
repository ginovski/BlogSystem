<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/adminStyle.css'?>" >

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
                <a class="navbar-brand" href="#">AdminPanel</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home">Posts</a></li>
                    <li><a href="comments">Comments</a></li>
                    <li><a href="about">About</a></li>
                </ul>
                <div class="col-sm-3 col-md-3 pull-right">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="wrapper">