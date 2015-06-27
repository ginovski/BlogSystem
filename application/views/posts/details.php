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
                                <span class="number-comments">15</span> comments
                            </a>
                        </p>
                    </div>

                    <div class="like">
                        <a href=""><i class="like fa fa-heart"></i> Like [<?php echo $post['likes']?> likes]</a>
                    </div>
                </div>

                <div class="post-text">
                    <p class="dark-text"><?php echo $post['content']?></p>
                </div>
            </div>
        </div>
    </div>
<!---->
<!--    <div id="comments">-->
<!--        <div class="content-body">-->
<!--            <div class="main-body">-->
<!--                <div class="title">-->
<!--                    <h2 class="text-left">-->
<!--                        <span class="number-of-comments">15</span>-->
<!--                        Comments-->
<!--                    </h2>-->
<!--                </div>-->
<!---->
<!--                <div class="comments-section">-->
<!--                    <div class="comment">-->
<!--                        <div class="user-data">-->
<!--                            <div class="col-sm-3 col-xs-4">-->
<!--                                <div class="image">-->
<!--                                    <img src="images/testImage.jpg" alt="Test Image">-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="col-sm-8 col-xs-8 text-left">-->
<!--                                <p class="by">Will Smith</p>-->
<!--                                <br>-->
<!--                                <small class="when">about 2 years ago</small>-->
<!--                                <br>-->
<!--                                <a href="#write-a-comment">Reply</a>-->
<!--                            </div>-->
<!---->
<!--                            <div class="user-comment col-sm-9 col-xs-12 text-left">-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing mauris quis quam mollis adipiscing. Nulla nunc mauris, porta ut ornare nec, mollis sed purus.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="comment reply">-->
<!--                            <div class="user-data">-->
<!--                                <div class="col-sm-3 col-xs-4">-->
<!--                                    <div class="image">-->
<!--                                        <img src="images/testImage.jpg" alt="Test Image">-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="col-sm-8 col-xs-8 text-left">-->
<!--                                    <p class="by">Krasi Stoyanov</p>-->
<!--                                    <br>-->
<!--                                    <small class="when">about 2 years ago</small>-->
<!--                                    <br>-->
<!--                                    <a href="#write-a-comment">Reply</a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="user-comment col-sm-9 col-xs-12 text-left">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing mauris quis quam mollis adipiscing. Nulla nunc mauris, ..</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="comment reply-reply">-->
<!--                                <div class="user-data">-->
<!--                                    <div class="col-sm-3 col-xs-4">-->
<!--                                        <div class="image">-->
<!--                                            <img src="images/testImage.jpg" alt="Test Image">-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-sm-8 col-xs-8 text-left">-->
<!--                                        <p class="by">Will Smith</p>-->
<!--                                        <br>-->
<!--                                        <small class="when">about 1 year ago</small>-->
<!--                                        <br>-->
<!--                                        <a href="#write-a-comment">Reply</a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="user-comment col-sm-9 col-xs-12 text-left">-->
<!--                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam adipiscing mauris quis quam mollis adipiscing. Nulla nunc mauris, ..</p>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="comment">-->
<!--                        <div class="user-data">-->
<!--                            <div class="col-sm-3 col-xs-4">-->
<!--                                <div class="image">-->
<!--                                    <img src="images/testImage.jpg" alt="Test Image">-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="col-sm-8 col-xs-8 text-left">-->
<!--                                <p class="by">Harry Kewell</p>-->
<!--                                <br>-->
<!--                                <small class="when">about 2 years ago</small>-->
<!--                                <br>-->
<!--                                <a href="#write-a-comment">Reply</a>-->
<!--                            </div>-->
<!---->
<!--                            <div class="user-comment col-sm-9 col-xs-12 text-left">-->
<!--                                <p>Pellentesque eget venenatis ipsum. In quis turpis in turpis faucibus eleifend a non nunc. Mauris vel elit rutrum, consectetur urna vel, aliquet nibh. Praesent in congue nibh. Nam urna sem, euismod et blandit ut, faucibus ut quam.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="comment">-->
<!--                        <div class="user-data">-->
<!--                            <div class="col-sm-3 col-xs-4">-->
<!--                                <div class="image">-->
<!--                                    <img src="images/testImage.jpg" alt="Test Image">-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="col-sm-8 col-xs-8 text-left">-->
<!--                                <p class="by">Wesley Sneijder</p>-->
<!--                                <br>-->
<!--                                <small class="when">about 2 years ago</small>-->
<!--                                <br>-->
<!--                                <a href="#write-a-comment">Reply</a>-->
<!--                            </div>-->
<!---->
<!--                            <div class="user-comment col-sm-9 col-xs-12 text-left">-->
<!--                                <p>Nullam est neque, vestibulum non dolor ultricies, fringilla euismod purus. Fusce tincidunt sed nulla quis gravida. Nullam ultrices nunc id magna laoreet posuere. Praesent non erat a ipsum blandit pulvinar. Nulla eu felis auctor tellus vestibulum varius. Mauris eu scelerisque ligula. Sed euismod auctor mauris et consectetur.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

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