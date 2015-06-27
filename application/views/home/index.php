<div id="main-content">
    <div class="articles">
        <div class="content-body article image-article">
            <?php foreach($posts as $post):?>
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
                        <div class="author">
                            <p><i class="fa fa-user"></i> <?php echo $post['author']?></p>
                        </div>

                        <div class="date">
                            <p><i class="fa fa-clock-o"></i> <?php echo $post['date']?></p>
                        </div>

                        <div class="comments">
                            <p>
                                <a href="post-without-comments.html">
                                    <i class="fa fa-comments"></i>
                                    <span class="number-comments">0</span> comments
                                </a>
                            </p>
                        </div>

                        <div class="like">
                            <a href=""><i class="like fa fa-heart"></i> Like[<?php echo $post['likes']?> likes]</a>
                        </div>
                    </div>

                    <div class="post-text">
                        <p class="dark-text"><?php echo $post['content']?></p>
                    </div>

                    <div class="read-more">
                        <a href="#">read more</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>