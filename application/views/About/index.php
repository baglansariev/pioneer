<?php echo $header; ?>
<main>
    <?php echo $page_title; ?>
    <section class="welcome">
        <div class="container">
            <h3 class="row-title"><?php echo $local_welocme_title; ?></h3>
            <div class="welcome-content row">
                <?php if(isset($local_welcome_text)): ?>
                    <div class="welcome-text col-lg-12">
                        <?php foreach($local_welcome_text as $text): ?>
                            <i><?php echo $text; ?></i>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <h3 class="row-title"><?php echo $local_about_title; ?></h3>
            <div class="welcome-content row">
                <?php if(isset($local_about_text)): ?>
                    <div class="welcome-text col-lg-12">
                        <?php foreach($local_about_text as $text): ?>
                            <p><?php echo $text; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="about-video">
        <div class="container">
            <div class="row">
                <iframe src="https://www.youtube.com/embed/zywDWlQbPYU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="about-mission container">
            <h3 class="row-title"><?php echo $local_mission_title; ?></h3>
            <p><?php echo $local_mission_text; ?></p>
        </div>
        <?php echo $advantages ?>
    </section>
</main>
<?php echo $footer; ?>