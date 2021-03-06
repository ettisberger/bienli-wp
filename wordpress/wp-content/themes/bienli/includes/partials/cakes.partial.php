<div class="bienli-cakes">
    <div class="bienli-cakes-items bienli-row">

    <?php

    $counter = 0;

    while ( have_rows('cakes', 'option') ) : the_row();

        if($counter == 8){
            break;
        }

        $counter++;
        $name = get_sub_field('name','option');
        $image = get_sub_field('image', 'option');
        $link = get_sub_field('link', 'option');

        if(!isset($image['url'])){
            $image['url'] =  get_bloginfo('template_directory') . "/images/cake_default.png";
        }
            ?>
           <div class="bienli-cakes-item bienli-column-3 bienli-column-small-desktop-3 bienli-column-tablet-4 bienli-column-phone-12">
               <a href="<?php echo $link;?>">
                   <div class="bienli-cakes-item-inner">
                       <img src="<?php echo $image['url']; ?>"/>
                       <div class="bienli-cakes-item-title">
                           <?php echo $name; ?>
                       </div>
                   </div>
                </a>
           </div>
    <?php endwhile; ?>
    </div>
</div>