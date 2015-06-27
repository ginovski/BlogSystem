<div id="main-content">
    <div class="articles">
        <div id="side" class="pull-right">
            <div class="content-body">
                <div class="main-body">
                    <div class="categories">
                        <div class="title text-left">
                            <h2>Categories</h2>
                        </div>

                        <ul class="list-categories">
                            <li>[Category] (times found)</li>
                            <li>[Category] (times found)</li>
                            <li>[Category] (times found)</li>
                            <li>[Category] (times found)</li>
                            <li>[Category] (times found)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <div class="main-body">
                    <div class="tags">
                        <div class="title text-left">
                            <h2>Tags</h2>
                        </div>

                        <ul class="list-tags">
                            <li><a href="">[#Tag]</a></li>
                            <li><a href="">[#Tag]</a></li>
                            <li><a href="">[#Tag]</a></li>
                            <li><a href="">[#Tag]</a></li>
                            <li><a href="">[#Tag]</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach($posts as $post):?>
        <div class="content-body article image-article">
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
                            <a href="<?php echo base_url(). 'index.php/posts/details/'.$post['id']?>">
                                <i class="fa fa-comments"></i>
                                <span class="number-comments"><?php echo $comments[$post['id']]?></span> comments
                            </a>
                        </p>
                    </div>

                    <div class="like">
                        <a href=""><i class="like fa fa-heart"></i> <?php echo $post['likes']?></a>
                    </div>
                </div>

                <div class="image">
                    <img src="<?php echo base_url(). $post['imageURL']?>" alt="Test Image">
                </div>

                <div class="post-text">
                    <p class="dark-text"><?php echo $post['content']?></p>
                </div>

                <div class="read-more">
                    <a href="<?php echo base_url(). 'index.php/posts/details/'.$post['id']?>">read more</a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
</div>