<div id="main-content">
    <div class="content-body contact">
        <div class="main-body">
            <div class="title">
                <h2>Get In Touch</h2>
                <div class="name">
                    <h2 style="color: #54c0b0;">
                        <?php echo $user_info['fullname']?>
                        <small><i class="fa fa-phone"></i> <?php echo $user_info['phone']?></small>
                        <small><i class="fa fa-envelope"></i> <?php echo $user_info['email']?></small>
                    </h2>
                </div>
            </div>

            <div class="form">
                <form action="">
                    <input class="input" type="text" placeholder="Name*">
                    <input class="input" type="email" placeholder="Email*">
                    <textarea class="textarea input" name="Message" placeholder="Message*"></textarea>
                    <input class="submit" type="submit" value="send">
                </form>
            </div>
        </div>
    </div>
</div>