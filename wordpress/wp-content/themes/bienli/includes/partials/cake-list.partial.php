<div class="bienli-cake-list">
    <div class="bienli-inlay">
        <?php
        $counter = 0;
        while ( have_rows('cakes', 'option') ) : the_row();
            $name = get_sub_field('name','option');
            $image = get_sub_field('image', 'option');
            $link = get_sub_field('link', 'option');
            $description = get_sub_field('description', 'option');

            if(!isset($image['url'])){
                $image['url'] =  get_bloginfo('template_directory') . "/images/cake_default.png";
            }
                ?>
               <div class="bienli-cake-list-item bienli-row">
                   <div class="bienli-cake-list-item-image bienli-column-4 bienli-column-small-desktop-4 bienli-column-tablet-4 bienli-column-phone-12">
                        <img src="<?php echo $image['url']; ?>"/>
                   </div>
                   <div class="bienli-column-8 bienli-column-small-desktop-8 bienli-column-tablet-8 bienli-column-phone-12">
                       <div class="bienli-cake-list-item-content">
                           <div class="bienli-cake-list-item-title"><?php echo $name; ?></div>
                           <div class="bienli-cake-list-item-description"><?php echo $description; ?></div>
                       </div>
                   </div>
               </div>
        <?php
            $counter++;
            endwhile;
        ?>
    </div>
</div>