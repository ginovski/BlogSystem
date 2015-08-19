<div id="main-content">
    <div class="articles detail-view add-post">
        <div class="content-body text-article">
            <div class="main-body">
                <form action="">
                    <div class="image">
                        <div class="wrapper hidden">
                            <div class="opacity-overlay">
                                <div>
                                    <a title="Change" class="change-image" href="" data-toggle="modal" data-target="#importImageModal">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a title="Remove" class="remove-image" href="">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a class="image-placeholder" href="" data-toggle="modal" data-target="#importImageModal">
                            <p><i class="glyphicon glyphicon-plus"></i></p>
                            <span>Upload image</span>
                        </a>
                    </div>

                    <div class="modal fade" id="importImageModal" tabindex="-1" role="dialog" aria-labelledby="importImageModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Import image by URL</h4>
                                </div>
                                <div class="modal-body">
                                    <input class="input import-img-url" name="post-image-url" type="url" placeholder="Image URL"/>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary import">Import</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title">
                        <input class="input" type="text" name="post-title" required="required" value="" placeholder="Post title">
                    </div>

                    <div class="category">
                        <select name="category" id="category">
                            <option value="Uncategorized">Uncategorized</option>
                            <option value="UI & UX">UI & UX</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Illustration">Illustration</option>
                            <option value="Web Design">Web Design</option>
                            <option value="General">General</option>
                        </select>
                    </div>

                    <div class="post-text">
                        <textarea class="textarea input" name="post-text" required="required" placeholder="Post text"></textarea>
                    </div>

                    <div class="read-more">
                        <input type="submit" value="Post"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>