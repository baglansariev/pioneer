<section class="simple-slider">
    <div class="slider-viewport">
        <?php foreach($slider_data as $slider): ?>
            <div class="slider-image" style="background-image: url('<?php echo $slider['img_url'] ?>')" data-text="<?php echo $slider['text'] ?>"></div>
        <?php endforeach ?>
    </div>
    <div class="slider-control">

    </div>
</section>