<div class="bienli-team container-fluid">
    <div class="bienli-inlay">
        <?php
            $name = get_field('name','option');
            $description = get_field('description', 'option');
            $image = get_field('image', 'option');

            ?>
            <div class="bienli-team-container row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class=""><?php echo $name; ?></div>
                    <div class=""><?php echo $description; ?></div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img src="<?php echo $image; ?>"/></div>
            </div>
        <?php  ?>
    </div>
</div>