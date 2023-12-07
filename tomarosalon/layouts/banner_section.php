<?php
/**
 * banner_section.php
 * Display post banner_section
 * @package Wordpress
 */

$btn_bg = '';

$background_type = get_sub_field('background_type');
$section_class = get_sub_field('section_class');
$bg_id = get_sub_field('background_image');
$bg_image = wp_get_attachment_image_src( $bg_id, 'full' );
$background_color = get_sub_field('background_color');
$heading = get_sub_field('heading');
$buttons = get_sub_field('buttons');

if($background_type == 'image'){
    $bg = 'background: url('.$bg_image[0].')';
}else{
    $bg = 'background:'.$background_color;
}
?>

    <section class="banner_section <?php echo $section_class;?>" style="<?php echo $bg;?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="banner_heading">
                        <?php if(!empty($heading)){
                            echo '<h1>'.$heading.'</h1>';
                        }
                        ?>
                        <span class="b_h_l">
                            <?php
                            if(!empty($buttons)){
                                foreach($buttons as $btn){
                                    if(isset($btn['button_text']) && !empty($btn['button_text'])){
                                        if(!empty($btn['button_color'])){
                                            $btn_bg = 'style="background:'.$btn['button_color'].'"';
                                        }
                                        echo '<a '.$btn_bg.' href="'.$btn['link']['url'].'">'.$btn['button_text'].'</a>';
                                    }
                                }
                            }
                            ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </section>