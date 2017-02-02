<?php
//    $image = wp_get_attachment_image_src(get_field('page-image'), 'full');
    $image = get_field('page-image');
?>

<header class="na-page-header" style="background-image: url('<?php echo $image; ?>');"></header>