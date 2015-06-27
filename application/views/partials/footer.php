</div>
<footer>
    <div id="footer">
        <div class="copyright">
            <p class="moto">“<?php echo $user_info['quote']?>” - <em><?php echo $user_info['quote_author']?></em></p>
        </div>

        <hr>

        <div class="social-media">
            <ul>
                <?php if(!is_null($user_info['facebook'])):?>
                    <li><a class="facebook" href="<?php echo $user_info['facebook']?>"><i class="fa fa-facebook"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['twitter'])):?>
                    <li><a class="twitter" href="<?php echo $user_info['twitter']?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['skype'])):?>
                    <li><a class="skype" href="<?php echo $user_info['skype']?>"><i class="fa fa-skype"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['googleplus'])):?>
                    <li><a class="google-plus" href="<?php echo $user_info['googleplus']?>"><i class="fa fa-google-plus"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['github'])):?>
                    <li><a class="github" href="<?php echo $user_info['github']?>"><i class="fa fa-github"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['linkedin'])):?>
                    <li><a class="linkedin" href="<?php echo $user_info['linkedin']?>"><i class="fa fa-linkedin"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['youtube'])):?>
                    <li><a class="youtube" href="<?php echo $user_info['youtube']?>"><i class="fa fa-youtube-play"></i></a></li>
                <?php endif;?>
                <?php if(!is_null($user_info['flickr'])):?>
                    <li><a class="flickr" href="<?php echo $user_info['flickr']?>"><i class="fa fa-flickr"></i></a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>