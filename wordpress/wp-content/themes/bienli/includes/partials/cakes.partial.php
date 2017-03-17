<!--<div class="bienli-cakes row" data-isotope='{ "itemSelector": ".bienli-cakes-item", "layoutMode": "packery" }'>-->
<div class="bienli-cakes container-fluid">
    <div class="bienli-cakes-items row">

    <?php while ( have_rows('cakes', 'option') ) : the_row();
        $name = get_sub_field('name','option');
        $image = get_sub_field('image', 'option');
        $link = get_sub_field('link', 'option');

        if(!isset($image['url'])){
//            $url = bloginfo('template_directory');
            $image['url'] =  get_bloginfo('template_directory') . "/images/cake_default.png";
        }
            ?>
           <div class="bienli-cakes-item-container col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <a href="<?php echo $link;?>">
                    <div class="bienli-cakes-item">
                        <img src="<?php echo $image['url']; ?>"/>
                        <div class="bienli-cakes-item-title">
                            <?php echo $name; ?>
                        </div>
                    </div>
<!--                <img class="bienli-cakes-item col-lg-3" src="--><?php //echo $image['url']; ?><!--"/>-->
                </a>
           </div>
    <?php endwhile; ?>
    </div>
</div>