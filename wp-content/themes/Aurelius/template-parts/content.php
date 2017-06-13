<li class="item-inner gameList j-link" data-giftid="138">
    <div class="ui-list-thumb ui-gameicon-ph">
        <span style="background-image:url('<?php get_attachment_image();  ?>')"></span>
    </div>
    <div class="ui-list-info ui-box">
        <div class="ui-label-wrap">
            <h4 class="ui-nowrap"><?php the_title(); ?></h4>
        </div>
        <p class="ui-nowrap"><?php if(function_exists('the_views')) { the_views(); } ?></p>
        <div class="line-wrap">
        </div>
    </div>
    <a href="<?php the_permalink(); ?>" class="ui-btn get">领取</a>
</li>