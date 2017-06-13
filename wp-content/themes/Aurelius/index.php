<?php get_header(); ?>
<div class="navbar">
      <div class="navbar-inner navbar-on-center header ">
                <div class="left logo">
                    <img src="http://www.xyou.cn/App/home/Assets/dist/Images/logo.png?ver=1.0.2" alt="XYOU网"></div>
        <div class="right share">
          <a href="http://www.xyou.cn/integral/wechat" class="follow-wechat" id="follow_wechat">关注微信</a></div>
              </div>
</div>
<?php echo do_shortcode("[R-slider id='1']"); ?>      
<div class="space-blank"></div>
<?php get_template_part('template-parts/nav_menu', get_post_format());?>
<div class="" style="">
    <div class="view view-main" data-page="welfare">
        <div class="pages navbar-fixed">
            <div data-page="welfare" class="page with-subnavbar">

                <div class="tabs-swipeable-wrap swiper-container swiper-container-horizontal">
                        <div id="gift" class="">
                            <div class="content-block">
                                <div class="wrapper wrapper-gift-list" id="wrapper">
                                    <div class="ui-tab">
                                        <section class="list-block rank-list">
                                            <ul  class="ui-list">
                                                <?php
                                                query_posts('cat=4');  
                                                if (have_posts()):
                                                    while (have_posts()):
                                                        the_post();
                                                        get_template_part('template-parts/content', get_post_format());
                                                    endwhile;
                                                endif;
                                                ?>
                                            </ul>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>
