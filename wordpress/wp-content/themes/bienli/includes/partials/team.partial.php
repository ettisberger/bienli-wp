<div class="bienli-team">
    <div class="bienli-inlay">
        <?php
            $name = get_field('name','option');
            $description = get_field('description', 'option');
            $image = get_field('image', 'option');

            ?>
            <div class="bienli-row">
                <div class="bienli-column-12 bienli-column-small-desktop-12 bienli-column-tablet-12 bienli-column-phone-12">
                    <h3><?php echo $name; ?></h3>
                </div>
                <div class="bienli-team-text bienli-column-6 bienli-column-small-desktop-6 bienli-column-tablet-6 bienli-column-phone-12">
                    <div class=""><?php echo $description; ?></div>
                </div>
                <div class="bienli-column-6 bienli-column-small-desktop-6 bienli-column-tablet-6 bienli-column-phone-12">
                    <div class="bienli-team-image">
                        <img src="<?php echo $image; ?>"/>
                    </div>
                </div>
            </div>
        <?php  ?>
    </div>
</div>