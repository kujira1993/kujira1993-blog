<?php
require_once("../../../wp-config.php");
 
$now_post_num = $_POST['now_post_num'];
$get_post_num = $_POST['get_post_num'];
 
$next_now_post_num = $now_post_num + $get_post_num;
$next_get_post_num = $get_post_num + $get_post_num;
$thumb = get_the_post_thumbnail($result->ID); 
 
$sql = "SELECT
        $wpdb->posts.ID,
        $wpdb->posts.post_title,
        $wpdb->posts.post_excerpt,
        $wpdb->posts.post_content
    FROM 
        $wpdb->posts  
    WHERE 
        $wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish'
    ORDER BY 
        $wpdb->posts.post_date DESC 
    LIMIT $now_post_num, $get_post_num";
         
$results = $wpdb->get_results($sql);
 
$sql = "SELECT
        $wpdb->posts.ID,
        $wpdb->posts.post_title,
        $wpdb->posts.post_content,
        $wpdb->posts.post_content
    FROM 
        $wpdb->posts  
    WHERE 
        $wpdb->posts.post_type = 'post' AND $wpdb->posts.post_status = 'publish'
    ORDER BY 
        $wpdb->posts.post_date DESC 
    LIMIT $next_now_post_num, $next_get_post_num";
 
$next_results = $wpdb->get_results($sql);
 
$noDataFlg = 0;
if ( count($results) < $get_post_num || !count($next_results) ) {
    $noDataFlg = 1;
}
 
$html = "";
 
foreach ($results as $result) {
    $html .= '<li>';
    $html .= '<a class="post_link_wrap" href="'.get_permalink($result->ID).'">';
    $html .= '<p class="post_thum scale">'.get_the_post_thumbnail('', $result->ID).'</p>';
    $html .= '<div class="post_inner">';
    $html .= '<p><a href="'.get_permalink($result->ID).'" class="over">'.apply_filters('the_title', $result->post_title).'</a></p>';
    $html .= '<p>'.apply_filters('the_excerpt', $result->post_excerpt).'</p>';
    $html .= '<hr class="post_line">';
    $html .= '<p class="post_day">'.get_post_time('M d, Y','false',$result->ID).'</p>';
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</li>';
}
 
$returnObj = array();
$returnObj = array(
    'noDataFlg' => $noDataFlg,
    'html' => $html,
);
$returnObj = json_encode($returnObj);
 
echo $returnObj;
 
?>