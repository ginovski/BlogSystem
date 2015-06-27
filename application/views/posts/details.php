<div id="main-content">
    <div class="articles">
        <div class="content-body text-article">
            <?php if(!is_null($post['imageURL'])):?>
                <div class="image">
                    <img src="<?php echo base_url(). $post['imageURL']?>" alt="Test Image">
                </div>
            <?php endif;?>
            <div class="main-body">
                <div class="title">
                    <h2><?php echo $post['title']?></h2>
                </div>

                <div class="date-comments">
                    <div class="date">
                        <p><i class="fa fa-clock-o"></i> <?php echo $post['date']?></p>
                    </div>

                    <div class="comments">
                        <p>
                            <a href="#comments">
                                <i class="fa fa-comments"></i>
                                <span class="number-comments"><?php echo sizeof($comments)?></span> comments
                            </a>
                        </p>
                    </div>

                    <div class="like">
                        <a href=""><i class="like fa fa-heart"></i> <?php echo $post['likes']?></a>
                    </div>
                </div>

                <div class="post-text">
                    <p class="dark-text"><?php echo $post['content']?></p>
                </div>
            </div>
        </div>
    </div>

    <div id="comments">
        <div class="content-body">
            <div class="main-body">
                <div class="title">
                    <h2 class="text-left">
                        <span class="number-of-comments"><?php echo sizeof($comments)?></span>
                        Comments
                    </h2>
                </div>

                <div class="comments-section">
                    <?php if(sizeof($comments) == 0):?>
                     <p class="no-comments">There are no comments. Be the first to <a href="#write-a-comment">comment</a>.
                     <?php endif;?>
                    <?php foreach($comments as $comment):?>
                    <div class="comment">
                        <div class="user-data">
                            <div class="col-sm-3 col-xs-4">
                                <div class="image">
                                    <img src="<?php echo base_url(). 'assets/images/testImage.jpg'?>" alt="Test Image">
                                </div>
                            </div>

                            <div class="col-sm-8 col-xs-8 text-left">
                                <p class="by"><?php echo $comment['author']?></p>
                                <br>
                                <small class="when"><?php echo $comment['date']?></small>
                                <br>
                                <a href="#write-a-comment">Reply</a>
                            </div>

                            <div class="user-comment col-sm-9 col-xs-12 text-left">
                                <p><?php echo $comment['content']?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

    <div id="write-a-comment">
        <div class="content-body">
            <div class="main-body">
                <div class="title">
                    <h2 class="text-left">Leave a Comment</h2>
                </div>

                <div class="form">
                    <form action="">
                        <input class="input" type="text" placeholder="Name*">
                        <input class="input" type="email" placeholder="Email*">
                        <textarea class="textarea input" name="Message" placeholder="Message*"></textarea>
                        <input class="submit" type="submit" value="post">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>