<div id="main-content">
    <div class="content-body about">
        <div class="main-body">
            <div class="name">
                <h2><?php echo $user_info['fullname']?></h2>
                <small><?php echo $user_info['profession']?></small>
            </div>

            <div class="about-text">
                <p><?php echo $user_info['about']?></p>
            </div>

            <div id="skills">
                <div class="skills-title">
                    <h2>Skills</h2>
                </div>

                <div class="skills row">
                    <div class="col-sm-6 col-xs-12 professional">
                        <small>Professional</small>
                        <?php foreach($pro_skills as $skill):?>
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-12 skill-title">
                                <small><?php echo $skill['name']?></small>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="progress-bar">
                                    <div class="green-bar" data-width="<?php echo $skill['percent']?>"></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>

                    <div class="col-sm-6 col-xs-12 personal">
                        <small>Personal</small>
                        <?php foreach($personal_skills as $skill):?>
                        <div class="col-sm-12">
                            <div class="col-sm-6 col-xs-12 skill-title">
                                <small><?php echo $skill['name']?></small>
                            </div>

                            <div class="col-sm-6 col-xs-12">
                                <div class="progress-bar">
                                    <div class="green-bar" data-width="<?php echo $skill['percent']?>"></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>

            <div id="skills">
                <div class="skills-title">
                    <h2>Projects</h2>
                </div>

                <div class="portfolio row">
                    <div class="col-md-12">
                        <div class="portfolio-data">
                            <a href="">[Project Title]</a>
                            <small>(date)</small>

                            <div>
                                <small>Description: </small>
                                <span>[description]</span>
                            </div>

                            <div>
                                <small>Technologies: </small>
                                <span>[technology], [technology]</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="skills">
                <div class="skills-title">
                    <h2>Certificates</h2>
                </div>

                <div class="portfolio row">
                    <div class="col-md-12">
                        <div class="portfolio-data">
                            <a href="">[Certificate Title]</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="skills">
                <div class="skills-title">
                    <h2>Languages</h2>
                </div>

                <div class="portfolio row">
                    <div class="col-md-12">
                        <div class="portfolio-data">
                            <div class="col-md-4 col-sm-4">
                                <strong>[English]</strong>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <strong>[Bulgarisch]</strong>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <strong>[German]</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="skills">
                <div class="skills-title">
                    <h2>Education</h2>
                </div>

                <div class="portfolio row">
                    <div class="col-md-12">
                        <div class="portfolio-data">
                            <strong>[Education Centre Title]</strong>
                            <small>([location])</small>
                            <br/>
                            <small>[date]</small>
                        </div>

                        <div class="portfolio-data">
                            <strong>[Education Centre Title]</strong>
                            <small>([location])</small>
                            <br/>
                            <small>[date]</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>