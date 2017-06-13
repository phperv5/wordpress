<?php get_header(); ?>
<?php if (have_posts()) : the_post();update_post_caches($posts); ?>
    <div class="views">
        <div class="view view-main" data-page="gift-detail">
            <div class="navbar">
                <div class="navbar-inner navbar-on-center header">
                    <div class="left sliding">
                        <a href="javascript:history.back();" class="back link">
                            <i class="icon icon-back"></i>
                            <span>&nbsp;</span>
                        </a>
                    </div>
                    <div class="center sliding" style="left: -12px;">苹果赚钱</div>
                    <div class="right share"></div>
                </div>
            </div>
            <?php
            $category = get_the_category();
            var_dump($category);
            ?>
            <div class="pages navbar-through">
                <div data-page="gift-detail" class="page page-on-center">
                    <div class="page-content">
                        <div class="wrapper wrapper-gift-detail-list wrapper-detail-index ui-list" id="wrapper">
                            <!-- 礼包详情 -->
                            <div class="list-block gift-detail-list ui-panel">

                                <div class="content-block-inner mod-gift">
                                    <h2 class="ui-arrowlink ui-border-b">首页>苹果</h2>
                                    <div class="mod-gift-info">
                                        <div class="ui-nowrap" style="padding-bottom: 30px;"><?php echo the_content(); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="control_btn_container" class="index-mod-fixed toolbar hide" style="display: block;">
             <div class="toolbar-inner ui-btn-wrap">
                 <?php if(get_post_meta(get_the_ID(),'link',true)){ ?>
                 <a href="<?php echo get_post_meta(get_the_ID(),'link',true);?>" class="ui-btn-lg ui-btn-primary">开始赚钱</a>
                 <?php }?>
             </div>
         </div>
    </div>

<?php endif; ?>
<?php get_footer(); ?>