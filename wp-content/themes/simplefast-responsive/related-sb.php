<?php global $post; $categories = get_the_category($post->ID);
 if ($categories) { $category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array('category__in' => $category_ids,'post__not_in' => array($post->ID),'posts_per_page'=> 4, 'orderby' => 'rand' );
 $my_query = new wp_query( $args );
if( $my_query->have_posts() ) {while( $my_query->have_posts() ) { $my_query->the_post();?>
<div class="post-sidebar">
<div class="posttitle post-<?php echo $postCount ;?>"><?php get_template_part( 'thumb2'); ?>
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php
$the_title = $post->post_title;  $getlength = strlen($the_title); $thelength = 35; echo substr($the_title, 0, $thelength); if ($getlength > $thelength) ; ?></a></h3> </div>
<div style="clear: both"></div>
</div>
<?php
}
}
}
wp_reset_query(); ?>