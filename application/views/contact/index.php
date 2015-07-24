<div id="main-content">
    <div class="content-body contact">
        <div class="main-body">
            <div class="title">
                <h2>Get In Touch</h2>
                <div class="name">
                    <h2 style="color: #54c0b0;">
                        <?php echo $user_info['fullname']?> <br/>
                        <small><i class="fa fa-phone"></i> <?php echo $user_info['phone']?></small>
                        <br/>
                        <small><i class="fa fa-envelope"></i> <?php echo $user_info['email']?></small>
                    </h2>
                </div>
            </div>
            <div class="form">
                <?php echo validation_errors(); ?>
                <?php echo form_open('contact/send');?>
                    <input class="input" type="text" name="name" required="required" value="<?php echo set_value('name'); ?>" placeholder="Name*">
                    <input class="input" type="email" name="email" required="required" value="<?php echo set_value('email'); ?>" placeholder="Email*">
                    <textarea class="textarea input" name="message" required="required" placeholder="Message*"><?php echo set_value('message'); ?></textarea>
                    <input class="submit" type="submit" value="send">
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.form p').hide().fadeIn(800);
    });
</script>