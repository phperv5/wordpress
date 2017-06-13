<?php
/** widgets */
add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'First_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Second_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Third_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Fourth_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}


function curPageURL()
{
    $pageURL = 'http://';

    $this_page = $_SERVER["REQUEST_URI"];
    if (strpos($this_page, "?") !== false)
        $this_page = reset(explode("?", $this_page));

    $pageURL .= $_SERVER["SERVER_NAME"] . $this_page;

    return $pageURL;
}


function get_attachment_image()
{
    $attachment_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
    echo $attachment_image[0];
}

/**
 * getPostViews()函数
 * 功能：获取阅读数量
 * 在需要显示浏览次数的位置，调用此函数
 * @Param object|int $postID   文章的id
 * @Return string $count   文章阅读数量
 */
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

//导航
function getNavigation()
{
    $category = get_the_category();
    if (isset($category[0])) {
        $categoryArr = $category[0];
        $url = "<span><a href='/'>首页</a>&gt;<a href='/?cat={$categoryArr->cat_ID}'>{$categoryArr->cat_name}</a></span>";
        return $url;
    }
    return '';
}


function aurelius_comment($comment, $args, $depth)
{
$GLOBALS['comment'] = $comment; ?>
<li class="comment" id="li-comment-<?php comment_ID(); ?>">
    <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) {
            echo get_avatar($comment, 48);
        } ?></div>
    <div class="comment_content" id="comment-<?php comment_ID(); ?>">
        <div class="clearfix">
            <?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>
            <div class="comment-meta commentmetadata">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></div>
            &nbsp;&nbsp;&nbsp;<?php edit_comment_link('修改'); ?>
        </div>

        <div class="comment_text">
            <?php if ($comment->comment_approved == '0') : ?>
                <em>你的评论正在审核，稍后会显示出来！</em><br/>
            <?php endif; ?>
            <?php comment_text(); ?>
        </div>
    </div>
    <?php } ?>



