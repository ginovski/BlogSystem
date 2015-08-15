<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>" >
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/adminStyle.css'?>" >

    <link rel="icon" href="<?php echo base_url().'assets/images/favicon/favicon.ico'?>">

    <script src="<?php echo base_url().'assets/scripts/jquery-2.1.4.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/bootstrap.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/less.min.js'?>" ></script>
    <script src="<?php echo base_url().'assets/scripts/comments-color-change.js'?>" ></script>
</head>
<body>

<div id="wrapper" class="log-in">
    <div id="main-content">
        <div class="articles detail-view">
            <div class="content-body text-article">
                <div class="main-body">
                    <form action="">
                        <input class="input" type="text" name="username" required="required" value="" placeholder="Username"/>
                        <input class="input" type="password" name="password" required="required" value="" placeholder="Password"/>
                        <div class="read-more">
                            <input type="submit" value="Log in"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>