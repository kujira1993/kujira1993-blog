<?php
add_theme_support('post-thumbnails');

function mypace_custom_title( $title ){
  if( is_singular() ){ //タイトルタグカスタマイズの範囲を条件分岐で指定
     $post_id = get_the_ID(); //投稿IDを取得
     $my_title = get_post_meta( $post_id, 'my_title', true ); //カスタムフィールドの値を取得
     if( $my_title ){ //カスタムフィールドに値がある時
        return esc_html( $my_title ); //エスケープして出力
    }
  }
  return $title; //条件外の時はWordPressコアで定義されているタイトルのまま出力
}
add_filter( 'wp_title', 'mypace_custom_title', 10, 2 ); //フィルターフックで処理を上書き

?>