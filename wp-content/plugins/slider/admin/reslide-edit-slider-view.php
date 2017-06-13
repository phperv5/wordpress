<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly
/**
 * Slider edit general page
 *
 * @param $_row
 * @param $_id
 * @param $_slider
 */
function reslide_edit_slider_view( $_row, $_id, $_slider ) {
    function deleteSpacesNewlines( $str ) {
        return preg_replace( array( '/\r/', '/\n/' ), '', $str );
    }

    $style   = json_decode( $_slider[0]->style );
    $params  = json_decode( $_slider[0]->params );
    $customs = json_decode( ( $_slider[0]->custom ) );

    $paramsJson = deleteSpacesNewlines( $_slider[0]->params );
    $styleJson  = deleteSpacesNewlines( $_slider[0]->style );
    $customJson = deleteSpacesNewlines( $_slider[0]->custom );

    $count = 0;
    foreach ( $_row as $slide ) {
        if ( $slide->published == 0 ) {
            continue;
        }
        $count ++;
    }; ?>
    <script>
        jQuery(window).load(function(){
            jQuery('#reslide-right-click-protection').on('change', function () {
                if(jQuery('#reslide-right-click-protection').val() === '1') {
                    jQuery('#reslide_slider_preview').bind("contextmenu", function(e) {
                        e.preventDefault();
                    });

                    jQuery(document).keydown(function(e){
                        if(e.which === 123){
                            return false;
                        }
                    });
                } else {
                    jQuery('#reslide_slider_preview').unbind("contextmenu");
                }
            });
            
            if(+jQuery('#reslide-right-click-protection').val()) {
                jQuery('#reslide_slider_preview').bind("contextmenu", function(e) {
                    e.preventDefault();
                });

                jQuery(document).keydown(function(e){
                    if(e.which === 123){
                        return false;
                    }
                });
            }

            if (document.getElementById("reslide_preview")) {
                document.getElementById("reslide_preview").addEventListener("click", function (e) {
                    var $frame_val = jQuery('#params-imageframes').val(),
                        $filter_val = jQuery('#params-imagefilters').val();

                    switch ($frame_val) {
                        case '0':
                            setTimeout(function(){
                                jQuery('div[id*=slider].reslide_slider_container_preview').css({
                                    'border-width': '0'
                                });
                            },0);
                            break;
                        case '1':
                            setTimeout(function(){
                                jQuery('div[id*=slider].reslide_slider_container_preview').css({
                                    'border-image': 'url("<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES; ?>/image_frames/frame_1.png") 100 103 103 100 stretch stretch',
                                    'border-style': 'inset',
                                    'border-width': '60px'
                                });
                            },0);
                            break;
                        case '7':
                            setTimeout(function(){
                                jQuery('div[id*=slider].reslide_slider_container_preview').css({
                                    'border-image': 'url("<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES; ?>/image_frames/frame_7.png") 100 100 100 100 stretch stretch',
                                    'border-style': 'inset',
                                    'border-width': '60px'
                                });
                            },0);
                            break;
                        case '8':
                            setTimeout(function(){
                                jQuery('div[id*=slider].reslide_slider_container_preview').css({
                                    'border-image': 'url("<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES; ?>/image_frames/frame_8.png") 100 135 100 140 stretch stretch',
                                    'border-style': 'inset',
                                    'border-width': '60px'
                                });
                            },0);
                            break;
                    }

                    switch ($filter_val) {
                        case '1':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'grayscale(1)',
                                    'filter': 'grayscale(1)'
                                });
                            },0);
                            break;
                        case '2':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'sepia(1)',
                                    'filter': 'sepia(1)'
                                });
                            },0);
                            break;
                        case '3':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'saturate(4)',
                                    'filter': 'saturate(4)'
                                });
                            },0);
                            break;
                        case '4':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'hue-rotate(90deg)',
                                    'filter': 'hue-rotate(90deg)'
                                });
                            },0);
                            break;
                        case '5':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'invert(.8)',
                                    'filter': 'invert(.8)'
                                });
                            },0);
                            break;
                        case '6':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'opacity(.5)',
                                    'filter': 'opacity(.5)'
                                });
                            },0);
                            break;
                        case '7':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'brightness(.5)',
                                    'filter': 'brightness(.5)'
                                });
                            },0);
                            break;
                        case '8':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(3)',
                                    'filter': 'contrast(3)'
                                });
                            },0);
                            break;
                        case '9':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'blur(1px)',
                                    'filter': 'blur(1px)'
                                });
                            },0);
                            break;
                        case '10':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'sepia(1) hue-rotate(200deg)',
                                    'filter': 'sepia(1) hue-rotate(200deg)'
                                });
                            },0);
                            break;
                        case '11':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(1.4) saturate(1.8) sepia(.6)',
                                    'filter': 'contrast(1.4) saturate(1.8) sepia(.6)'
                                });
                            },0);
                            break;
                        case '12':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'grayscale(1) brightness(0.45) contrast(1.05)',
                                    'filter': 'grayscale(1) brightness(0.45) contrast(1.05)'
                                });
                            },0);
                            break;
                        case '13':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(110%) brightness(110%) contrast(130%)',
                                    'filter': 'contrast(110%) brightness(110%) contrast(130%)'
                                });
                            },0);
                            break;
                        case '14':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(90%) brightness(120%) contrast(85%) hue-rotate(20deg)',
                                    'filter': 'contrast(90%) brightness(120%) contrast(85%) hue-rotate(20deg)'
                                });
                            },0);
                            break;
                        case '15':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(100%) brightness(105%) contrast(100%) hue-rotate(270deg)',
                                    'filter': 'contrast(100%) brightness(105%) contrast(100%) hue-rotate(270deg)'
                                });
                            },0);
                            break;
                        case '16':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(150%) brightness(100%) contrast(110%)',
                                    'filter': 'contrast(150%) brightness(100%) contrast(110%)'
                                });
                            },0);
                            break;
                        case '17':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(85%) brightness(110%) contrast(75%) sepia(22%)',
                                    'filter': 'contrast(85%) brightness(110%) contrast(75%) sepia(22%)'
                                });
                            },0);
                            break;
                        case '18':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(100%) brightness(110%) contrast(160%) sepia(30%) hue-rotate(350deg)',
                                    'filter': 'contrast(100%) brightness(110%) contrast(160%) sepia(30%) hue-rotate(350deg)'
                                });
                            },0);
                            break;
                        case '19':
                            setTimeout(function(){
                                jQuery('.reslide_slider_container_preview .reslideitem img').css({
                                    '-webkit-filter': 'contrast(100%) brightness(100%) contrast(100%) sepia(30%)',
                                    'filter': 'contrast(100%) brightness(100%) contrast(100%) sepia(30%)'
                                });
                            },0);
                            break;
                    }
                });
            }
            
        });
        
        const FRONT_IMAGES = '<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>';
        const _IMAGES = '<?php echo RESLIDE_PLUGIN_PATH_IMAGES;?>';

        // initialize slider values in slider admin page
        var reslider = {
            id: '<?php echo $_id;?>',
            name: '<?php echo $_slider[0]->title;?>',
            params: JSON.parse('<?php echo $paramsJson;?>'),
            style: JSON.parse('<?php echo $styleJson;?>'),
            custom: JSON.parse('<?php echo $customJson;?>'),
            count: parseInt('<?php echo $count;?>'),
            length: 0,

            slides: {}
        };
        <?php
        $Slidecount = 0;
        foreach ($_row as $row) {
        $Slidecount ++;
        $customSlideJson = deleteSpacesNewlines( $row->custom );
        $image_link = esc_js( html_entity_decode( $row->image_link, ENT_COMPAT, 'UTF-8' ) );
        $description = esc_js( html_entity_decode( $row->description, ENT_COMPAT, 'UTF-8' ) );
        $title = esc_js( html_entity_decode( $row->title, ENT_COMPAT, 'UTF-8' ) );
        ?>
        // initialize slider's slides's values in slider admin page
        reslider['slides']['slide' + '<?php echo $row->id;?>'] = {};
        reslider['slides']['slide' + '<?php echo $row->id;?>']['id'] = '<?php echo $row->id;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['title'] = '<?php echo $title;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['description'] = '<?php echo $description;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['image_link'] = '<?php echo $image_link;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['url'] = '<?php echo $row->thumbnail;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['type'] = '<?php echo $row->type;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['published'] = +'<?php echo $row->published;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['ordering'] = +'<?php echo $row->ordering;?>';
        reslider.slides['slide' + '<?php echo $row->id;?>']['custom'] = JSON.parse('<?php echo $customSlideJson;?>');
        <?php
        }?>
        reslider.length = +'<?php echo $Slidecount;?>';
    </script>
    <div class="reslide_slider_view_wrapper">
        <div id="reslide_slider_view">
            <div class="add_slide_container">
                <a id="add_image"><span><?php _e( 'Add Image', 'reslide' ); ?></span><span><i class="fa fa-plus-circle"
                                                                 aria-hidden="true"></i></span></a>
            </div>
            <div class="add_slide_container_video">
                <a id="add_video">
                    <p id="reslide_insert_video_input"><?php _e( 'Add Video', 'reslide' ); ?></p>
                    <span class="video-pro reslide-free" style="color:red;"><?php _e('(PRO)&nbsp;','reslide');?></span>
                </a>
            </div>
            <div class="add_slide_container_video">
                <a id="add_video">
                    <p id="reslide_insert_video_input"><?php _e( 'Add Post', 'reslide' ); ?></p>
                    <span class="video-pro reslide-free" style="color:red;"><?php _e('(PRO)&nbsp;','reslide');?></span>
                </a>
            </div>
            <div class="reslide_slider_images_list_wrapper">
                <ul id="reslide_slider_images_list">
                    <?php if ( ! count( $_row ) ) {
                        ; ?>
                        <li class="noimage">
					<span class="noimage-add" href="#">
						<img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES; ?>/noimage.png">
					</span>
                        </li>
                        <?php
                    }
                    foreach ( $_row as $rows ) {
                        switch ( $rows->type ) {
                            case 'video': ?>
                                <li id="reslideitem_<?php echo $rows->id; ?>" class="reslideitem">
                                    <a class="edit video"
                                       href="<?php wp_nonce_url(admin_url( 'admin.php?page=reslider&task=editslider&id=' . $_id ),'reslide_editslider_'.$_id); ?>">
                                        <?php echo $rows->title; ?>
                                        <iframe src="<?php echo $rows->thumbnail; ?>" frameborder="0"
                                                allowfullscreen=""></iframe>
                                    </a>
                                    <b>
                                        <a href="#" class="quick_edit" data-slide-id="<?php echo $rows->id; ?>">Quick
                                            Edit</a></b>
                                </li>
                                <?php
                                break;
                            default: ?>
                                <li id="reslideitem_<?php echo $rows->id; ?>" class="reslideitem">
                                    <div class="reslideitem-img-container">
                                        <a class="edit"
                                           href="<?php echo wp_nonce_url( admin_url( 'admin.php?page=reslider&task=editslide&slideid=' . $rows->id . '&id=' . $_id ), 'reslide_editslide_'.$_id ); ?>">
                                            <img width="200"  src="<?php echo $rows->thumbnail; ?>"/>
                                            <span class="edit-image"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                            <span
                                                class="title"><?php echo reslide_text_sanitize( $rows->title ); ?></span>
                                        </a>
                                        <div class="reslideitem-properties">
                                            <b><a href="#" class="quick_edit"
                                                  data-slide-id="<?php echo $rows->id; ?>"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i><span><?php _e('Quick Edit','reslide');?></span></a></b>
                                            </a>
                                            <b><a href="#" class="reslide_remove_image"
                                                  data-slide-id="<?php echo $rows->id; ?>"><i class="fa fa-remove"
                                                                                              aria-hidden="true"></i><span><?php _e('Remove','reslide');?></span></a></b>
                                            <b><label href="#" class="reslide_on_off_image"><input
                                                        data-slide-id="<?php echo $rows->id; ?>"
                                                        class="slide-checkbox" <?php if ( $rows->published == 1 ) {
                                                        echo 'checked  value="1"';
                                                    } else echo 'value="0"' ?>
                                                        type="checkbox"/><span><?php _e('Public','reslide');?></span></label></b>
                                        </div>
                                        <form class="reslide-nodisplay">
                                            <input type="text" class="reslideitem-edit-title"
                                                   value="<?php echo wp_unslash( $rows->title ); ?>">
                                            <textarea
                                                class="reslideitem-edit-description"><?php echo reslide_text_sanitize( $rows->description ); ?></textarea>
                                            <input type="text" class="reslideitem-edit-image_link"  placeholder="URL"
                                                   value="<?php echo wp_unslash( $rows->image_link); ?>">
                                            <input type="hidden" class="reslideitem-edit-type"
                                                   value="<?php echo esc_attr($rows->type); ?>">
                                            <input type="hidden" class="reslideitem-edit-url"
                                                   value="<?php echo esc_attr($rows->thumbnail); ?>">
                                            <input type="hidden" class="reslideitem-ordering"
                                                   value="<?php echo esc_attr($rows->ordering); ?>">
                                        </form>
                                </li>
                                <?php
                        }
                    } ?>
                </ul>
                <button id="save_slider"><?php _e('Save Slide Changes','reslide');?></button>
            </div>
        </div>
        <div id="reslide_slider_edit">
            <div class="header">
                <div><h3><?php echo wp_unslash($_slider[0]->title); ?></h3></div>
                <div class="slider-preview-options">
                    <a id="reslide_preview" href="#"><?php _e('Preview','reslide');?></a>
                    <a class="reslide_save_all" href="#"><?php _e('Save','reslide');?></a>
                </div>
            </div>
            <div class="settings">
                <div class="menu">
                    <ul>
                        <li rel="general"><a href="#" class="active"><?php _e('General','reslide');?></a></li>
                        <li rel="styling"><a href="#"><?php _e('Styling','reslide');?></a></li>
                        <li rel="arrows"><a href="#"><?php _e('Arrows','reslide');?></a></li>
                        <li rel="thumbnails"><a href="#"><?php _e('Thumbnails','reslide');?></a></li>
                        <li rel="bullets"><a href="#"><?php _e('Bullets','reslide');?></a></li>
                        <li rel="sharing"><a href="#"><?php _e('Social Sharing','reslide');?></a></li>
                        <li rel="watermark"><a href="#"><?php _e('Watermark','reslide');?></a></li>
                        <li rel="shortcodes"><a href="#"><?php _e('Shortcode','reslide');?></a></li>
                    </ul>
                </div>
                <div class="menu-content">
                    <ul class="main-content">
                        <li class="general active">
                            <ul id="general-settings">
                                <li class="style"><label for="reslide-name"><?php _e('Name:','reslide');?></label><input id="reslider-name"
                                                                                                name="cs[name]" type="text"
                                                                                                value="<?php echo stripslashes_deep($_slider[0]->title); ?>"/>
                                </li>
                                <li class="style"><label for="reslide-width"><?php _e('Width(px):','reslide');?></label><input id="reslide-width"
                                                                                                      name="style[width]"
                                                                                                      type="number"
                                                                                                      value="<?php echo esc_attr($style->width); ?>"/>
                                </li>
                                <li class="style"><label for="reslide-height"><?php _e('Height(px):','reslide');?></label><input id="reslide-height"
                                                                                                        name="style[height]"
                                                                                                        type="number"
                                                                                                        value="<?php echo esc_attr($style->height); ?>"/>
                                </li>
                                <li style="display:none;" class="margin style"><label><?php _e('Margin(px):','reslide');?></label>
                                    <div>
                                        <input id="reslide-margin-left" type="number" name="style[marginLeft]"
                                               value="<?php echo esc_attr($style->marginLeft); ?>"/>
                                        <input id="reslide-margin-top" type="number" name="style[marginTop]"
                                               value="<?php echo esc_attr($style->marginTop); ?>"/>
                                        <input id="reslide-margin-right" type="number" name="style[marginRight]"
                                               value="<?php echo esc_attr($style->marginRight); ?>"/>
                                        <input id="reslide-margin-bottom" type="number" name="style[marginBottom]"
                                               value="<?php echo esc_attr($style->marginBottom); ?>"/>
                                    </div>
                                </li>
                                <li class="params">
                                    <label for="reslide-autoplay"><?php _e('Slider Autoplay', 'reslide'); ?>:</label><input id="reslide-autoplay"
                                                                                                 type="checkbox"
                                                                                                 name="params[autoplay]"
                                                                                                 value="<?php echo esc_attr($params->autoplay); ?>" <?php checked( $params->autoplay ); ?> />
                                </li>
                                <li class="params">
                                    <label for="reslide-pauseonhover"><?php _e('Pause On Hover', 'reslide'); ?>:</label><input id="reslide-pauseonhover"
                                                                                                 type="checkbox"
                                                                                                 name="params[pauseonhover]"
                                                                                                 value="<?php echo esc_attr($params->pauseonhover); ?>" <?php checked( $params->pauseonhover ); ?> />
                                </li>
                                <li class="params">
                                    <label for="reslide-right-click-protection"><?php _e('Right Click Protection', 'reslide'); ?>:</label>
                                    <input id="reslide-right-click-protection" type="checkbox"
                                           name="params[rightclickprotection]"
                                           value="<?php echo esc_attr($params->rightclickprotection); ?>" <?php checked( $params->rightclickprotection ); ?> />
                                </li>
                                <li class="params">
                                    <label for="reslide-effect-type"><?php _e('Slider Effect', 'reslide'); ?>:</label>
                                    <select id="reslide-effect-type">
                                        <option
                                            value="0" <?php echo ( esc_attr($params->effect->type) == 0 ) ? "selected" : ""; ?>>
                                            <?php _e('Fade','reslide');?>
                                        </option>
                                        <option
                                            value="1" <?php echo ( esc_attr($params->effect->type) == 1 ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate','reslide');?>
                                        </option>
                                        <option
                                            value="2" <?php echo ( esc_attr($params->effect->type) == 2 ) ? "selected" : ""; ?>>
                                            <?php _e('Switch','reslide');?>
                                        </option>
                                        <option
                                            value="3" <?php echo ( esc_attr($params->effect->type) == 3 ) ? "selected" : ""; ?>>
                                            <?php _e('Doors','reslide');?>
                                        </option>
                                        <option
                                            value="4" <?php echo ( esc_attr($params->effect->type) == 4 ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate Axis down','reslide');?>
                                        </option>
                                        <option
                                            value="5" <?php echo ( esc_attr($params->effect->type) == 5 ) ? "selected" : ""; ?>>
                                            <?php _e('Jump in square','reslide');?>
                                        </option>
                                        <option
                                            value="6" <?php echo ( esc_attr($params->effect->type) == 6 ) ? "selected" : ""; ?>>
                                            <?php _e('Collapse stairs','reslide');?>
                                        </option> 
                                        <option
                                            value="7" <?php echo ( esc_attr($params->effect->type) == 7 ) ? "selected" : ""; ?>>
                                            <?php _e('Slide Left','reslide');?>
                                        </option> 
                                        <option
                                            value="8" <?php echo ( esc_attr($params->effect->type) == 8 ) ? "selected" : ""; ?>>
                                            <?php _e('Slide Right','reslide');?>
                                        </option>
                                        <option
                                            value="9" <?php echo ( esc_attr($params->effect->type) == 9 ) ? "selected" : ""; ?>>
                                            <?php _e('Slide Up','reslide');?>
                                        </option>
                                        <option
                                            value="10" <?php echo ( esc_attr($params->effect->type) == 10 ) ? "selected" : ""; ?>>
                                            <?php _e('Slide Down','reslide');?>
                                        </option>
                                        <option
                                            value="11" <?php echo ( esc_attr($params->effect->type) == 11 ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate VDouble in','reslide');?>
                                        </option>
                                        <option
                                            value="12" <?php echo ( esc_attr($params->effect->type) == 12 ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate HDouble in','reslide');?>
                                        </option>
                                        <option
                                            value="13" <?php echo ( esc_attr($params->effect->type) == 13 ) ? "selected" : ""; ?>>
                                            <?php _e('Zoom in','reslide');?>
                                        </option>
                                        <option
                                            value="14" <?php echo ( esc_attr($params->effect->type) == 14 ) ? "selected" : ""; ?>>
                                            <?php _e('Fade in Corners','reslide');?>
                                        </option>
                                        <option
                                            value="15" <?php echo ( esc_attr($params->effect->type) == 15 ) ? "selected" : ""; ?>>
                                            <?php _e('Fade Clip out','reslide');?>
                                        </option>
                                        <option
                                            value="16" <?php echo ( esc_attr($params->effect->type) == 16 ) ? "selected" : ""; ?>>
                                            <?php _e('Fade Clip out V','reslide');?>
                                        </option>
                                        <option
                                            value="17" <?php echo ( esc_attr($params->effect->type) == 17 ) ? "selected" : ""; ?>>
                                            <?php _e('Horizontal Chess Stripe','reslide');?>
                                        </option>
                                        <option
                                            value="18" <?php echo ( esc_attr($params->effect->type) == 18 ) ? "selected" : ""; ?>>
                                            <?php _e('Vertical Chess Stripe','reslide');?>
                                        </option>
                                        <option
                                            value="19" <?php echo ( esc_attr($params->effect->type) == 19 ) ? "selected" : ""; ?>>
                                            <?php _e('Horizontal Fade Stripe','reslide');?>
                                        </option>
                                        <option
                                            value="20" <?php echo ( esc_attr($params->effect->type) == 20 ) ? "selected" : ""; ?>>
                                            <?php _e('Vertical Fade Stripe','reslide');?>
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[effect][type]"
                                           value="<?php echo esc_attr($params->effect->type); ?>">
                                </li>
                                <li class="params">
                                    <label for="reslide-behavior" name="params[behavior]"><?php _e('Image Behavior', 'reslide'); ?>:</label>
                                    <select id="reslide-behavior">
                                        <option
                                            value="0" <?php echo ( esc_attr($params->behavior) == 0 ) ? "selected" : ""; ?>>
                                            Stretch
                                        </option>
                                        <option
                                            value="1" <?php echo ( esc_attr($params->behavior) == 1 ) ? "selected" : ""; ?>>
                                            Fit
                                        </option>
                                        <option
                                            value="2" <?php echo ( esc_attr($params->behavior) == 2 ) ? "selected" : ""; ?>>
                                            Fill
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[behavior]"
                                           value="<?php echo esc_attr($params->behavior); ?>">
                                </li>
                                <li class="params">
                                    <label for="reslide-effect-duration"><?php _e('Speed', 'reslide'); ?>:</label>
                                    <input type="number" name="params[effect][duration]"
                                           value="<?php echo esc_attr($params->effect->duration); ?>">
                                </li>
                                <li class="params">
                                    <label for="reslide-effect-interval"><?php _e('Pause Time', 'reslide'); ?>:</label>
                                    <input type="number" name="params[effect][interval]"
                                           value="<?php echo esc_attr($params->effect->interval); ?>">
                                </li>
                                <li class="params title">
                                    <label for="reslide-title-show">Title:</label><input id="reslide-title-show" type="checkbox"
                                                                                         name="params[title][show]"
                                                                                         value="<?php echo esc_attr($params->title->show); ?>" <?php if ( $params->title->show ) {
                                        echo "checked";
                                    } ?> />
                                    <div id="reslide-title-stylings-free" class="reslide_styling"
                                         style="display:inline-block;"><?php _e('Style', 'reslide'); ?>
                                    </div>
                                    <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span>
                                    <input type="hidden" name="params[title][style][width]"
                                           value="<?php echo esc_attr($params->title->style->width); ?>">
                                    <input type="hidden" name="params[title][style][height]"
                                           value="<?php echo esc_attr($params->title->style->height); ?>">
                                    <input type="hidden" name="params[title][style][top]"
                                           value="<?php echo esc_attr($params->title->style->top); ?>">
                                    <input type="hidden" name="params[title][style][left]"
                                           value="<?php echo esc_attr($params->title->style->left); ?>">
                                </li>
                                <li class="params description">
                                    <label for="reslide-description-show"><?php _e('Description:','reslide');?></label><input id="reslide-description-show"
                                                                                                     type="checkbox"
                                                                                                     name="params[description][show]"
                                                                                                     value="<?php echo esc_attr($params->description->show); ?>" <?php if ( $params->description->show ) {
                                        echo "checked";
                                    } ?> />
                                    <div id="reslide-description-stylings-free" class="reslide_styling"
                                         style="display:inline-block;"><?php _e('Style', 'reslide'); ?>
                                        </div>
                                    <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span>
                                </li>
                                <li class="params custom">
                                    <label for="reslide-custom"><?php _e('Custom Element:','reslide');?></label>
                                    <select id="reslide-custom">
                                        <option
                                            value="text" <?php echo ( esc_attr($params->custom->type) == 'text' ) ? "selected" : ""; ?>>
                                            Text
                                        </option>
                                        <option
                                            value="button" <?php echo ( esc_attr($params->custom->type) == 'button' ) ? "selected" : ""; ?>>
                                            Button
                                        </option>
                                        <option
                                            value="image" <?php echo ( esc_attr($params->custom->type) == 'image' ) ? "selected" : ""; ?>>
                                            Image
                                        </option>
                                    </select>
                                    <input type="hidden" id="reslide-custom-type" class="reslide_styling"
                                           name="params[custom][type]" value="<?php echo $params->custom->type; ?>">
                                    <div id="reslide-custom-stylings" class="reslide_styling"><?php _e('Style','reslide');?> <i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                    <div id="reslide-custom-add" class="reslide_drawelement free"
                                         rel="reslide_<?php echo esc_attr($params->custom->type); ?>"
                                         data="<?php echo esc_attr($params->custom->type); ?>" style="display:inline-block;"><?php _e('Add','reslide');?>
                                    </div>
                                    <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span>
                                </li>
                                <li class="params">
                                    <label for="reslide-sortimagesby" name="params[sortimagesby]"><?php _e('Sort By', 'reslide'); ?>:</label>
                                    <select id="reslide-sortimagesby">
                                        <option
                                            value="0" <?php echo ( esc_attr($params->sortimagesby) == 0 ) ? "selected" : ""; ?>>
                                            <?php _e('None','reslide');?>
                                        </option>
                                        <option
                                            value="1" <?php echo ( esc_attr($params->sortimagesby) == 1 ) ? "selected" : ""; ?>>
                                            <?php _e('Name','reslide');?>
                                        </option>
                                        <option
                                            value="2" <?php echo ( esc_attr($params->sortimagesby) == 2 ) ? "selected" : ""; ?>>
                                            <?php _e('Random','reslide');?>
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[sortimagesby]"
                                           value="<?php echo esc_attr($params->sortimagesby); ?>">
                                </li>
                                <li class="params">
                                    <label for="reslide-lightbox"><?php _e('Lightbox', 'reslide'); ?>:</label><input id="reslide-lightbox"
                                                                                                                     type="checkbox" name="params[lightbox]"
                                                                                                                     value="<?php echo esc_attr($params->lightbox); ?>" <?php checked( $params->lightbox ); ?> />
                                </li>
                                <li class="params" <?php if((int)$params->lightbox == 0){echo 'style="display: none;"';}?>>
                                    <label for="reslide-slide_effect" name="params[slide_effect]"><?php _e('Slide Effect:', 'reslide'); ?></label>
                                    <select id="reslide-slide_effect">
                                        <option value="effect_1" <?php echo ( $params->slide_effect == 'effect_1' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 1','reslide');?>
                                        </option>
                                        <option value="effect_2" <?php echo ( $params->slide_effect == 'effect_2' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 2','reslide');?>
                                        </option>
                                        <option value="effect_3" <?php echo ( $params->slide_effect == 'effect_3' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 3','reslide');?>
                                        </option>
                                        <option value="effect_4" <?php echo ( $params->slide_effect == 'effect_4' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 4','reslide');?>
                                        </option>
                                        <option value="effect_5" <?php echo ( $params->slide_effect == 'effect_5' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 5','reslide');?>
                                        </option>
                                        <option value="effect_6" <?php echo ( $params->slide_effect == 'effect_6' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 6','reslide');?>
                                        </option>
                                        <option value="effect_7" <?php echo ( $params->slide_effect == 'effect_7' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 7','reslide');?>
                                        </option>
                                        <option value="effect_8" <?php echo ( $params->slide_effect == 'effect_8' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 8','reslide');?>
                                        </option>
                                        <option value="effect_9" <?php echo ( $params->slide_effect == 'effect_9' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 9','reslide');?>
                                        </option>
                                        <option value="effect_10" <?php echo ( $params->slide_effect == 'effect_10' ) ? "selected" : ""; ?>>
                                            <?php _e('Effect 10','reslide');?>
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[slide_effect]"
                                           value="<?php echo esc_attr($params->slide_effect); ?>">
                                </li>
                                <li class="params" <?php if((int)$params->lightbox == 0){echo 'style="display: none;"';}?>>
                                    <label for="reslide-open_close_effect" name="params[open_close_effect]"><?php _e('Open/Close Effect:', 'reslide'); ?></label>
                                    <select id="reslide-open_close_effect">
                                        <option value="none" <?php echo ( $params->open_close_effect == 'none' ) ? "selected" : ""; ?>>
                                            <?php _e('None','reslide');?>
                                        </option>
                                        <option value="unfold" <?php echo ( $params->open_close_effect == 'unfold' ) ? "selected" : ""; ?>>
                                            <?php _e('UnFold','reslide');?>
                                        </option>
                                        <option value="unfold_r" <?php echo ( $params->open_close_effect == 'unfold_r' ) ? "selected" : ""; ?>>
                                            <?php _e('UnFold R','reslide');?>
                                        </option>
                                        <option value="blowup" <?php echo ( $params->open_close_effect == 'blowup' ) ? "selected" : ""; ?>>
                                            <?php _e('BlowUp','reslide');?>
                                        </option>
                                        <option value="blowup_r" <?php echo ( $params->open_close_effect == 'blowup_r' ) ? "selected" : ""; ?>>
                                            <?php _e('BlowUp R','reslide');?>
                                        </option>
                                        <option value="roadrunner" <?php echo ( $params->open_close_effect == 'roadrunner' ) ? "selected" : ""; ?>>
                                            <?php _e('RoadRunner','reslide');?>
                                        </option>
                                        <option value="roadrunner_r" <?php echo ( $params->open_close_effect == 'roadrunner_r' ) ? "selected" : ""; ?>>
                                            <?php _e('RoadRunner R','reslide');?>
                                        </option>
                                        <option value="runner" <?php echo ( $params->open_close_effect == 'runner' ) ? "selected" : ""; ?>>
                                            <?php _e('Runner','reslide');?>
                                        </option>
                                        <option value="runner_r" <?php echo ( $params->open_close_effect == 'runner_r' ) ? "selected" : ""; ?>>
                                            <?php _e('Runner R','reslide');?>
                                        </option>
                                        <option value="rotate" <?php echo ( $params->open_close_effect == 'rotate' ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate','reslide');?>
                                        </option>
                                        <option value="rotate_r" <?php echo ( $params->open_close_effect == 'rotate_r' ) ? "selected" : ""; ?>>
                                            <?php _e('Rotate R','reslide');?>
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[open_close_effect]"
                                           value="<?php echo esc_attr($params->open_close_effect); ?>">
                                </li>
                                <li class="params" style="border-right: none;width:340px; <?php if((int)$params->lightbox == 0){echo 'display: none;"';}?>">
                                    <label for="reslide-arrows_style" name="params[arrows_style]"><?php _e('Arrows Style:', 'reslide'); ?></label>
                                    <select id="reslide-arrows_style">
                                        <option value="arrows_1" <?php echo ( $params->arrows_style == 'arrows_1' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 1','reslide');?>
                                        </option>
                                        <option value="arrows_2" <?php echo ( $params->arrows_style == 'arrows_2' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 2','reslide');?>
                                        </option>
                                        <option value="arrows_3" <?php echo ( $params->arrows_style == 'arrows_3' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 3','reslide');?>
                                        </option>
                                        <option value="arrows_4" <?php echo ( $params->arrows_style == 'arrows_4' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 4','reslide');?>
                                        </option>
                                        <option value="arrows_5" <?php echo ( $params->arrows_style == 'arrows_5' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 5','reslide');?>
                                        </option>
                                        <option value="arrows_6" <?php echo ( $params->arrows_style == 'arrows_6' ) ? "selected" : ""; ?>>
                                            <?php _e('Arrows 6','reslide');?>
                                        </option>
                                    </select>
                                    <input type="hidden" name="params[arrows_style]"
                                           value="<?php echo esc_attr($params->arrows_style); ?>">
                                    <div id="view-image_frame">
                                        <ul><li data-id="arrows_1" <?php if($params->arrows_style == 'arrows_1') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows1.png' ?>"></li></ul>
                                        <ul><li data-id="arrows_2" <?php if($params->arrows_style == 'arrows_2') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows2.png' ?>"></li></ul>
                                        <ul><li data-id="arrows_3" <?php if($params->arrows_style == 'arrows_3') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows3.png' ?>"></li></ul>
                                        <ul><li data-id="arrows_4" <?php if($params->arrows_style == 'arrows_4') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows4.png' ?>"></li></ul>
                                        <ul><li data-id="arrows_5" <?php if($params->arrows_style == 'arrows_5') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows5.png' ?>"></li></ul>
                                        <ul><li data-id="arrows_6" <?php if($params->arrows_style == 'arrows_6') echo 'class="active"'; ?>><img src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES .  '/arrows/slightbox_arrows6.png' ?>"></li></ul>
                                    </div>
                                </li>
                            </ul>
                            <div id="general-view" style="height: <?php echo esc_attr($style->height) + 250; ?>px;">
                                <div class="ruler">
                                    <span class="ruler_text"></span>
                                    <div id="reslide-slider-construct">
                                    <div id="reslide-construct-vertical"></div>
                                    <div id="reslide-construct-horizontal"></div>
                                    <div id="reslide-title-construct" data="title" class="reslide_construct">
                                        <div style="margin-left:5px;color:#565855"><?php _e('Title','reslide');?></div>
                                    </div>
                                    <div id="reslide-description-construct" data="description" class="reslide_construct">
                                        <div style="margin-left:5px;color:#565855"><?php _e('Description','reslide');?></div>
                                    </div>
                                    <?php
                                    $button                   = - 1;
                                    foreach ( $customs as $custom ) {
                                        switch ( $custom->type ) {
                                            case 'img':
                                                ?>
                                                <img id="reslide_img<?php echo $custom->id; ?>"
                                                     class="reslide_img reslide_construct"
                                                     style="top: <?php echo esc_attr($custom->style->top);?>;left: <?php echo esc_attr($custom->style->left);?> "
                                                     data="img<?php echo $custom->id; ?>"
                                                     src="<?php echo esc_url($custom->src); ?>"
                                                     alt="<?php echo esc_attr($custom->alt); ?>">
                                                <?php
                                                break;
                                            case 'h3':
                                                $custom->text = str_replace( '&#39;', "'", $custom->text );
                                                $custom->text = str_replace( '&#34;', '"', $custom->text );
                                                ?>
                                                <h3 id="reslide_h3<?php echo $custom->id; ?>"
                                                    class="reslide_h3 reslide_construct"
                                                    style="top: <?php echo $custom->style->top;?>;left: <?php echo $custom->style->left;?> "
                                                    data="h3<?php echo $custom->id; ?>">
													<span class="reslide_construct_texter reslide_inputh3"
                                                          style="width: 100%; height: 100%; display: block;"><?php echo esc_html($custom->text); ?></span>
                                                </h3>
                                                <?php
                                                break;
                                            case 'button':
                                                $button ++;
                                                $custom->text = str_replace( '&#39;', "'", $custom->text );
                                                $custom->text = str_replace( '&#34;', '"', $custom->text );
                                                ?>
                                                <button id="reslide_button<?php echo $custom->id; ?>"
                                                        class="reslide_button reslide_construct"
                                                        style="top: <?php echo esc_attr($custom->style->top);?>;left: <?php echo esc_attr($custom->style->left);?> "
                                                        data="button<?php echo $custom->id; ?>">
													<span class="reslide_construct_texter reslide_inputbutton"
                                                          style="width: 100%; height: 100%; display: block;"><?php echo esc_html($custom->text); ?></span>
                                                </button>
                                                <?php
                                                break;
                                            case 'iframe':
                                                ?><img class="video"
                                                       src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES . "/play.youtube.png"; ?>">
                                                <div class="properties">
													<span
                                                        class="w"><?php echo esc_html($params->description->style->width); ?></span>
                                                    <span
                                                        class="h"><?php echo esc_html($params->description->style->height); ?></span>
                                                </div>
                                                <?php
                                                break;
                                        }
                                    }
                                    ?>
                                    <div id="zoom" class="sizer">
                                    </div>
                                    <a id="reslide_remove" title="Remove Element"><i class="fa fa-remove"
                                                                                     aria-hidden="true"></i></a>
                                </div>
                                </div>
                        </li>
                        <li class="styling">
                            <ul>
                                <li id="borderSettings">
                                    <label id="border-settings" for="reslide-border"><?php _e('Border:','reslide');?></label>
                                    <ul class="styling-settings">
                                        <li class="params">
                                            <label for="reslide-bordersize"><?php _e('Border size','reslide');?>: <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span></label>
                                            <input class='border_free_option' type="number" value="0">
                                        </li>
                                        <li class="params">
                                            <label for="reslide-bordercolor"><?php _e('Border color','reslide');?>: <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span></label>
                                            <form id="reslide-bordercolor">
                                                <input type="text" class="jscolor border_free_option" id="params-bordercolor"
                                                       rel="0" value="000">
                                            </form>
                                        </li>
                                        <li class="params">
                                            <label for="reslide-borderradius"><?php _e('Border radius','reslide');?>: <span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro.png'; ?>" width='35' height='15' /></span></label>
                                            <input class='border_free_option' type="number" value="0">
                                        </li>
                                    </ul>
                                </li>
                                <li id="imageFrameSettings" class="params">
                                    <label id="image-frames"  for="reslide-image-frames"><?php _e('Image frames:','reslide');?></label>
                                    <form id="reslide-image-frames">
                                        <span>
                                            <input type="radio" id="params-image-frames0"
                                                   name="params[imageframes]" rel="0"
                                                   value='0' <?php if ( (string)$params->imageframes == '0' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-frames0"><img title="No Filter"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/none.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames1"
                                                   name="params[imageframes]" rel="1"
                                                   value='1' <?php if ( (string)$params->imageframes == '1' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-frames1"><img title="Grayscale"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_1.png'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames7"
                                                   name="params[imageframes]" rel="7"
                                                   value='7' <?php if ( (string)$params->imageframes == '7' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-frames7"><img title="Brightness"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_7.png'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames8"
                                                   name="params[imageframes]" rel="8"
                                                   value='8' <?php if ( (string)$params->imageframes == '8' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-frames8"><img title="Brightness"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_8.png'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames2"
                                                   name="params[imageframes]" rel="2"
                                                   value='2' <?php if ( (string)$params->imageframes == '2' ) {
                                                echo "checked";
                                            } ?>>
                                            <label class="pro_option" for="params-image-frames2"><img title="Sepia"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_2.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames3"
                                                   name="params[imageframes]" rel="3"
                                                   value='3' <?php if ( (string)$params->imageframes == '3' ) {
                                                echo "checked";
                                            } ?>>
                                            <label class="pro_option" for="params-image-frames3"><img title="Saturation"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_3.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames4"
                                                   name="params[imageframes]" rel="4"
                                                   value='4' <?php if ( (string)$params->imageframes == '4' ) {
                                                echo "checked";
                                            } ?>>
                                            <label class="pro_option" for="params-image-frames4"><img title="Hue-rotate"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_4.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames5"
                                                   name="params[imageframes]" rel="5"
                                                   value='5' <?php if ( (string)$params->imageframes == '5' ) {
                                                echo "checked";
                                            } ?>>
                                            <label class="pro_option" for="params-image-frames5"><img title="Invert"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_5.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-frames6"
                                                   name="params[imageframes]" rel="6"
                                                   value='6' <?php if ( (string)$params->imageframes == '6' ) {
                                                echo "checked";
                                            } ?>>
                                            <label class="pro_option" for="params-image-frames6"><img title="Opacity"
                                                                                   src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/image_frames/frame_6.jpg'; ?>"></label>
										</span>
                                        <input type="hidden" id="params-imageframes" name="params[imageframes]"
                                               value="<?php echo (string)$params->imageframes; ?>">

                                    </form>
                                </li>
                                <li id="imageFilterSettings" class="params">
                                    <label id="image-filters"  for="reslide-image-filters"><?php _e('Image filters:','reslide');?></label>
                                    <form id="reslide-image-filters">
                                        <span>
                                            <input type="radio" id="params-image-filters0"
                                                   name="params[imagefilters]" rel="0"
                                                   value='0' <?php if ( esc_attr($params->imagefilters) == '0' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-filters0"><img title="No Filter"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters1"
                                                   name="params[imagefilters]" rel="1"
                                                   value='1' <?php if ( esc_attr($params->imagefilters) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-filters1"><img title="Grayscale"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters2"
                                                   name="params[imagefilters]" rel="2"
                                                   value='2' <?php if ( esc_attr($params->imagefilters) == '2' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-filters2"><img title="Sepia"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters3"
                                                   name="params[imagefilters]" rel="3"
                                                   value='3' <?php if ( esc_attr($params->imagefilters) == '3' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-filters3"><img title="Saturation"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters4"
                                                   name="params[imagefilters]" rel="4"
                                                   value='4' <?php if ( esc_attr($params->imagefilters) == '4' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-image-filters4"><img title="Hue-rotate"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters5">
                                            <label class="pro_option" for="params-image-filters5"><img title="Invert"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters6">
                                            <label class="pro_option" for="params-image-filters6"><img title="Opacity"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters7">
                                            <label class="pro_option" for="params-image-filters7"><img title="Brightness"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters8">
                                            <label class="pro_option" for="params-image-filters8"><img title="Contrast"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters9">
                                            <label class="pro_option" for="params-image-filters9"><img title="Blur"
                                                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters10">
                                            <label class="pro_option" for="params-image-filters10"><img title="Tint"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters11">
                                            <label class="pro_option" for="params-image-filters11"><img title="Tina"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters12">
                                            <label class="pro_option" for="params-image-filters12"><img title="Inkwell"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters13">
                                            <label class="pro_option" for="params-image-filters13"><img title="1977"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters14">
                                            <label class="pro_option" for="params-image-filters14"><img title="Aden"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters15">
                                            <label class="pro_option" for="params-image-filters15"><img title="Gingham"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters16">
                                            <label class="pro_option" for="params-image-filters16"><img title="Lofi"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters17">
                                            <label class="pro_option" for="params-image-filters17"><img title="Reyes"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                           <input type="radio" id="params-image-filters18">
                                            <label class="pro_option" for="params-image-filters18"><img title="Walden"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <span>
                                            <input type="radio" id="params-image-filters19">
                                            <label class="pro_option" for="params-image-filters19"><img title="Xpro2"
                                                                                     src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/Default/1.jpg'; ?>"></label>
										</span>
                                        <input type="hidden" id="params-imagefilters" name="params[imagefilters]"
                                               value="<?php echo esc_attr($params->imagefilters); ?>">

                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="arrows">
                            <ul id="arrow-settings">
                                <li class="params">
                                    <label for="reslide-arrows-show"><?php _e('Show Arrows:','reslide');?></label>
                                    <form id="reslide-arrows-show">
                                        <div>
                                            <label>Always:</label><input type="radio" id="ui" name="params[arrows][show]"
                                                   value="2" <?php if ( esc_attr($params->arrows->show) == '2' ) {
                                                echo "checked";
                                            } ?> >
                                        </div>
                                        <div>
                                            <label>On Hover:</label><input type="radio" name="params[arrows][show]"
                                                   value="1" <?php if ( esc_attr($params->arrows->show) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label>Never:</label><input type="radio" name="params[arrows][show]" value="0" <?php if ( esc_attr($params->arrows->show) == '0' ) { echo "checked"; } ?>>
                                        </div>
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-arrows-background"><?php _e('Arrows styles:&nbsp;','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-arrows-background">
                                        <span>
                                            <input type="radio" id="params-arrows-background1"
                                                   name="params[arrows][style][background][free]" rel="1"
                                                   value='{"width":"49","height":"49","left":"91px 46px","right":"-44px 1px","hover":{"left":"91px 46px","right":"-44px 1px"}}' <?php if ( esc_attr($params->arrows->type) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-arrows-background1"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/arrows/arrows-1.png'; ?>"></label><br>
										</span>
										<input type="hidden" id="params-arrows-type" name="params[arrows][type]"
                                               value="<?php echo esc_attr($params->arrows->type); ?>">
                                        <div id="arrows-info">
                                            <p><?php _e('In the lite version of the plugin you can use the default arrow for slider, yet the Pro version offers more arrows.','reslide');?></p>
                                        </div>
                                        <img id="arrows_info_img" src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/arrows/arrows_style.png'; ?>" />
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="thumbnails">
                            <ul id="thumbnail-settings">
                                <li class="params">
                                    <label for="reslide-thumbnails-show"><?php _e('Show thumbnails:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-thumbnails-show">
                                        <div>
                                            <label><?php _e('Always:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][show]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->show) == '2' ) {
                                                echo "checked";
                                            } ?> >
                                        </div>
                                        <div>
                                            <label><?php _e('Hover:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][show]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->show) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label><?php _e('Never:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][show]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->show) == '0' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-thumbnails-positioning"><?php _e('Positioning:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span>
                                    </label>
                                    <form id="reslide-thumbnails-positioning">
                                        <div>
                                            <label><?php _e('Default:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][positioning]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->positioning) == '0' ) {
                                                echo "checked";
                                            } ?> >
                                        </div>
                                        <div>
                                            <label><?php _e('Show all:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][positioning]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->positioning) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label><?php _e('Customize:','reslide');?></label>
                                            <input type="radio" name="params[thumbnails][positioning]"
                                                   value="0" <?php if ( esc_attr($params->thumbnails->positioning) == '2' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="bullets">
                            <ul id="bullet-settings">
                                <li class="params">
                                    <label for="reslide-bullets-show"><?php _e('Show bullets:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-bullets-show">
                                        <div>
                                            <label><?php _e('Always:','reslide');?></label>
                                            <input type="radio" name="params[bullets][show]"
                                                   value="2" <?php if ( esc_attr($params->arrows->show) == '2' ) {
                                                echo "checked";
                                            } ?> >
                                        </div>
                                        <div>
                                            <label><?php _e('Hover:','reslide');?></label>
                                            <input type="radio" name="params[bullets][show]"
                                                   value="2" <?php if ( esc_attr($params->arrows->show) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label><?php _e('Never:','reslide');?></label>
                                            <input type="radio" name="params[bullets][show]"
                                                   value="2" <?php if ( esc_attr($params->arrows->show) == '0' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-bullets-position"> <?php _e('Position:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-bullets-position">
                                        <input type="radio" id="params-bullets-position0"
                                               name="params[bullets][style][position][free]" rel="0"
                                               value='{"top": "16px","left": "10px"}' <?php if ( esc_attr($params->bullets->position) == '0' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position1"
                                               name="params[bullets][style][position][free]" rel="1"
                                               value='{"top": "16px"}' <?php if ( esc_attr($params->bullets->position) == '1' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position2"
                                               name="params[bullets][style][position][free]" rel="2"
                                               value='{"top": "16px","right": "10px"}' <?php if ( esc_attr($params->bullets->position) == '2' ) {
                                            echo "checked";
                                        } ?>><br>
                                        <input type="radio" id="params-bullets-position3"
                                               name="params[bullets][style][position][free]" rel="3"
                                               value='{"left": "10px"}' <?php if ( esc_attr($params->bullets->position) == '3' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position4"
                                               name="params[bullets][style][position][free]" rel="4"
                                               value='4' <?php if ( esc_attr($params->bullets->position) == '4' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position5"
                                               name="params[bullets][style][position][free]" rel="5"
                                               value='{"right": "10px"}' <?php if ( esc_attr($params->bullets->position) == '5' ) {
                                            echo "checked";
                                        } ?>><br>
                                        <input type="radio" id="params-bullets-position6"
                                               name="params[bullets][style][position][free]" rel="6"
                                               value='{"bottom": "16px","left": "10px"}' <?php if ( esc_attr($params->bullets->position) == '6' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position7"
                                               name="params[bullets][style][position][free]" rel="7"
                                               value='7' <?php if ( esc_attr($params->bullets->position) == '7' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="radio" id="params-bullets-position8"
                                               name="params[bullets][style][position][free]" rel="8"
                                               value='{"bottom": "16px","right": "10px"}' <?php if ( esc_attr($params->bullets->position) == '8' ) {
                                            echo "checked";
                                        } ?>>
                                        <input type="hidden" id="params-bullets-position"
                                               name="params[bullets][position][free]"
                                               value="<?php echo esc_attr($params->bullets->position); ?>">
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-bullets-background"><?php _e('Background:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-bullets-background">
										<span>
										<label for="params-bullets-background-link"><?php _e('Color:','reslide');?></label>
										<input type="text" class="jscolor" id="params-bullets-background-link"
                                               name="params[bullets][style][background][color][link][free]" rel="0"
                                               value="<?php echo esc_attr($params->bullets->style->background->color->link); ?>">
										</span>
                                        <span>
										<label for="params-bullets-background-hover"><?php _e('Hover:','reslide');?></label>
										<input type="text" class="jscolor" id="params-bullets-background-hover"
                                               name="params[bullets][style][background][color][hover][free]" rel="0"
                                               value="<?php echo esc_attr($params->bullets->style->background->color->hover); ?>">
										</span>
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-bullets-orientation"><?php _e('Orientation:','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-bullets-orientation">
                                        <div>
                                            <label for="params-bullets-orientation-horizontal"><?php _e('Horizontal:','reslide');?></label>
                                            <input type="radio" id="params-bullets-orientation-horizontal"
                                                   name="params[bullets][orientation][free]" rel="0"
                                                   value='1' <?php if ( esc_attr($params->bullets->orientation) == '1' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label for="params-bullets-orientation-vertical"><?php _e('Vertical:','reslide');?></label>
                                            <input type="radio" id="params-bullets-orientation-vertical"
                                                   name="params[bullets][orientation][free]" rel="1"
                                                   value='2' <?php if ( esc_attr($params->bullets->orientation) == '2' ) {
                                                echo "checked";
                                            } ?>>
                                        </div>
                                        <div>
                                            <label for="params-bullets-orientation-row"><?php _e('Rows:','reslide');?></label>
                                            <input type="number" id="params-bullets-orientation-row"
                                                   name="params[bullets][rows][free]" rel="2"
                                                   value='<?php echo esc_attr($params->bullets->rows); ?>'>
                                        </div>
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-bullets-space"><?php _e('Inline Space(px):','reslide');?><span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-bullets-space">
                                        <div>
                                            <label for="params-bullets-space-x"><?php _e('Horizontal:','reslide');?></label>
                                            <input type="number" id="params-bullets-space-x" name="params[bullets][s_x][free]"
                                                   rel="0" size="5" value='<?php echo esc_attr($params->bullets->s_x); ?>'>
                                        </div>
                                        <div>
                                            <label for="params-bullets-space-y"><?php _e('Vertical:','reslide');?></label>
                                            <input type="number" id="params-bullets-space-y" name="params[bullets][s_y][free]"
                                                   rel="0" size="5" value='<?php echo esc_attr($params->bullets->s_y); ?>'>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="sharing">
                            <ul id="sharing-settings">
                                <li class="params" id="reslide-sharing-show">
                                    <label for="reslide-sharing-show"><?php _e('Share Buttons:','reslide');?></label>
                                    <ul id="reslide-sharing-show">
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][facebook]" value="<?php echo esc_attr($params->sharing->show->facebook); ?>"
                                                <?php if ( esc_attr($params->sharing->show->facebook) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e( 'Facebook', 'reslide' ); ?></label>
                                        </li>
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][twitter]" value="<?php echo esc_attr($params->sharing->show->twitter); ?>"
                                                <?php if ( esc_attr($params->sharing->show->twitter) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e('Twitter','reslide');?></label>
                                        </li>
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][googleplus]" value="<?php echo esc_attr($params->sharing->show->googleplus); ?>"
                                                <?php if ( esc_attr($params->sharing->show->googleplus) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e('Google Plus','reslide');?></label>
                                        </li>
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][pinterest]" value="<?php echo esc_attr($params->sharing->show->pinterest); ?>"
                                                <?php if ( esc_attr($params->sharing->show->pinterest) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e('Pinterest','reslide');?></label>
                                        </li>
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][linkedin]" value="<?php echo esc_attr($params->sharing->show->linkedin); ?>"
                                                <?php if ( esc_attr($params->sharing->show->linkedin) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e('Linkedin','reslide');?></label>
                                        </li>
                                        <li class='social_media'>
                                            <input id="ui" type="checkbox" name="params[sharing][show][tumblr]" value="<?php echo esc_attr($params->sharing->show->tumblr); ?>"
                                                <?php if ( esc_attr($params->sharing->show->tumblr) == '1' ) {
                                                    echo "checked";
                                                } ?>>
                                            <label><?php _e('Tumblr','reslide');?></label>
                                        </li>
                                    </ul>
                                </li>
                                <li class="params">
                                    <label for="reslide-sharing-background"><?php _e('Share buttons styles:','reslide');?>&nbsp;</label>
                                    <form id="reslide-sharing-background">
                                        <span>
                                            <input type="radio" id="params-sharing-background0"
                                                   name="params[sharing][type]" rel="0"
                                                   value='0' <?php if ( esc_attr($params->sharing->type) == '0' ) {
                                                echo "checked";
                                            } ?>>
                                            <label for="params-sharing-background0"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-0.png'; ?>"></label>
										</span>
                                        <span>
                                            <label class="pro_option" for="params-sharing-background1"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-1.png'; ?>"></label>
										</span>
                                        <span>
                                            <label class="pro_option" for="params-sharing-background2"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-2.png'; ?>"></label>
										</span>
                                        <span>
                                            <label class="pro_option" for="params-sharing-background3"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-3.png'; ?>"></label>
										</span>
                                        <span>
                                            <label class="pro_option" for="params-sharing-background4"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-4.png'; ?>"></label>
										</span>
                                        <span>
                                            <label class="pro_option" for="params-sharing-background5"><img
                                                    src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/sharing/sharing-5.png'; ?>"></label>
										</span>
                                        <input type="hidden" id="params-sharing-type" name="params[sharing][type]"
                                               value="<?php echo esc_attr($params->sharing->type); ?>">

                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="watermark">
                            <ul id="watermark-settings">
                                <li class="params">
                                    <label for="reslide-watermark"><?php _e('Watermark', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark" type="checkbox"
                                           value="1" checked />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-text"><?php _e('Watermark Text', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-text" class="reslide-watermark-input" type="text"
                                           value="WaterMark" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-textcolor"><?php _e('Text Color','reslide');?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-watermark-textcolor">
                                        <input type="text" class="jscolor" id="params-watermark-textcolor"
                                               rel="0" value="000">
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-textfontsize"><?php _e('Text Font Size', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-textfontsize" class="reslide-watermark-input" type="number"
                                           value="16" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-background"><?php _e('Container BG','reslide');?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-watermark-background">
                                        <input type="text" class="jscolor" id="params-watermark-background"
                                               rel="0" value="FFF">
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-backgroundopacity"><?php _e('BG Opacity', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-backgroundopacity" class="reslide-watermark-input reslide-watermark-backgroundopacity" type="number"
                                           min="0" max="1" step="0.1" value="1" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-containerwidth"><?php _e('Container Width', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-containerwidth" class="reslide-watermark-input reslide-watermark-containerwidth" type="number" value="200" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-opacity"><?php _e('Container Opacity', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-opacity" class="reslide-watermark-input reslide-watermark-opacity" type="number"
                                           min="0" max="1" step="0.1" value="1" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-margin"><?php _e('Container Margin', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <input id="reslide-watermark-margin" class="reslide-watermark-input reslide-watermark-margin" type="number" value="10" />
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-position"><?php _e('Position','reslide');?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <form id="reslide-watermark-position">
                                        <input type="radio" id="params-watermark-position1"
                                               rel="1">
                                        <input type="radio" id="params-watermark-position2"
                                               rel="2">
                                        <input type="radio" id="params-watermark-position3"
                                               rel="3"><br>
                                        <input type="radio" id="params-watermark-position4"
                                               rel="4">
                                        <input type="radio" id="params-watermark-position5"
                                               rel="5" checked>
                                        <input type="radio" id="params-watermark-position6"
                                               rel="6"><br>
                                        <input type="radio" id="params-watermark-position7"
                                               rel="7">
                                        <input type="radio" id="params-watermark-position8"
                                               rel="8">
                                        <input type="radio" id="params-watermark-position9"
                                               rel="9">
                                        <input type="hidden" id="params-watermark-position"
                                               value="5">
                                    </form>
                                </li>
                                <li class="params">
                                    <label for="reslide-watermark-imgsrc"><?php _e('Image Source', 'reslide'); ?>:<span class="reslide-free" style="color:red;"><img src="<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES . '/pro1.png'; ?>" width='35' height='15' /></span></label>
                                    <div id="img-wrap">
                                        <img src="" id="watermark_image" alt="No image found" />
                                    </div>
                                    <input type="button" class="button wp-media-buttons-icon"
                                           id="watermark_image_btn" value="Change Image">
                                    <input type="hidden" id="img_watermark_hidden"
                                           value="">
                                </li>

                            </ul>
                        </li>
                        <li class="shortcodes">
                            <div class="shortcode">
                                <div class="header">
                                    <h3><?php _e('Shortcode Usage','reslide');?></h3>
                                </div>
                                <div class="usual usage">
                                    <?php _e('Copy & paste the shortcode directly into any WordPress post or page.','reslide');?>
                                    <span>[R-slider id="<?php echo $_slider[0]->id; ?>"]</span>
                                </div>
                                <div class="php usage">
                                    <?php _e('Copy & paste this code into a template file to include the slideshow within your theme.','reslide');?>
                                    <span>&lt;?php echo do_shortcode("[R-slider id='<?php echo $_slider[0]->id; ?>']"); ?&gt;</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="reslide_slide_edit" style="display:none;">
            <input class="title" name="title" value=""/>
            <input class="description" name="description" value=""/>
            <div class="content">
                <span id="logo">Logo</span>
                <div class="contents">

                </div>
            </div>
        </div>
        <div id="reslide_slider_preview_popup">

        </div>
        <div id="reslide_slider_preview">
            <div class="reslide_close" style="position:fixed;top: 12%;right: 6%;"><i class="fa fa-remove"
                                                                                     aria-hidden="true"></i></div>
        </div>
        <!--SLIDER-->
        <style>

            /*** title ***/
            .reslide_bullets {
                position: absolute;

            }

            .reslide_bullets div, .reslide_bullets div:hover, .reslide_bullets .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                border-radius: 10px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #4B4B4B 1px solid;
            }

            .reslide_bullets div {
                background-color: <?php echo sanitize_hex_color("#".$params->bullets->style->background->color->link);?>;
            }

            body .reslide_bullets div:hover {
                background-color: <?php echo sanitize_hex_color("#".$params->bullets->style->background->color->hover);?>;
            }

            .reslide_bullets .bulletav {
                background-color: #74B8CF !important;
                border: #fff 1px solid;
            }

            .reslide_bullets .dn, .reslide_bullets .dn:hover {
                background-color: #555555;
            }

            /* arrows */
            .reslide_arrow_left, .reslide_arrow_right {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: <?php echo absint($params->arrows->style->background->width);?>px;
                height: <?php echo absint($params->arrows->style->background->height);?>px;
                cursor: pointer;
                background-image: url(<?php echo RESLIDE_PLUGIN_PATH_FRONT_IMAGES;?>/arrows/arrows-<?php echo $params->arrows->type;?>.png);
                overflow: hidden;
            }

            .reslide_arrow_left {
                background-position: <?php echo esc_attr($params->arrows->style->background->left);?>;
            }

            .reslide_arrow_left:hover {
                background-position: <?php echo esc_attr($params->arrows->style->background->left);?>;
            }

            .reslide_arrow_right {
                background-position: <?php echo esc_attr($params->arrows->style->background->right);?>;
            }

            .reslide_arrow_right:hover {
                background-position: <?php echo esc_attr($params->arrows->style->background->right);?>;
            }

            .reslide_arrow_left.reslide_arrow_leftdn {
                background-position: <?php echo esc_attr($params->arrows->style->background->left);?>;
            }

            .reslide_arrow_right.reslide_arrow_rightdn {
                background-position: <?php echo esc_attr($params->arrows->style->background->right);?>;
            }

            .reslidetitle, .reslidedescription {
                box-sizing: border-box;
                padding: 1%;
                overflow: hidden;
            }

            .reslidetitle h3, .reslidedescription h3 {
                margin: 0;
                padding: 0;
                word-wrap: break-word;
                width: 100%;
                text-align: center;
                font-size: inherit !important;
            }


        </style>
    </div>
    <div id="reslide_slider_title_styling" class="reslide-styling main-content">
        <div class="reslide_close"><i class="fa fa-remove" aria-hidden="true"></i></div>
        <span class="popup-type" data="off"><img
                src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES . "/light_1.png"; ?>"></span>
        <form id="reslide-title-styling " class="params">
            <input type="hidden" class="width" name="params[title][style][width]" rel="px"
                   value="<?php echo esc_attr($params->title->style->width); ?>">
            <input type="hidden" class="height" name="params[title][style][height]" rel="px"
                   value="<?php echo esc_attr($params->title->style->height); ?>">
            <input type="hidden" class="top" name="params[title][style][top]" rel="0"
                   value="<?php echo esc_attr($params->title->style->top); ?>">
            <input type="hidden" class="left" name="params[title][style][left]" rel="0"
                   value="<?php echo esc_attr($params->title->style->left); ?>">
            <span class="color">
		<label for="params-title-background-color-link"><?php _e('Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-bullets-background-color-link"
               name="params[title][style][background][color]" rel="#"
               value="<?php echo esc_attr($params->title->style->background->color); ?>">
		</span>
            <span class="color">
		<label for="params-title-background-color-hover"><?php _e('Hover Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-bullets-background-color-hover"
               name="params[title][style][background][hover]" rel="#"
               value="<?php echo esc_attr($params->title->style->background->hover); ?>">
		</span>
            <span class="size">
		<label for="params-title-background-opacity"><?php _e('Opacity(%):','reslide');?></label>
		<input type="number" id="params-title-background-opacity" name="params[title][style][opacity]" rel="0"
               value="<?php echo esc_attr($params->title->style->opacity); ?>">
		</span>
            <span class="size">
		<label for="params-title-border-size"><?php _e('Border:','reslide');?></label>
		<input type="number" id="params-title-border-width" name="params[title][style][border][width]" rel="px"
               value="<?php echo esc_attr($params->title->style->border->width); ?>">
		</span>
            <span class="color">
		<label for="params-title-border-color"><?php _e('Border Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-title-border-color" name="params[title][style][border][color]"
               rel="#" value="<?php echo esc_attr($params->title->style->border->color); ?>">
		</span>
            <span class="size">
		<label for="params-title-background-radius"><?php _e('Border Radius:','reslide');?></label>
		<input type="number" id="params-title-border-radius" name="params[title][style][border][radius]" rel="px"
               value="<?php echo esc_attr($params->title->style->border->radius); ?>">
		</span>
            <span class="size">
		<label for="params-title-font-size"><?php _e('Font Size:','reslide');?></label>
		<input type="number" id="params-title-font-size" name="params[title][style][font][size]" rel="px"
               value="<?php echo esc_attr($params->title->style->font->size); ?>">
		</span>
            <span class="color">
		<label for="params-title-font-color"><?php _e('Font Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-title-font-color" name="params[title][style][color]" rel="#"
               value="<?php echo esc_attr($params->title->style->color); ?>">
		</span>
        </form>
        <div class="reslide_content">
            <div class="reslide_title">
                <div class="reslide_title_child"></div>
                <span class="title">Title</span>
            </div>
        </div>
    </div>
    <div id="reslide_slider_description_styling" class="reslide-styling main-content">
        <div class="reslide_close"><i class="fa fa-remove" aria-hidden="true"></i></div>
        <span class="popup-type" data="off"><img
                src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES . "/light_1.png"; ?>"></span>
        <form id="reslide-description-styling " class="params">
            <input type="hidden" class="width" name="params[description][style][width]" rel="px"
                   value="<?php echo esc_attr($params->description->style->width); ?>">
            <input type="hidden" class="height" name="params[description][style][height]" rel="px"
                   value="<?php echo esc_attr($params->description->style->height); ?>">
            <input type="hidden" class="top" name="params[description][style][top]" rel="0"
                   value="<?php echo esc_attr($params->description->style->top); ?>">
            <input type="hidden" class="left" name="params[description][style][left]" rel="0"
                   value="<?php echo esc_attr($params->description->style->left); ?>">
            <span class="color">
		<label for="params-description-background-color-link"><?php _e('Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-bullets-background-color-link"
               name="params[description][style][background][color]" rel="#"
               value="<?php echo esc_attr($params->description->style->background->color); ?>">
		</span>
            <span class="color">
		<label for="params-description-background-color-hover"><?php _e('Hover Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-bullets-background-color-hover"
               name="params[description][style][background][hover]" rel="#"
               value="<?php echo esc_attr($params->description->style->background->hover); ?>">
		</span>
            <span class="size">
		<label for="params-description-background-opacity"><?php _e('Opacity(%):','reslide');?></label>
		<input type="number" id="params-description-background-opacity" name="params[description][style][opacity]"
               rel="0" value="<?php echo esc_attr($params->description->style->opacity); ?>">
		</span>
            <span class="size">
		<label for="params-description-border-size"><?php _e('Border:','reslide');?></label>
		<input type="number" id="params-description-border-width" name="params[description][style][border][width]"
               rel="px" value="<?php echo esc_attr($params->description->style->border->width); ?>">
		</span>
            <span class="color">
		<label for="params-description-border-color"><?php _e('Border Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-description-border-color"
               name="params[description][style][border][color]" rel="#"
               value="<?php echo esc_attr($params->description->style->border->color); ?>">
		</span>
            <span class="size">
		<label for="params-description-background-radius"><?php _e('Border Radius:','reslide');?></label>
		<input type="number" id="params-description-border-radius" name="params[description][style][border][radius]"
               rel="px" value="<?php echo esc_attr($params->description->style->border->radius); ?>">
		</span>
            <span class="size">
		<label for="params-description-font-size"><?php _e('Font Size:','reslide');?></label>
		<input type="number" id="params-description-font-size" name="params[description][style][font][size]" rel="px"
               value="<?php echo esc_attr($params->description->style->font->size); ?>">
		</span>
            <span class="color">
		<label for="params-description-font-color"><?php _e('Font Color:','reslide');?></label>
		<input type="text" class="jscolor" id="params-description-font-color" name="params[description][style][color]"
               rel="#" value="<?php echo esc_attr($params->description->style->color); ?>">
		</span>
        </form>
        <div class="reslide_content">
            <div class="reslide_description">
                <div class="reslide_description_child"></div>
                <span class="description">description</span>
            </div>
        </div>
    </div>
    <?php
    foreach ( $customs as $custom ) {
        if ( $custom->type == "button" || $custom->type == "h3" ) {
            ?>
            <div id="reslide_slider_<?php echo $custom->type . $custom->id; ?>_styling"
                 class="reslide-styling reslide-custom-styling main-content" style="display:none;">
                <div class="reslide_close"><i class="fa fa-remove" aria-hidden="true"></i></div>
                <span class="popup-type" data="off"><img
                        src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES . "/light_1.png"; ?>"></span>
                <form id="reslide-<?php echo $custom->type; ?>-styling" class="custom">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>]" rel="0" value="{}">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][id]" rel="0"
                           value="<?php echo $custom->id; ?>">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][type]" rel="0"
                           value="<?php echo $custom->type; ?>">
                    <input type="hidden" class="text" name="custom[<?php echo $custom->type . $custom->id; ?>][text]"
                           rel="0" value="<?php echo esc_attr( $custom->text ); ?>">
                    <?php if ( $custom->type == 'button' ) { ?>
                        <span class="size">
							<label>Button url:</label>
							<input class="link" type="text"
                                   name="custom[<?php echo $custom->type . $custom->id; ?>][link]" rel="0" value="<?php echo ($custom->link?$custom->link:'#');?>">
							</span>
                    <?php } ?>
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style]" rel="0"
                           value="{}">
                    <input type="hidden" class="width"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][width]" rel="0"
                           value="<?php echo esc_attr($custom->style->width); ?>">
                    <input type="hidden" class="height"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][height]" rel="0"
                           value="<?php echo esc_attr($custom->style->height); ?>">
                    <input type="hidden" class="top"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][top]" rel="0"
                           value="<?php echo esc_attr($custom->style->top); ?>">
                    <input type="hidden" class="left"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][left]" rel="0"
                           value="<?php echo esc_attr($custom->style->left); ?>">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style][background]"
                           rel="0" value="{}">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style][border]"
                           rel="0" value="{}">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style][font]" rel="0"
                           value="{}">
                    <span class=" color">
				<label for="custom-background-color-link"><?php _e('Background Color:','reslide');?></label>
				<input type="text" class="jscolor" id="custom-bullets-background-color-link"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][background][color]" rel="#"
                       value="<?php echo esc_attr($custom->style->background->color); ?>">
				</span class="border-width">
                    <span class=" color">
				<label for="custom-background-color-hover"><?php _e('Hover Color:','reslide');?></label>
				<input type="text" class="jscolor" id="custom-bullets-background-color-hover"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][background][hover]" rel="#"
                       value="<?php echo esc_attr($custom->style->background->hover); ?>">
				</span>
                    <span class=" color">
				<label for="custom-background-opacity"><?php _e('Opacity(%):','reslide');?></label>
				<input type="number" id="custom-background-opacity"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][opacity]" rel="0"
                       value="<?php echo esc_attr($custom->style->opacity); ?>">
				</span>
                    <span class=" size">
				<label for="custom-border-size"><?php _e('Border:','reslide');?></label>
				<input type="number" id="custom-border-width"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][width]" rel="px"
                       value="<?php echo esc_attr($custom->style->border->width); ?>">
				</span>
                    <span class="color">
				<label for="custom-border-color"><?php _e('Border Color:','reslide');?></label>
				<input type="text" class="jscolor" id="custom-custom-border-color"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][color]" rel="#"
                       value="<?php echo esc_attr($custom->style->border->color); ?>">
				</span>
                    <span class=" size">
				<label for="custom-background-radius"><?php _e('Border Radius:','reslide');?></label>
				<input type="number" id="custom-custom-border-radius"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][radius]" rel="px"
                       value="<?php echo esc_attr($custom->style->border->radius); ?>">
				</span>
                    <span class="size">
				<label for="custom-font-size"><?php _e('Font Size:','reslide');?></label>
				<input type="number" id="custom-font-size"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][font][size]" rel="px"
                       value="<?php echo esc_attr($custom->style->font->size); ?>">
				</span>
                    <span class="color">
				<label for="custom-font-color"><?php _e('Font Color:','reslide');?></label>
				<input type="text" class="jscolor" id="custom-font-color"
                       name="custom[<?php echo $custom->type . $custom->id; ?>][style][color]" rel="#"
                       value="<?php echo esc_attr($custom->style->color); ?>">
				</span>
                </form>
                <div class="reslide_content">
                    <div class="reslide_<?php echo $custom->type; ?> reslide_custom"
                         style="width: <?php echo $custom->style->width; ?>; height: <?php echo $custom->style->height; ?>;">
                        <div class="reslide_custom_child"></div>
                        <?php if ( $custom->type == 'button' ) {
                            $custom->text = str_replace( '&#39;', "'", $custom->text );
                            $custom->text = str_replace( '&#34;', '"', $custom->text );
                            ?>
                            <span class="btn"><?php echo $custom->text; ?></span>
                        <?php } else if ( $custom->type == 'h3' ) {
                            $custom->text = str_replace( '&#39;', "'", $custom->text );
                            $custom->text = str_replace( '&#34;', '"', $custom->text );
                            ?>
                            <span class="h3"><?php echo $custom->text; ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php

        } elseif ( $custom->type == "img" ) { ?>
            <div id="reslide_slider_<?php echo $custom->type . $custom->id; ?>_styling"
                 class="reslide-styling reslide-custom-styling main-content" style="display:none;">
                <div class="reslide_close"><i class="fa fa-remove" aria-hidden="true"></i></div>
                <span class="popup-type" data="off"><img
                        src="<?php echo RESLIDE_PLUGIN_PATH_IMAGES . "/light_1.png"; ?>"></span>
                <form id="reslide-<?php echo $custom->type; ?>-styling" class="custom">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>]" rel="0" value="{}">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style]" rel="0"
                           value="{}">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][id]" rel="0"
                           value="<?php echo $custom->id; ?>">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][style][border]"
                           rel="0" value="{}">
                    <input type="hidden" id="custom_src" name="custom[<?php echo $custom->type . $custom->id; ?>][src]"
                           rel="0" value="<?php echo esc_attr($custom->src); ?>">
                    <input type="hidden" id="custom_alt" name="custom[<?php echo $custom->type . $custom->id; ?>][alt]"
                           rel="0" value="<?php echo esc_attr($custom->alt); ?>">
                    <input type="hidden" name="custom[<?php echo $custom->type . $custom->id; ?>][type]" rel="0"
                           value="img">
                    <input type="hidden" class="width"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][width]" rel="0"
                           value="<?php echo esc_attr($custom->style->width); ?>">
                    <input type="hidden" class="height"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][height]" rel="0"
                           value="<?php echo esc_attr($custom->style->height); ?>">
                    <input type="hidden" class="top"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][top]" rel="0"
                           value="<?php echo esc_attr($custom->style->top); ?>">
                    <input type="hidden" class="left"
                           name="custom[<?php echo $custom->type . $custom->id; ?>][style][left]" rel="0"
                           value="<?php echo esc_attr($custom->style->left); ?>">
                    <span class=" color">
			<label for="custom-background-opacity"><?php _e('Opacity(%):','reslide');?></label>
			<input type="number" id="custom-background-opacity"
                   name="custom[<?php echo $custom->type . $custom->id; ?>][style][opacity]" rel="0"
                   value="<?php echo esc_attr($custom->style->opacity); ?>">
			</span>
                    <span class="border-width size">
			<label for="custom-custom-border-size"><?php _e('Border:','reslide');?></label>
			<input type="number" id="custom-custom-border-width"
                   name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][width]" rel="px"
                   value="<?php echo esc_attr($custom->style->border->width); ?>">
			</span>
                    <span class="border-color color">
			<label for="custom-custom-border-color"><?php _e('Border Color:','reslide');?></label>
			<input type="text" class="jscolor" id="custom-custom-border-color"
                   name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][color]" rel="#"
                   value="<?php echo esc_attr($custom->style->border->color); ?>">
			</span>
                    <span class="border-radius size">
			<label for="custom-custom-background-radius"><?php _e('Border Radius:','reslide');?></label>
			<input type="number" id="custom-custom-border-radius"
                   name="custom[<?php echo $custom->type . $custom->id; ?>][style][border][radius]" rel="px"
                   value="<?php echo esc_attr($custom->style->border->radius); ?>">
			</span>
                </form>
                <div class="reslide_content">
                    <div class="reslide_img reslide_custom"><img class="img" src="<?php echo $custom->src; ?>"></div>
                </div>
            </div>

            <?php
        }
    } ?>
    <style>
        #reslide_slider_preview_popup {
            display: none;
            position: fixed;
            height: 100%;
            width: 100%;
            background: #000000;
            opacity: 0.7;
            top: 0;
            left: 0;
            z-index: 9998;
        }

        #reslide_slider_preview {
            padding: 40px;
            overflow-y: scroll;
            overflow: overlay;
            display: none;
            position: fixed;
            height: 80%;
            width: 90%;
            background: #f1f1f1;
            opacity: 1;
            top: 10%;
            left: 5%;
            z-index: 999999999;
            box-sizing: border-box;
        }

        /*** title styling***/

        #reslide_slider_title_styling .reslide_content .reslide_title {
            background-color: <?php echo sanitize_hex_color("#".$params->title->style->background->color);?>;
            border-width: <?php echo absint($params->title->style->border->width);?>px;
            border-color: <?php echo sanitize_hex_color("#".$params->title->style->border->color);?>;
            border-radius: <?php echo absint($params->title->style->border->radius);?>px;

            font-size: <?php echo absint($params->title->style->font->size);?>px;
            color: <?php echo sanitize_hex_color("#".$params->title->style->color);?>;
            border-style: solid;
            box-sizing: border-box;
            overflow: hidden;
        }

        #reslide_slider_title_styling .reslide_content .reslide_title:hover {
            background-color: <?php echo sanitize_hex_color("#".$params->title->style->background->hover);?>;
        }

        #reslide_slider_title_styling .reslide_content .reslide_title .reslide_title_child {
            opacity: <?php echo abs($params->title->style->opacity)/100;?>;
            filter: alpha(opacity=<?php echo abs($params->title->style->opacity);?>);
        }

        #reslide_slider_description_styling .reslide_content .reslide_description {
            background: <?php echo sanitize_hex_color("#".$params->description->style->background->color);?>;
            border-width: <?php echo abs($params->description->style->border->width);?>px;
            border-color: <?php echo sanitize_hex_color("#".$params->description->style->border->color);?>;
            border-radius: <?php echo abs($params->description->style->border->radius);?>px;
            opacity: <?php echo abs($params->description->style->opacity)/100;?>;
            filter: alpha(opacity=<?php echo abs($params->description->style->opacity);?>);
            font-size: <?php echo absint($params->description->style->font->size);?>px;
            color: <?php echo sanitize_hex_color("#".$params->description->style->color);?>;
            border-style: solid;
            box-sizing: border-box;
            overflow: hidden;
        }

        #reslide_slider_description_styling .reslide_content .reslide_description:hover {
            background: <?php echo sanitize_hex_color("#".$params->description->style->background->hover);?>;
        }
        
        /*** title styling***/
        .reslide-custom-styling .reslide_content .reslide_custom .reslide_img {
            box-sizing: border-box;
            border-style: solid !important;
        }

        .reslide-custom-styling .reslide_content .reslide_custom img {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            display: block;
        }

        .reslideimg {
            overflow: hidden;
            box-sizing: border-box;
            box-sizing: border-box;
        }

        #reslide_slider_preview .reslide_content {
            position: absolute;
            background: #FBABAB;
            width: 100%;
            height: 100%;
        }

        .ruler {
            width: 100%;
            height: <?php echo absint($style->height) + 50;?>px;
            position: relative;
            overflow: hidden;
            top: 15px;
            clear: both;
        }
        
        #reslide-slider-construct {
            margin: 17px;
            width: <?php echo absint($style->width);?>px;
            height: <?php echo absint($style->height);?>px;
            position: relative;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            overflow: hidden;
            background: rgba(223, 223, 223, 0.56);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
            -moz-box-shadow: inset 0 0 1px #000000;
            -webkit-box-shadow: inset 0 0 1px #000000;
            box-shadow: inset 0 0 1px #000000;

        }

        .reslide_construct {
            max-width: <?php echo absint($style->width);?>px;
            max-height: <?php echo absint($style->height);?>px;
            position: absolute;
            width: 100px;
            height: 50px;
            margin: 0;
            padding: 0;
            word-wrap: break-word;
            background: green;
            display: inline-block;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: move;
        }

        img.reslide_construct {
            width: 100px;
            height: auto;
        }

        #reslide-title-construct {
            position: absolute;
            min-width: 50px;
            width: <?php echo absint($params->title->style->width);?>px;
            height: <?php echo absint($params->title->style->height);?>px;
            background: transparent;
            cursor: move;
            top: <?php echo esc_attr($params->title->style->top);?>;
            left: <?php echo esc_attr($params->title->style->left);?>;
            opacity: 0.9;
            color: rgb(86, 88, 85);
            filter: alpha(opacity=<?php echo abs($params->title->style->opacity);?>);
            border: 2px dashed #898989;
            word-wrap: break-word;
            overflow: hidden;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            box-sizing: border-box;
        }

        #reslide-description-construct {
            position: absolute;
            min-width: 50px;
            width: <?php echo absint($params->description->style->width);?>px;
            height: <?php echo absint($params->description->style->height);?>px;
            background: <?php echo sanitize_hex_color("#".$params->description->style->background->color);?>;
            background: transparent;

            cursor: move;
            top: <?php echo esc_attr($params->description->style->top);?>;
            left: <?php echo esc_attr($params->description->style->left);?>;
            opacity: 0.9;
            color: rgb(86, 88, 85);
            border: 2px dashed #898989;
            filter: alpha(opacity=<?php echo abs($params->description->style->opacity);?>);
            word-wrap: break-word;
            overflow: hidden;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            box-sizing: border-box;
        }

        #reslide-custom-construct {
            position: absolute;
            min-width: 50px;
            cursor: move;
            word-wrap: break-word;
            overflow: hidden;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        <?php	foreach ($customs as $custom) {
            switch ($custom->type) {
                case 'img':
                ?>
                /*** construct conatiner ***/
                #reslide_<?php echo $custom->type.$custom->id;?> {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    top: <?php echo esc_attr($custom->style->top);?>;
                    left: <?php echo esc_attr($custom->style->left);?>;
                }

                #reslide_<?php echo $custom->type.$custom->id;?> img {
                    width: 100%;
                    height: 100%;
                }

                /*** styling conatiner ***/
                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .reslide_content .reslide_img {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    border-width: <?php echo absint($custom->style->border->width);?>px;
                    border-radius: <?php echo absint($custom->style->border->radius);?>px;
                    border-color: <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
                    border-style: solid;
                    overflow: hidden;
                }

                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .img {
                    width: 100%;
                    height: 100%;
                    display: block;
                    opacity: <?php echo (abs($custom->style->opacity)/100)?>;
                }
                <?php
                case 'h3':
                ?>
                /*** construct conatiner ***/
                #reslide_<?php echo $custom->type.$custom->id;?> {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    top: <?php echo esc_attr($custom->style->top);?>;
                    left: <?php echo esc_attr($custom->style->left);?>;
                    position: absolute;
                    box-sizing: border-box;
                }

                #reslide_<?php echo $custom->type.$custom->id;?> h3 {
                    margin: 0;
                    padding: 0;
                    word-wrap: break-word;
                }

                /*** styling conatiner ***/
                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .reslide_content .reslide_h3 {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    color: <?php echo sanitize_hex_color("#".$custom->style->color);?>;
                    font-size: <?php echo absint($custom->style->font->size);?>px;
                    border-width: <?php echo absint($custom->style->border->width);?>px;
                    border-radius: <?php echo absint($custom->style->border->radius);?>px;
                    border-color: <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
                    border-style: solid;
                }

                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .reslide_custom_child {
                    background: <?php echo sanitize_hex_color("#".$custom->style->background->color);?>;
                    opacity: <?php echo (esc_attr($custom->style->opacity)/100)?>;
                }
                <?php
                break;
                case 'button':
                ?>

                /*** construct conatiner ***/
                #reslide_<?php echo $custom->type.$custom->id;?> {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    top: <?php echo esc_attr($custom->style->top);?>;
                    left: <?php echo esc_attr($custom->style->left);?>;
                    position: absolute;
                }

                #reslide_<?php echo $custom->type.$custom->id;?> button {
                    width: 100%;
                    height: 100%;
                    display: block;
                }

                /*** styling conatiner ***/
                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .reslide_content .reslide_button {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    color: <?php echo sanitize_hex_color("#".$custom->style->color);?>;
                    font-size: <?php echo absint($custom->style->font->size);?>px;
                    border-width: <?php echo absint($custom->style->border->width);?>px;
                    border-color: <?php echo sanitize_hex_color("#".$custom->style->border->color);?>;
                    border-radius: <?php echo absint($custom->style->border->radius);?>px;
                    border-style: solid;
                }

                #reslide_slider_<?php echo $custom->type.$custom->id;?>_styling .reslide_custom_child {
                    background: <?php echo sanitize_hex_color("#".$custom->style->background->color);?>;
                    opacity: <?php echo (abs($custom->style->opacity)/100)?>;
                }
                <?php
                break;
                case 'iframe':
                ?>
                #reslide_<?php echo $custom->type.$custom->id;?> {
                    width: <?php echo absint($custom->style->width);?>px;
                    height: <?php echo absint($custom->style->height);?>px;
                    top: <?php echo esc_attr($custom->style->top);?>;
                    left: <?php echo esc_attr($custom->style->left);?>;
                    position: relative;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }

                #reslide_<?php echo $custom->type.$custom->id;?> img {
                    width: 40px;
                    height: 20px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    display: block;
                    transform: translate(-50%, -50%);
                }
                <?php
                break;
                }
        }
        ?>
        #reslide-description-construct #reslide_remove {
            opacity: 0;
        }

        div[id*=slider].reslide_slider_container_preview {
        <?php
            switch( (string)$params->imageframes ) {
        case '1':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_1.png") 100 103 103 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '2':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_2.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '3':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_3.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '4':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_4.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '5':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_5.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '6':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_6.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '7':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_7.png") 100 100 100 100 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        case '8':
            echo 'border-image: url("' . RESLIDE_PLUGIN_PATH_FRONT_IMAGES. '/image_frames/frame_8.png") 100 135 100 140 stretch stretch; 
                  border-style: inset;
                  border-width: 60px;';
            break;
        }
        ?>
        }

        .reslide_slider_preview .reslideitem img {
        <?php
            switch( (string)$params->imagefilters ) {
            case '1':
                echo '-webkit-filter: grayscale(1);
                     filter: grayscale(1);';
                break;
            case '2':
                echo '-webkit-filter: sepia(1);
                     filter: sepia(1);';
                break;
            case '3':
                echo '-webkit-filter: saturate(4);
                        filter: saturate(4);';
                break;
            case '4':
                echo '-webkit-filter: hue-rotate(90deg);
                    filter: hue-rotate(90deg);';
                break;
            case '5':
                echo '-webkit-filter: invert(.8);
                    filter: invert(.8);';
                break;
            case '6':
                echo '-webkit-filter: opacity(.5);
                    filter: opacity(.5);';
                break;
            case '7':
                echo '-webkit-filter: brightness(.5);
                    filter: brightness(.5);';
                break;
            case '8':
                echo '-webkit-filter: contrast(3);
                    filter: contrast(3);';
                break;
            case '9':
                echo '-webkit-filter: blur(1px);
                    filter: blur(1px);';
                break;
            case '10':
                echo '-webkit-filter: sepia(1) hue-rotate(200deg);
                    filter: sepia(1) hue-rotate(200deg);';
                break;
            case '11':
                echo '-webkit-filter: contrast(1.4) saturate(1.8) sepia(.6);
                    filter: contrast(1.4) saturate(1.8) sepia(.6);';
                break;
            case '12':
                echo '-webkit-filter: grayscale(1) brightness(0.45) contrast(1.05);
                    filter: grayscale(1) brightness(0.45) contrast(1.05);';
                break;
            case '13':
                echo '-webkit-filter: contrast(110%) brightness(110%) contrast(130%);
                    filter: contrast(110%) brightness(110%) contrast(130%);';
                break;
            case '14':
                echo '-webkit-filter: contrast(90%) brightness(120%) contrast(85%) hue-rotate(20deg);
                    filter: contrast(90%) brightness(120%) contrast(85%) hue-rotate(20deg);';
                break;
            case '15':
                echo '-webkit-filter: contrast(100%) brightness(105%) contrast(100%) hue-rotate(270deg);
                    filter: contrast(100%) brightness(105%) contrast(100%) hue-rotate(270deg);';
                break;
            case '16':
                echo '-webkit-filter: contrast(150%) brightness(100%) contrast(110%);
                    filter: contrast(150%) brightness(100%) contrast(110%);';
                break;
            case '17':
                echo '-webkit-filter: contrast(85%) brightness(110%) contrast(75%) sepia(22%);
                    filter: contrast(85%) brightness(110%) contrast(75%) sepia(22%);';
                break;
            case '18':
                echo '-webkit-filter: contrast(100%) brightness(110%) contrast(160%) sepia(30%) hue-rotate(350deg);
                    filter: contrast(100%) brightness(110%) contrast(160%) sepia(30%) hue-rotate(350deg);';
                break;
            case '19':
                echo '-webkit-filter: contrast(100%) brightness(100%) contrast(100%) sepia(30%);
                     filter: contrast(100%) brightness(100%) contrast(100%) sepia(30%);';
                break;
        }
        ?>
        }

    </style>
    <?php
}