<section class="news">
    <div class="container">
        <h3 class="row-title">Последние новости</h3>
        <div class="news-list row">
            <?php if(isset($news)): ?>
                <?php foreach($news as $article): ?>
                    <div class="article-container col-lg-4 col-md-6 col-sm-12">
                        <div class="article">
                            <a href="/news/show/<?php echo $article['id'] ?>" class="article-image" style="background-image: url('<?php echo $article['main_img'] ?>')"></a>
                            <div class="article-content">
                                <a href="/news/show/<?php echo $article['id'] ?>" class="article-title"><?php echo $article['title'] ?></a>
                                <p class="article-date"><?php echo $article['date_insert'] ?></p>
                                <p class="article-short-text"><?php echo $article['short_text'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if(isset($pages_viewport)): ?>
            <div class="pagination">
                <ul class="pagination-list">
                    <?php echo $pages_viewport; ?>
                </ul>
            </div>
        <?php endif ?>
    </div>
</section>