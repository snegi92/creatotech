<?php
/**
 * service_section.php
 * Display post service_section
 * @package Wordpress
 */

$btn_bg = '';

$add_service = get_sub_field('add_service');
$section_class = get_sub_field('section_class');
/*$bg_id = get_sub_field('background_image');
$bg_image = wp_get_attachment_image_src( $bg_id, 'full' );
$background_color = get_sub_field('background_color');
$heading = get_sub_field('heading');
$buttons = get_sub_field('buttons');*/

?>

    <section class="service_section <?php echo $section_class;?>">
        <div class="container">
            <div class="row">
                <?php if(!empty($add_service)):
                    foreach($add_service as $services){
                        setup_postdata($services);
                        $post_id = $services->ID;
                        ?>
                        <div class="col-md-4">
                            <div class="service_sal">
                                <div class="se_sal_col se_im_sal">
                                    <?php if(has_post_thumbnail($post_id)){
                                        echo '<img src="'.get_the_post_thumbnail_url($post_id).'" class="img-fluid">';
                                    }?>
                                </div>
                                <div class="se_sal_col se_text_sal">
                                   <h2><?php echo get_the_title($post_id);?></h2>
                                   <p><?php echo get_the_content($post_id);?></p>
                                    <span class="rating_text">
                                        <img src="http://localhost/tomarosalon/wp-content/uploads/2023/12/review_b.png">
                                    </span>
                                    <a class="book_btn" href="#">Book Online</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                 endif;?>
            </div>
        </div>
    </section>